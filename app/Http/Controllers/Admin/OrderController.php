<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Orders;
use App\Models\Status;
use App\Models\Transaction;
use App\Models\pizzaDetails;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    protected $orders;
    protected $status;
    protected $transaction;
    protected $productDetails;

    public function __construct(Orders $_orders = null, Status $_status = null,
                                Transaction $_transaction = null,
                                pizzaDetails $_productDetails = null)
    {
        $this->middleware('auth');
        $this->orders = $_orders;
        $this->status = $_status;
        $this->transaction = $_transaction;
        $this->productDetails = $_productDetails;
    }
    public function index(){
        $listOrders = $this->orders->getListOrders();
        return view('admin.orders.list_orders',[
            'listOrders' => $listOrders
        ]);
    }
    public function orderDetails($id){
        $idOrders = $this->orders->getOrderById($id);
        return view('admin.orders.list_orderDetails',[
            'idOrders' => $idOrders
        ]);
    }
    public function editOrders($id){
        $idOrders = $this->orders->getOrderById($id);
        if($idOrders->approved == 0){
            $status = $this->status->where('id','<=', 2)->get();
        }else{
            $checkTransaction = $this->transaction->where('order_id', $idOrders->id)->first();
            if(!isset($checkTransaction)){
                $status = $this->status->where('id','>=', 2)->get();
            }else{
                $status = $this->status->where('id','>', 2)->get();
            }

        }

        return view('admin.order.edit_orders',[
            'idOrder' => $idOrder,
            'status' => $status
        ]);
    }
    public function updateOrders(Request $request, $id){
        $validatedData = $request->validate([
            'name' => ['required'],
            'phone' => ['required'],
            'address' => ['required'],
            'total' => ['required'],

        ],[
            'name.required' => 'Vui lòng nhập tên người nhận',
            'phone.required' => 'Vui lòng nhập số điện thoại người nhận',
            'address.required' => 'Vui lòng nhập địa chỉ người nhận',
            'total.required' => 'Vui lòng nhập tổng tiền',

        ]);
        $idOrder = $this->order->getOrderById($id);
        if($request->status == 2 && $oOrder->approved == 0){
            foreach($idOrder->orderdetails as $key => $orderDetails)
            {
                $status= $this->productDetails->getStatusById($orderdetails->product_details_id);
                if($status->quantity <= 0){
                    DB::rollback();
                    return redirect()->back()->with([
                        'message' => 'Sản phẩm đã hết hàng',
                        'class' => 'error'
                    ]);
                }elseif($status->quantity < $idOrder->quantity){
                    DB::rollback();
                    return redirect()->back()->with([
                        'message' => 'Sản phẩm không đủ số lượng cho đơn hàng này',
                        'class' => 'error'
                    ]);
                }else{
                    $status->quantity = $status->quantity - $orderdetails->quantity;
                    if(!($status->save())){
                        DB::rollback();
                        return redirect()->back()->with([
                            'message' => 'Cập nhật lỗi',
                            'class' => 'error'
                        ]);
                    }
                }
            }
            DB::beginTransaction();
            try {
                $idOrder = $this->orders->getOrderById($id);
                $idOrder->recipient = $request->recipient;
                $idOrder->address = $request->address;

                $idOrder->phone = $request->phone;
                $idOrder->payment_type = $request->payment_type;
                $idOrder->total = $request->total;

                $idOrder->user_id = $request->user_id;
                $idOrder->status_id = $request->status;

                if($request->status == 2 && $idOrder->approved == 1){
                    DB::rollback();
                    return redirect()->back()->with([
                        'message' => 'Đơn hàng đã được phê duyệt',
                        'class' => 'error'
                    ]);
                }
                $idOrder->approved = '1';
                if(!($idOrder->save())){
                    DB::rollback();
                    return redirect()->back()->with([
                        'message' => 'Cập nhật lỗi',
                        'class' => 'error'
                    ]);
                }
            }  catch (\Exception $e) {
                DB::rollback();
                return redirect()->back()->with([
                    'message' => 'Cập nhật lỗi',
                    'class' => 'error'
                ]);
            }
            DB::commit();
            return redirect()->back()->with([
                'message' => 'Cập nhật thành công',
                'class' => 'success'
            ]);
        }else{
            DB::beginTransaction();
            try {
                $idOrder = $this->orders->getOrderById($id);

                $idOrder->recipient = $request->recipient;
                $idOrder->address = $request->address;

                $idOrder->phone = $request->phone;

                $idOrder->payment_type = $request->payment_type;
                $idOrder->total = $request->total;

                if($request->status == 3){
                    $idOrder->status = $request->status;
                    $idTransaction = $this->transaction;
                    $checkTransaction = $idTransaction->where('order_id', $idOrder->id)->first();
                    if(isset($checkTransaction)){
                        DB::rollback();
                        return redirect()->back()->with([
                            'message' => 'Đơn hàng đã được thanh toán',
                            'class' => 'error'
                        ]);

                    }
                    $idTransaction->tittle = 'Thu' ;
                    $idTransaction->amount = $idOrder->total;
                    $idTransaction->order_id = $idOrder->id ;
                    $idTransaction->note = $idOrder->user->name.' thanh toán cho đơn hàng ';
                    $idTransaction->created_at = Carbon::now();
                    if(!($idTransaction->save())){
                        DB::rollback();
                        return redirect()->back()->with([
                            'message' => 'Cập nhật lỗi',
                            'class' => 'error'
                        ]);
                    }
                }else{
                    $idOrder->status_id = $request->status;
                }
                if($request->status == 2 && $idOrder->approved == 1){
                    DB::rollback();
                    return redirect()->back()->with([
                        'message' => 'Đơn hàng đã được phê duyệt',
                        'class' => 'error'
                    ]);
                }
                if(!($idOrder->save())){
                    DB::rollback();
                    return redirect()->back()->with([
                        'message' => 'Cập nhật lỗi',
                        'class' => 'error'
                    ]);
                }
            }  catch (\Exception $e) {
                DB::rollback();
                return redirect()->back()->with([
                    'message' => 'Cập nhật lỗi',
                    'class' => 'error'
                ]);
            }
            DB::commit();
            return redirect()->back()->with([
                'message' => 'Cập nhật thành công',
                'class' => 'success'
            ]);
        }

    }
    public function delete($id){
        $idOrder = $this->orders;
        if(!($idOrder->destroy($id))){
            return redirect()->back()->with([
                'message' => 'Xoá đơn hàng lỗi',
                'class' => 'error'
            ]);
        }
        return redirect()->back()->with([
            'message' => 'Xoá đơn hàng thành công',
            'class' => 'success'
        ]);
    }
}

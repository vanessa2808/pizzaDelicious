<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pizzaDetails;
use App\Models\Orders;
use App\Models\OrderDetail;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Auth as Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    protected $products;
    protected $productdetails;
    protected $orders;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Products $_products = null,
                                Orders $_orders = null,
                                pizzaDetails $_productdetails = null)
    {
        $this->middleware('auth');
        $this->products = $_products;
        $this->orders = $_orders;
        $this->productdetails = $_productdetails;
    }
    public function addCart(Request $request)
    {

        $status= $this->productdetails->getStatusById($request->sizeId);
        $oPorduct= $this->products->getProductById($request->productId);
        if($status->quantity <= 0){
            return response()->json(array(
                "errors" => array("error" => array('Sản Phẩm size này đã hết hàng'))
            ), 422);
        }
        $cart = Cart::add([
            'id' => $request->sizeId,
            'name' => $oPorduct->name,
            'qty' => $request->quantity,
            'price' => $oPorduct->price,
            'options' => [
                'image' => $oPorduct->image,
                'size' => $status->size,
            ],
        ]);
        return response()->json($cart);
    }
    public function getCart()
    {
        $listProductHot= $this->products->getProductsHot();
        return view('home.cart.index',
            [
                'listProductHot' => $listProductHot
            ]);
    }
    public function removeItemCart($id)
    {
        Cart::remove($id);

        return redirect()->back();
    }
    public function updateCart(Request $request)
    {

        $oCart = Cart::get($request->rowId);
        $status= $this->productdetails->getStatusById($oCart->id);
        if($status->quantity < $request->quantity){
            return response()->json(array(
                "errors" => array("error" => array('Size này chỉ còn '. $status->quantity .' sản phẩm' ))
            ), 422);
        }
        $cart = Cart::update($request->rowId, $request->quantity);
        $totalCart = number_format(floatval(preg_replace( '#[^\d.]#', '', Cart::total())));

        return response()->json(array('oCart' => $cart, 'totalCart' => $totalCart));
    }
    public function orderCart(Request $request)
    {
        $validatedData = $request->validate([
            'name' => ['required', 'string'],
            'phone' => ['required'],
            'address' => ['required'],

        ],[
            'name.required' => 'Vui lòng nhập tên người nhận',
            'phone.required' => 'Vui lòng hập số điện thoại người nhận',
            'address.required' => 'Vui lòng hập địa chỉ người nhận',

        ]);
        $aCart = Cart::content();
        DB::beginTransaction();
        try {
            $newOrder = new Orders();
            $newOrder->user_id = Auth::user()->id;
            $newOrder->recipient = $request->name;
            $newOrder->address = $request->address;
            $newOrder->phone_number = $request->phone;
            $newOrder->payment_type = $request->payment_type;
            $newOrder->total = Cart::total();
            $newOrder->status_id = 1;
            $newOrder->created_at = Carbon::now();
            $newOrder->save();
            foreach($aCart as $key => $oProduct)
            {
                // dd($oProduct->qty);
                $status= $this->productdetails->getStatusById($oProduct->id);

                if($status->quantity <= 0){
                    DB::rollback();
                    return redirect()->back()->with([
                        'message' => 'Sản phẩm đã hết hàng',
                        'class' => 'error'
                    ]);
                }elseif($status->quantity < $oProduct->qty){
                    DB::rollback();
                    return redirect()->back()->with([
                        'message' => 'Sản phẩm không đủ số lượng cho đơn hàng này',
                        'class' => 'error'
                    ]);
                }
                else{
                    $newOrderDetail = new OrderDetail();
                    $newOrderDetail->order_id = $newOrder->id;
                    $newOrderDetail->product_detail_id = $oProduct->id;
                    $newOrderDetail->quantity = $oProduct->qty;
                    $newOrderDetail->price = $oProduct->price;
                    $newOrderDetail->created_at = Carbon::now();
                    if(!$newOrderDetail->save()){
                        DB::rollback();
                        return redirect()->back()->with([
                            'message' => 'Có lỗi trong quá trình đặt hàng',
                            'class' => 'error'
                        ]);
                    }

                }

            }
            Cart::destroy();
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->with([
                'message' => 'Có lỗi trong quá trình đặt hàng',
                'class' => 'error'
            ]);
        }
        DB::commit();
        return redirect('/order')->with([
            'message' => 'Đặt hàng thành công',
            'class' => 'success'
        ]);
    }
    public function getOrderByUser()
    {
        $userId = Auth::user()->id;
        $listOrder = $this->orders->getListOrderByUserId($userId);

        return view('home.order.index',[
            'listOrder' => $listOrder
        ]);
    }
}

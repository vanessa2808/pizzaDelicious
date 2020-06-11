<?php

namespace App\Http\Controllers\Admin;

use App\Models\Address;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\AddressRequest;
use phpDocumentor\Reflection\Types\Self_;

class AddressController extends Controller
{
    protected $address;
    protected const RETURN_NUM_ZERO = 0;
    protected const RETURN_NUM_ONE = 1;
    protected const RETURN_STR_ZERO ="0";
    protected const RETURN_STR_ONE= "1";
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(Address $_address= null)
    {
        $this->middleware('auth');
        $this->address= $_address;
    }
    public function index() {
        $listAddress = $this->address->getAllAddress();
        return view('admin.address.list_address',[
            'listAddress' => $listAddress
        ],compact('listAddress'));
    }

    public function getAddAddress()
    {
        return view('admin.address.add_address');
    }
    public function postAddAddress(AddressRequest $request) {
        $newAddress = $this->address->addNewAddress($request);
        if($newAddress == self::RETURN_STR_ZERO) {
            return redirect('admin/address/add_address')->with([
                'message' => 'Header is error',
                'class' =>'error'
            ]);;
        }
        return redirect('/admin/address/list_address')->with(([
            'message' => 'add successfully',
            'class' => 'success'
        ]));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getEditAddress($id)
    {
        $idAddress = $this->address->getAddressById($id);
        return view('admin.address.edit_address',[
            '$idAddress' => $idAddress
        ],compact('$idAddress'));
    }
    public function postEditAddress(AddressRequest $request, $id) {
        $idAddress =$this->address->updateAddress($request,$id);
        if($idAddress == self::RETURN_STR_ZERO) {
            return redirect()->back()->with([
                'message' => 'Update error',
                'class' => 'error'
            ]);
        }
        return redirect('/admin/address/list_address')->with([
            'message' =>'update successfully',
            'class' =>'success'
        ], compact('idAddress'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $idAddress = $this->address->deleteAddress($id);
        if($idAddress == self::RETURN_STR_ZERO){
            return redirect()->back()->with([
                'message' =>' delete error',
                'class' =>'error'
            ]);
        }
        return redirect('admin/address/list_address')->with([
            'message' => 'delete',
            'class' => 'success'
        ]);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

}
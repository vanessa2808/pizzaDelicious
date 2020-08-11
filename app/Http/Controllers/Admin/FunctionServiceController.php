<?php

namespace App\Http\Controllers\Admin;

use App\Models\FunctionService;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\FunctionServiceRequest;
use phpDocumentor\Reflection\Types\Self_;

class FunctionServiceController extends Controller
{
    protected $numServices;
    protected const RETURN_NUM_ZERO = 0;
    protected const RETURN_NUM_ONE = 1;
    protected const RETURN_STR_ZERO ="0";
    protected const RETURN_STR_ONE= "1";
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(FunctionService  $_numServices = null)
    {
        $this->middleware('auth');
        $this->numServices= $_numServices;
    }
    public function index() {
        $listFunctionServices= $this->numServices->getAllFunctionServices();
        return view('admin.services.list_functionServices',[
            'listFunctionServices' => $listFunctionServices
        ],compact('listFunctionServices'));
    }

    public function getAddFunctionServices()
    {
        return view('admin.services.add_functionServices');
    }
    public function postAddFunctionServices(FunctionServiceRequest $request) {
        $newFunctionServices= $this->numServices->addNewFunctionServices($request);
        if($newFunctionServices == self::RETURN_STR_ZERO) {
            return redirect('admin/services/add_functionServices')->with([
                'message' => 'Header is error',
                'class' =>'error'
            ]);;
        }
        return redirect('/admin/services/list_functionServices')->with(([
            'message' => 'add successfully',
            'class' => 'success'
        ]));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getEditDrink($id)
    {
        $idFunctionServices= $this->numServices->getFunctionServiceById($id);
        return view('admin.food.edit_drink',[
            'idFunctionServices' => $idFunctionServices
        ],compact('idFunctionServices'));
    }
    public function postEditFunctionServices(FunctionServiceRequest $request, $id) {
        $idFunctionServices =$this->numServices->updateFunctionServices($request,$id);
        if($idFunctionServices == self::RETURN_STR_ZERO) {
            return redirect()->back()->with([
                'message' => 'Update error',
                'class' => 'error'
            ]);
        }
        return redirect('/admin/services/list_functionServices')->with([
            'message' =>'update successfully',
            'class' =>'success'
        ], compact('idFunctionServices'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $idFunctionServices= $this->numServices->deleteFunctionServices($id);
        if($idFunctionServices == self::RETURN_STR_ZERO){
            return redirect()->back()->with([
                'message' =>' delete error',
                'class' =>'error'
            ]);
        }
        return redirect('admin/services/list_functionServices')->with([
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

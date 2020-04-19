<?php

namespace App\Http\Controllers\Admin;

use App\Models\Service;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ServiceRequest;
use phpDocumentor\Reflection\Types\Self_;

class ServiceController extends Controller
{
    protected $services;
    protected const RETURN_NUM_ZERO = 0;
    protected const RETURN_NUM_ONE = 1;
    protected const RETURN_STR_ZERO ="0";
    protected const RETURN_STR_ONE= "1";
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(Service $_services= null)
    {
        $this->middleware('auth');
        $this->services= $_services;
    }
    public function index() {
        $listServices= $this->services->getAllServices();
        return view('admin.services.list_services',[
            'listServices' => $listServices
        ],compact('listServices'));
    }

    public function getAddServices()
    {
        return view('admin.services.add_services');
    }
    public function postAddServices(ServiceRequest $request) {
        $newServices= $this->services->addNewServices($request);
        if($newServices == self::RETURN_STR_ZERO) {
            return redirect('admin/services/add_services')->with([
                'message' => 'Header is error',
                'class' =>'error'
            ]);;
        }
        return redirect('/admin/services/list_services')->with(([
            'message' => 'add successfully',
            'class' => 'success'
        ]));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getEditServices($id)
    {
        $idServices = $this->services->getServiceById($id);
        return view('admin.services.edit_services',[
            'idServices' => $idServices
        ],compact('idServices'));
    }
    public function postEditServices(ServiceRequest $request, $id) {
        $idServices =$this->services->updateDrink($request,$id);
        if($idServices == self::RETURN_STR_ZERO) {
            return redirect()->back()->with([
                'message' => 'Update error',
                'class' => 'error'
            ]);
        }
        return redirect('/admin/services/list_services')->with([
            'message' =>'update successfully',
            'class' =>'success'
        ], compact('idServices'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $idServices = $this->services->deleteServices($id);
        if($idServices == self::RETURN_STR_ZERO){
            return redirect()->back()->with([
                'message' =>' delete error',
                'class' =>'error'
            ]);
        }
        return redirect('admin/services/list_services')->with([
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

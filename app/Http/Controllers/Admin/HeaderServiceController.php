<?php

namespace App\Http\Controllers\Admin;

use App\Models\HeaderService;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\HeaderServiceRequest;
use phpDocumentor\Reflection\Types\Self_;

class HeaderServiceController extends Controller
{
    protected $headerService;
    protected const RETURN_NUM_ZERO = 0;
    protected const RETURN_NUM_ONE = 1;
    protected const RETURN_STR_ZERO ="0";
    protected const RETURN_STR_ONE= "1";
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(HeaderService $_headerService = null)
    {
        $this->middleware('auth');
        $this->headerService= $_headerService;
    }
    public function index() {
        $listHeaderService = $this->headerService->getAllHeaderService();
        return view('admin.header.list_headerService',[
            'listHeaderService' => $listHeaderService
        ],compact('listHeaderService'));
    }

    public function getAddHeaderService()
    {
        return view('admin.header.add_headerService');
    }
    public function postAddHeaderService(HeaderServiceRequest $request) {
        $newHeaderService = $this->headerService->addNewHeaderService($request);
        if($newHeaderService == self::RETURN_STR_ZERO) {
            return redirect('admin/header/add_headerService')->with([
                'message' => 'Header is error',
                'class' =>'error'
            ]);;
        }
        return redirect('/admin/header/list_headerService')->with(([
            'message' => 'add successfully',
            'class' => 'success'
        ]));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getEditHeaderService($id)
    {
        $idHeaderService = $this->headerService->getHeaderServiceById($id);
        return view('admin.header.edit_headerService',[
            'idHeaderService' => $idHeaderService
        ],compact('idHeaderService'));
    }
    public function postEditHeaderService(HeaderServiceRequest $request, $id) {
        $idHeaderService =$this->headerService->updateHeaderService($request,$id);
        if($idHeaderService == self::RETURN_STR_ZERO) {
            return redirect()->back()->with([
                'message' => 'Update error',
                'class' => 'error'
            ]);
        }
        return redirect('/admin/header/list_headerService')->with([
            'message' =>'update successfully',
            'class' =>'success'
        ], compact('idHeaderService'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function deleServices($id)
    {
        $idHeaderService = $this->headerService->deleteHeaderService($id);
        if($idHeaderService == self::RETURN_STR_ZERO){
            return redirect()->back()->with([
                'message' =>' delete error',
                'class' =>'error'
            ]);
        }
        return redirect('admin/header/list_headerService')->with([
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

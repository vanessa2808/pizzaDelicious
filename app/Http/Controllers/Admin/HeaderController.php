<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\HeaderRequest;
use App\Models\Header;
use phpDocumentor\Reflection\Types\Self_;

class HeaderController extends Controller
{
    protected $header;
    protected const RETURN_NUM_ZERO = 0;
    protected const RETURN_NUM_ONE = 1;
    protected const RETURN_STR_ZERO ="0";
    protected const RETURN_STR_ONE= "1";
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(Header $_header = null)
    {
        $this->middleware('auth');
        $this->header= $_header;
    }
    public function index() {
        $listHeader = $this->header->getAllHeader();
        return view('admin.header.list_header',[
           'listHeader' => $listHeader
        ],compact('listHeader'));
    }

    public function getAddHeader()
    {
        return view('admin.header.add_header');
    }
    public function postAddHeader(HeaderRequest $request) {
        $newHeader = $this->header->addNewHeader($request);
        if($newHeader == self::RETURN_STR_ZERO) {
            return redirect('admin/header/add_header')->with([
                'message' => 'Header is error',
                'class' =>'error'
            ]);;
        }
        return redirect('/admin/header/list_header')->with(([
            'message' => 'add successfully',
            'class' => 'success'
        ]));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getEditHeader($id)
    {
        $idHeader = $this->header->getHeaderById($id);
        return view('admin.header.edit_header',[
           'idHeader' => $idHeader
        ],compact('idHeader'));
    }
    public function postEditHeader(HeaderRequest $request, $id) {
        $idHeader =$this->header->updateHeader($request,$id);
        if($idHeader == self::RETURN_STR_ZERO) {
            return redirect()->back()->with([
                'message' => 'Update error',
                'class' => 'error'
            ]);
        }
        return redirect('/admin/header/list_header')->with([
           'message' =>'update successfully',
            'class' =>'success'
        ], compact('idHeader'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function deleHeader($id)
    {
        $idHeader = $this->header->deleteHeader($id);
        if($idHeader == self::RETURN_STR_ZERO){
            return redirect()->back()->with([
                'message' =>' delete error',
                'class' =>'error'
            ]);
        }
        return redirect('admin/header/list_header')->with([
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

<?php

namespace App\Http\Controllers\Admin;

use App\Models\HeaderBlog;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\HeaderBlogRequest;
use phpDocumentor\Reflection\Types\Self_;

class HeaderBlogController extends Controller
{
    protected $headerBlog;
    protected const RETURN_NUM_ZERO = 0;
    protected const RETURN_NUM_ONE = 1;
    protected const RETURN_STR_ZERO ="0";
    protected const RETURN_STR_ONE= "1";
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(HeaderBlog $_headerBlog = null)
    {
        $this->middleware('auth');
        $this->headerBlog= $_headerBlog;
    }
    public function index() {
        $listHeaderBlog = $this->headerBlog->getAllHeaderBlog();
        return view('admin.header.list_headerBlog',[
            'listHeaderBlog' => $listHeaderBlog
        ],compact('listHeaderBlog'));
    }

    public function getAddHeaderBlog()
    {
        return view('admin.header.add_headerBlog');
    }
    public function postAddHeaderBlog(HeaderBlogRequest $request) {
        $newHeaderBlog = $this->headerBlog->addNewHeaderBlog($request);
        if($newHeaderBlog == self::RETURN_STR_ZERO) {
            return redirect('admin/header/add_headerBlog')->with([
                'message' => 'Header is error',
                'class' =>'error'
            ]);;
        }
        return redirect('/admin/header/list_headerBlog')->with(([
            'message' => 'add successfully',
            'class' => 'success'
        ]));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getEditHeaderBlog($id)
    {
        $idHeaderBlog = $this->headerBlog->getHeaderBlogById($id);
        return view('admin.header.edit_headerBlog',[
            'idHeaderBlog' => $idHeaderBlog
        ],compact('idHeaderBlog'));
    }
    public function postEditHeaderBlog(HeaderBlogRequest $request, $id) {
        $idHeaderBlog =$this->headerBlog->updateHeaderBlog($request,$id);
        if($idHeaderBlog == self::RETURN_STR_ZERO) {
            return redirect()->back()->with([
                'message' => 'Update error',
                'class' => 'error'
            ]);
        }
        return redirect('/admin/header/list_headerBlog')->with([
            'message' =>'update successfully',
            'class' =>'success'
        ], compact('idHeaderBlog'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function deleBlog($id)
    {
        $idHeaderBlog = $this->headerBlog->deleteHeaderBlog($id);
        if($idHeaderBlog == self::RETURN_STR_ZERO){
            return redirect()->back()->with([
                'message' =>' delete error',
                'class' =>'error'
            ]);
        }
        return redirect('admin/header/list_headerBlog')->with([
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

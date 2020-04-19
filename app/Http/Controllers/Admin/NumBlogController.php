<?php

namespace App\Http\Controllers\Admin;

use App\Models\NumBlog;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\NumBlogRequest;
use phpDocumentor\Reflection\Types\Self_;

class NumBlogController extends Controller
{
    protected $numblog;
    protected const RETURN_NUM_ZERO = 0;
    protected const RETURN_NUM_ONE = 1;
    protected const RETURN_STR_ZERO ="0";
    protected const RETURN_STR_ONE= "1";
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(NumBlog $_numblog = null)
    {
        $this->middleware('auth');
        $this->numblog= $_numblog;
    }
    public function index() {
        $listNumBlog= $this->numblog->getAllNumBlog();
        return view('admin.blog.list_numBlog',[
            'listNumBlog' => $listNumBlog
        ],compact('listNumBlog'));
    }

    public function getAddNumBlog()
    {
        return view('admin.blog.add_numBlog');
    }
    public function postAddNumBlog(NumBlogRequest $request) {
        $newNumBlog= $this->numblog->addNewNumBlog($request);
        if($newNumBlog == self::RETURN_STR_ZERO) {
            return redirect('admin/blog/add_numBlog')->with([
                'message' => 'Header is error',
                'class' =>'error'
            ]);;
        }
        return redirect('/admin/blog/list_numBlog')->with(([
            'message' => 'add successfully',
            'class' => 'success'
        ]));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getEditNumBlog($id)
    {
        $idNumBlog = $this->numblog->getNumBlogById($id);
        return view('admin.blog.edit_numBlog',[
            'idNumBlog' => $idNumBlog
        ],compact('idNumBlog'));
    }
    public function postEditNumBlog(NumBlogRequest $request, $id) {
        $idNumBlog =$this->numblog->updateNumBlog($request,$id);
        if($idNumBlog == self::RETURN_STR_ZERO) {
            return redirect()->back()->with([
                'message' => 'Update error',
                'class' => 'error'
            ]);
        }
        return redirect('/admin/blog/list_numBlog')->with([
            'message' =>'update successfully',
            'class' =>'success'
        ], compact('idNumBlog'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $idNumBlog = $this-> numblog->deleteNumBlog($id);
        if($idNumBlog == self::RETURN_STR_ZERO){
            return redirect()->back()->with([
                'message' =>' delete error',
                'class' =>'error'
            ]);
        }
        return redirect('admin/blog/list_numBlog')->with([
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

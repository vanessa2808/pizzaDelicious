<?php

namespace App\Http\Controllers\Admin;

use App\Models\Blog;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\BlogRequest;
use phpDocumentor\Reflection\Types\Self_;

class BlogController extends Controller
{
    protected $blog;
    protected const RETURN_NUM_ZERO = 0;
    protected const RETURN_NUM_ONE = 1;
    protected const RETURN_STR_ZERO ="0";
    protected const RETURN_STR_ONE= "1";
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(Blog $_blog = null)
    {
        $this->middleware('auth');
        $this->blog= $_blog;
    }
    public function index() {
        $listBlog= $this->blog->getAllBlog();
        return view('admin.blog.list_blog',[
            'listBlog' => $listBlog
        ],compact('listBlog'));
    }

    public function getAddBlog()
    {
        return view('admin.blog.add_blog');
    }
    public function postAddBlog(BlogRequest $request) {
        $newBlog= $this->blog->addNewBlog($request);
        if($newBlog == self::RETURN_STR_ZERO) {
            return redirect('admin/blog/add_blog')->with([
                'message' => 'Header is error',
                'class' =>'error'
            ]);;
        }
        return redirect('/admin/blog/list_blog')->with(([
            'message' => 'add successfully',
            'class' => 'success'
        ]));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getEditBlog($id)
    {
        $idBlog = $this->blog->getDrinkById($id);
        return view('admin.food.edit_drink',[
            'idBlog' => $idBlog
        ],compact('idBlog'));
    }
    public function postEditBlog(BlogRequest $request, $id) {
        $idBlog =$this->blog->updateBlog($request,$id);
        if($idBlog == self::RETURN_STR_ZERO) {
            return redirect()->back()->with([
                'message' => 'Update error',
                'class' => 'error'
            ]);
        }
        return redirect('/admin/blog/list_blog')->with([
            'message' =>'update successfully',
            'class' =>'success'
        ], compact('idBlog'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function deBlog($id)
    {
        $idBlog = $this->blog->deleleBlog($id);
        if($idBlog == self::RETURN_STR_ZERO){
            return redirect()->back()->with([
                'message' =>' delete error',
                'class' =>'error'
            ]);
        }
        return redirect('admin/blog/list_blog')->with([
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

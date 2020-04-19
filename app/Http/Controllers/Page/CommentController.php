<?php

namespace App\Http\Controllers\page;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CommentRequest;
use App\Models\Comment;


class CommentController extends Controller
{
    protected $comment;
    protected const RETURN_NUM_ZERO = 0;
    protected const RETURN_NUM_ONE = 1;
    protected const RETURN_STR_ZERO = "0";
    protected const RETURN_STR_ONE = "1";

    public function __construct(Comment $_comment = null)
    {
        $this->comment= $_comment;

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listComment = $this->comment->getAllComment();
        return view('page.food_details',[
            'listComment' => $listComment
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getAddComment()
    {
        return view('page.food_details');

    }

    public function postAddComment(CommentRequest $request)
    {
        $newComment = $this->comment->addNewComment($request);
        if($newComment == self::RETURN_STR_ZERO) {
            return redirect('/page/food_details');
        }
        return redirect('/admin/comment/list_comment');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getEditBlog($id)
    {
        $idBlog = $this->blog->getBlogById($id);
        return view('admin.blog.edit_blog',[
            'idBlog' => $idBlog
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function postEditBlog(BlogRequest $request, $id)
    {
        $idBlog = $this->blog->updateBlog($request, $id);
        if($idBlog == self::RETURN_STR_ZERO) {
            return redirect()->back();

        }
        return redirect('/admin/blog/list_blog');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $idBlog = $this->blog->deleleBlog($id);
        if($idBlog == self::RETURN_STR_ZERO) {
            return redirect()->back();
        }
        return redirect('/admin/blog/list_blog');
    }
}

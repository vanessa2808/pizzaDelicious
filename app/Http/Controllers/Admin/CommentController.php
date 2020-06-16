<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CommentRequest;
use App\Models\Comment;

class CommentController extends Controller
{
    protected $comments;
    protected const RETURN_NUM_ZERO = 0;
    protected const RETURN_NUM_ONE = 1;
    protected const RETURN_STR_ZERO = "0";
    protected const RETURN_STR_ONE = "1";
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(Comment $_comments = null)
    {
        $this->middleware('auth');
        $this->comments=$_comments;
    }

    public function index()
    {
        $listComment= $this->comments->getAllComment();
        return view('admin.comments.list_comment',[
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
        return view('admin.comments.add_comment');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postAddComment(CommentRequest $request)
    {
        $newComment = $this->comments->addNewComment($request);
        if($newComment == self::RETURN_STR_ZERO) {
            return redirect('admin/comments/add_comment ');
        }
        return redirect('admin/comments/list_comment');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getEditComment($id)
    {
        $idComment = $this->comments->getCommentById($id);
        return view('admin.comments.edit_comments',[
            'idComment' => $idComment
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function postEditComment(CommentRequest $request, $id)
    {
        $idComment = $this->comments->updateComment($request,$id);
        if($idComment == self::RETURN_STR_ZERO) {
            return redirect()->back();
        }
        return redirect('admin/comments/list_comment');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $idComment = $this->comments->deleteComment($id);
        if(!$idComment == self::RETURN_STR_ZERO) {
            return redirect()->back();
        }
        return redirect('admin/comments/list_comment');
    }
}

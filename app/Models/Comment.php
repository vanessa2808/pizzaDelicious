<?php

namespace App\Models;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';
    protected $fillable = ['description','user_id','pizza_id','approved','created_at','updated_at'];
    protected const RETURN_NUM_ZERO = 0;
    protected const RETURN_NUM_ONE = 1;
    protected const RETURN_STR_ZERO = "0";
    protected const RETURN_STR_ONE = "1";







    public function getAllComment() {
        return $this->all();
    }
    public function addNewComment($request) {
        $newComment = new Comment();
        $newComment->description= $request->description;
        $newComment->user_id= '3';
        $newComment->pizza_id= 1;
        $newComment->approved = 0;
        $newComment->created_at = Carbon::now();
        if(! $newComment->save()) {
            return self::RETURN_STR_ZERO;
        }
        return $newComment;

    }
    public function getCommentById($id){
        return $this->find($id);
    }
    public function updateComment($request,$id){
        $idComment = $this->find($id);
        $idComment->description= $request->description;

        $idComment->user_id= 3;
        $idComment->pizza_id= 1;
        $idComment->approved = 0;

        $idComment->updated_at = Carbon::now();
        if(! $idComment ->save()) {
            return self::RETURN_STR_ZERO;
        }
        return $idComment;

    }
    public function deleteComment($id) {
        $idComment = $this->find($id);
        if(! $idComment->destroy($id)) {
            return self::RETURN_STR_ZERO;
        }
        return $idComment;
    }



}

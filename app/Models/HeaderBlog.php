<?php

namespace App\Models;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class HeaderBlog extends Model
{
    protected $table = 'headerBlog';
    protected $fillable = ['title','image','created_at','updated_at'];
    protected const RETURN_NUM_ZERO = 0;
    protected const RETURN_NUM_ONE = 1;
    protected const RETURN_STR_ZERO = "0";
    protected const RETURN_STR_ONE = "1";

    public function getAllHeaderBlog() {
        return $this->all();
    }
    public function addNewHeaderBlog($request) {
        $newHeaderBlog = new HeaderBlog();
        $newHeaderBlog->title= $request->title;

        if($request -> hasFile('image'))
        {
            $file = $request->file('image');
            $name = $file -> getClientOriginalName();
            $Hinh = str_random(4)."_".$name;
            while(file_exists('uploads/header'.$Hinh))
            {
                $Hinh = str_random(4)."_".$name;
            }
            $file->move("uploads/header", $Hinh);
            $newHeaderBlog ->image= "uploads/header/".$Hinh;
        }




        $newHeaderBlog->created_at = Carbon::now();
        if(! $newHeaderBlog->save()) {
            return self::RETURN_STR_ZERO;
        }
        return $newHeaderBlog;

    }
    public function getHeaderBlogById($id){
        return $this->find($id);
    }
    public function updateHeaderBlog($request,$id){
        $idHeaderBlog = $this->find($id);
        if($request -> hasFile('image'))
        {
            $file = $request->file('image');
            $name = $file -> getClientOriginalName();
            $Hinh = str_random(4)."_".$name;
            while(file_exists('uploads/header'.$Hinh))
            {
                $Hinh = str_random(4)."_".$name;
            }
            $file->move("uploads/header", $Hinh);
            $idHeaderBlog ->image= "uploads/header/".$Hinh;
        }

        $idHeaderBlog->title= $request->title;



        $idHeaderBlog->updated_at = Carbon::now();
        if(! $idHeaderBlog ->save()) {
            return self::RETURN_STR_ZERO;
        }
        return $idHeaderBlog;

    }
    public function deleteHeaderBlog($id) {
        $idHeaderBlog = $this->find($id);
        if(! $idHeaderBlog->destroy($id)) {
            return self::RETURN_STR_ZERO;
        }
        return $idHeaderBlog;
    }



}

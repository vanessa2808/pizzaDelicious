<?php

namespace App\Models;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class NumBlog extends Model
{
    protected $table = 'numblog';
    protected $fillable = ['name','description','writer','image','created_at','updated_at'];
    protected const RETURN_NUM_ZERO = 0;
    protected const RETURN_NUM_ONE = 1;
    protected const RETURN_STR_ZERO = "0";
    protected const RETURN_STR_ONE = "1";

    public function getAllNumBlog() {
        return $this->all();
    }
    public function addNewNumBlog($request) {
        $newNumBlog = new NumBlog();
        $newNumBlog->title= $request->title;

        $newNumBlog->description= $request->description;
        $newNumBlog->writer= $request->writer;




        if($request -> hasFile('image'))
        {
            $file = $request->file('image');
            $name = $file -> getClientOriginalName();
            $Hinh = str_random(4)."_".$name;
            while(file_exists('uploads/blog'.$Hinh))
            {
                $Hinh = str_random(4)."_".$name;
            }
            $file->move("uploads/blog", $Hinh);
            $newNumBlog ->image= "uploads/blog/".$Hinh;
        }




        $newNumBlog->created_at = Carbon::now();
        if(! $newNumBlog->save()) {
            return self::RETURN_STR_ZERO;
        }
        return $newNumBlog;

    }
    public function getNumBlogById($id){
        return $this->find($id);
    }
    public function updateNumBlog($request,$id){
        $idNumBlog = $this->find($id);
        $idNumBlog->title= $request->title;

        $idNumBlog->description= $request->description;
        $idNumBlog->writer= $request->writer;




        if($request -> hasFile('image'))
        {
            $file = $request->file('image');
            $name = $file -> getClientOriginalName();
            $Hinh = str_random(4)."_".$name;
            while(file_exists('uploads/blog'.$Hinh))
            {
                $Hinh = str_random(4)."_".$name;
            }
            $file->move("uploads/blog", $Hinh);
            $idNumBlog ->image= "uploads/blog/".$Hinh;
        }



        $idNumBlog->updated_at = Carbon::now();
        if(! $idNumBlog ->save()) {
            return self::RETURN_STR_ZERO;
        }
        return $idNumBlog;

    }
    public function deleteNumBlog($id) {
        $idNumBlog = $this->find($id);
        if(! $idNumBlog->destroy($id)) {
            return self::RETURN_STR_ZERO;
        }
        return $idNumBlog;
    }



}

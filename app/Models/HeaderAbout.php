<?php

namespace App\Models;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class HeaderAbout extends Model
{
    protected $table = 'headerAbout';
    protected $fillable = ['title','image','created_at','updated_at'];
    protected const RETURN_NUM_ZERO = 0;
    protected const RETURN_NUM_ONE = 1;
    protected const RETURN_STR_ZERO = "0";
    protected const RETURN_STR_ONE = "1";

    public function getAllHeaderAbout() {
        return $this->all();
    }
    public function addNewHeaderAbout($request) {
        $newHeaderAbout = new HeaderAbout();
        $newHeaderAbout->title= $request->title;

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
            $newHeaderAbout ->image= "uploads/header/".$Hinh;
        }




        $newHeaderAbout->created_at = Carbon::now();
        if(! $newHeaderAbout->save()) {
            return self::RETURN_STR_ZERO;
        }
        return $newHeaderAbout;

    }
    public function getHeaderAboutById($id){
        return $this->find($id);
    }
    public function updateHeaderAbout($request,$id){
        $idHeaderAbout = $this->find($id);
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
            $idHeaderAbout ->image= "uploads/header/".$Hinh;
        }

        $idHeaderAbout->title= $request->title;



        $idHeaderAbout->updated_at = Carbon::now();
        if(! $idHeaderAbout ->save()) {
            return self::RETURN_STR_ZERO;
        }
        return $idHeaderAbout;

    }
    public function deleteHeaderAbout($id) {
        $idHeaderAbout = $this->find($id);
        if(! $idHeaderAbout->destroy($id)) {
            return self::RETURN_STR_ZERO;
        }
        return $idHeaderAbout;
    }



}

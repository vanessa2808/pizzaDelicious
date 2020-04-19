<?php

namespace App\Models;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class HeaderContact extends Model
{
    protected $table = 'headerContact';
    protected $fillable = ['title','image','created_at','updated_at'];
    protected const RETURN_NUM_ZERO = 0;
    protected const RETURN_NUM_ONE = 1;
    protected const RETURN_STR_ZERO = "0";
    protected const RETURN_STR_ONE = "1";

    public function getAllHeaderContact() {
        return $this->all();
    }
    public function addNewHeaderContact($request) {
        $newHeaderContact = new HeaderContact();
        $newHeaderContact->title= $request->title;

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
            $newHeaderContact ->image= "uploads/header/".$Hinh;
        }




        $newHeaderContact->created_at = Carbon::now();
        if(! $newHeaderContact->save()) {
            return self::RETURN_STR_ZERO;
        }
        return $newHeaderContact;

    }
    public function getHeaderContactById($id){
        return $this->find($id);
    }
    public function updateHeaderContact($request,$id){
        $idHeaderContact = $this->find($id);
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
            $idHeaderContact ->image= "uploads/header/".$Hinh;
        }

        $idHeaderContact->title= $request->title;



        $idHeaderContact->updated_at = Carbon::now();
        if(! $idHeaderContact ->save()) {
            return self::RETURN_STR_ZERO;
        }
        return $idHeaderContact;

    }
    public function deleteHeaderContact($id) {
        $idHeaderContact = $this->find($id);
        if(! $idHeaderContact->destroy($id)) {
            return self::RETURN_STR_ZERO;
        }
        return $idHeaderContact;
    }



}

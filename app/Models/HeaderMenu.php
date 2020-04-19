<?php

namespace App\Models;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class HeaderMenu extends Model
{
    protected $table = 'headerMenu';
    protected $fillable = ['title','image','created_at','updated_at'];
    protected const RETURN_NUM_ZERO = 0;
    protected const RETURN_NUM_ONE = 1;
    protected const RETURN_STR_ZERO = "0";
    protected const RETURN_STR_ONE = "1";

    public function getAllHeaderMenu() {
        return $this->all();
    }
    public function addNewHeaderMenu($request) {
        $newHeaderMenu = new HeaderMenu();
        $newHeaderMenu->title= $request->title;

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
            $newHeaderMenu ->image= "uploads/header/".$Hinh;
        }




        $newHeaderMenu->created_at = Carbon::now();
        if(! $newHeaderMenu->save()) {
            return self::RETURN_STR_ZERO;
        }
        return $newHeaderMenu;

    }
    public function getHeaderMenuById($id){
        return $this->find($id);
    }
    public function updateHeaderMenu($request,$id){
        $idHeaderMenu = $this->find($id);
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
            $idHeaderMenu ->image= "uploads/header/".$Hinh;
        }

        $idHeaderMenu->title= $request->title;



        $idHeaderMenu->updated_at = Carbon::now();
        if(! $idHeaderMenu ->save()) {
            return self::RETURN_STR_ZERO;
        }
        return $idHeaderMenu;

    }
    public function deleteHeaderMenu($id) {
        $idHeaderMenu= $this->find($id);
        if(! $idHeaderMenu->destroy($id)) {
            return self::RETURN_STR_ZERO;
        }
        return $idHeaderMenu;
    }



}

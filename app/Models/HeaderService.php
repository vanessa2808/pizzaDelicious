<?php

namespace App\Models;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class HeaderService extends Model
{
    protected $table = 'headerService';
    protected $fillable = ['title','image','created_at','updated_at'];
    protected const RETURN_NUM_ZERO = 0;
    protected const RETURN_NUM_ONE = 1;
    protected const RETURN_STR_ZERO = "0";
    protected const RETURN_STR_ONE = "1";

    public function getAllHeaderService() {
        return $this->all();
    }
    public function addNewHeaderService($request) {
        $newHeaderService = new HeaderService();
        $newHeaderService->title= $request->title;

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
            $newHeaderService ->image= "uploads/header/".$Hinh;
        }




        $newHeaderService->created_at = Carbon::now();
        if(! $newHeaderService->save()) {
            return self::RETURN_STR_ZERO;
        }
        return $newHeaderService;

    }
    public function getHeaderServiceById($id){
        return $this->find($id);
    }
    public function updateHeaderService($request,$id){
        $idHeaderService = $this->find($id);
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
            $idHeaderService ->image= "uploads/header/".$Hinh;
        }

        $idHeaderService->title= $request->title;



        $idHeaderService->updated_at = Carbon::now();
        if(! $idHeaderService ->save()) {
            return self::RETURN_STR_ZERO;
        }
        return $idHeaderService;

    }
    public function deleteHeaderService($id) {
        $idHeaderService = $this->find($id);
        if(! $idHeaderService->destroy($id)) {
            return self::RETURN_STR_ZERO;
        }
        return $idHeaderService;
    }



}

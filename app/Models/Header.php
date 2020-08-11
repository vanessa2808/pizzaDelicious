<?php

namespace App\Models;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Header extends Model
{
    protected $table = 'header';
    protected $fillable = ['image1','title1_1','title1_2','title1_3','image2','title2_1','title2_2','title2_3','image3','title3_1','title3_2','title3_3','created_at','updated_at'];
    protected const RETURN_NUM_ZERO = 0;
    protected const RETURN_NUM_ONE = 1;
    protected const RETURN_STR_ZERO = "0";
    protected const RETURN_STR_ONE = "1";

    public function getAllHeader() {
        return $this->all();
    }
    public function addNewHeader($request) {
        $newHeader = new Header();

        if($request -> hasFile('image1'))
        {
            $file = $request->file('image1');
            $name = $file -> getClientOriginalName();
            $Hinh = str_random(4)."_".$name;
            while(file_exists('uploads/header'.$Hinh))
            {
                $Hinh = str_random(4)."_".$name;
            }
            $file->move("uploads/header", $Hinh);
            $newHeader ->image1= "uploads/header/".$Hinh;
        }

        $newHeader->title1_1= $request->title1_1;
        $newHeader->title1_2 = $request->title1_2;
        $newHeader->title1_3 = $request->title1_3;

        if($request -> hasFile('image2'))
        {
            $file = $request->file('image2');
            $name = $file -> getClientOriginalName();
            $Hinh = str_random(4)."_".$name;
            while(file_exists('uploads/header'.$Hinh))
            {
                $Hinh = str_random(4)."_".$name;
            }
            $file->move("uploads/header", $Hinh);
            $newHeader ->image2= "uploads/header/".$Hinh;
        }

        $newHeader->title2_1= $request->title1_1;
        $newHeader->title2_2 = $request->title1_2;
        $newHeader->title2_3 = $request->title1_3;

        if($request -> hasFile('image3'))
        {
            $file = $request->file('image3');
            $name = $file -> getClientOriginalName();
            $Hinh = str_random(4)."_".$name;
            while(file_exists('uploads/header'.$Hinh))
            {
                $Hinh = str_random(4)."_".$name;
            }
            $file->move("uploads/header", $Hinh);
            $newHeader ->image3= "uploads/header/".$Hinh;
        }

        $newHeader->title3_1= $request->title1_1;
        $newHeader->title3_2 = $request->title1_2;
        $newHeader->title3_3 = $request->title1_3;
        $newHeader->created_at = Carbon::now();
        if(! $newHeader->save()) {
            return self::RETURN_STR_ZERO;
        }
        return $newHeader;

    }
    public function getHeaderById($id){
        return $this->find($id);
    }
    public function updateHeader($request,$id){
        $idHeader = $this->find($id);
        if($request -> hasFile('image1'))
        {
            $file = $request->file('image1');
            $name = $file -> getClientOriginalName();
            $Hinh = str_random(4)."_".$name;
            while(file_exists('uploads/header'.$Hinh))
            {
                $Hinh = str_random(4)."_".$name;
            }
            $file->move("uploads/header", $Hinh);
            $idHeader ->image= "uploads/header/".$Hinh;
        }

        $idHeader->title1_1= $request->title1_1;
        $idHeader->title1_2 = $request->title1_2;
        $idHeader->title1_3 = $request->title1_3;

        if($request -> hasFile('image2'))
        {
            $file = $request->file('image2');
            $name = $file -> getClientOriginalName();
            $Hinh = str_random(4)."_".$name;
            while(file_exists('uploads/header'.$Hinh))
            {
                $Hinh = str_random(4)."_".$name;
            }
            $file->move("uploads/header", $Hinh);
            $idHeader ->image= "uploads/header/".$Hinh;
        }

        $idHeader->title2_1= $request->title1_1;
        $idHeader->title2_2 = $request->title1_2;
        $idHeader->title2_3 = $request->title1_3;

        if($request -> hasFile('image3'))
        {
            $file = $request->file('image3');
            $name = $file -> getClientOriginalName();
            $Hinh = str_random(4)."_".$name;
            while(file_exists('uploads/header'.$Hinh))
            {
                $Hinh = str_random(4)."_".$name;
            }
            $file->move("uploads/header", $Hinh);
            $idHeader ->image= "uploads/header/".$Hinh;
        }

        $idHeader->title3_1= $request->title1_1;
        $idHeader->title3_2 = $request->title1_2;
        $idHeader->title3_3 = $request->title1_3;
              $idHeader->updated_at = Carbon::now();
        if(! $idHeader ->save()) {
            return self::RETURN_STR_ZERO;
        }
        return $idHeader;

    }
    public function deleteHeader($id) {
        $idHeader = $this->find($id);
        if(! $idHeader->destroy($id)) {
            return self::RETURN_STR_ZERO;
        }
        return $idHeader;
    }



}

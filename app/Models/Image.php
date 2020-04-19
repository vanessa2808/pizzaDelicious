<?php

namespace App\Models;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table = 'image';
    protected $fillable = ['image1','image2','image3','image4','image5','created_at','updated_at'];
    protected const RETURN_NUM_ZERO = 0;
    protected const RETURN_NUM_ONE = 1;
    protected const RETURN_STR_ZERO = "0";
    protected const RETURN_STR_ONE = "1";

    public function getAllImage() {
        return $this->all();
    }
    public function addNewImage($request) {
        $newImage = new Image();

        if($request -> hasFile('image1'))
        {
            $file = $request->file('image1');
            $name = $file -> getClientOriginalName();
            $Hinh = str_random(4)."_".$name;
            while(file_exists('uploads/images'.$Hinh))
            {
                $Hinh = str_random(4)."_".$name;
            }
            $file->move("uploads/images", $Hinh);
            $newImage ->image1= "uploads/images/".$Hinh;
        }
        //2
        if($request -> hasFile('image2'))
        {
            $file = $request->file('image2');
            $name = $file -> getClientOriginalName();
            $Hinh = str_random(4)."_".$name;
            while(file_exists('uploads/images'.$Hinh))
            {
                $Hinh = str_random(4)."_".$name;
            }
            $file->move("uploads/images", $Hinh);
            $newImage ->image2= "uploads/images/".$Hinh;
        }
        //3
        if($request -> hasFile('image3'))
        {
            $file = $request->file('image3');
            $name = $file -> getClientOriginalName();
            $Hinh = str_random(4)."_".$name;
            while(file_exists('uploads/images'.$Hinh))
            {
                $Hinh = str_random(4)."_".$name;
            }
            $file->move("uploads/images", $Hinh);
            $newImage ->image3= "uploads/images/".$Hinh;
        }
        //4
        if($request -> hasFile('image4'))
        {
            $file = $request->file('image4');
            $name = $file -> getClientOriginalName();
            $Hinh = str_random(4)."_".$name;
            while(file_exists('uploads/images'.$Hinh))
            {
                $Hinh = str_random(4)."_".$name;
            }
            $file->move("uploads/images", $Hinh);
            $newImage ->image4= "uploads/images/".$Hinh;
        }
        //5
        if($request -> hasFile('image5'))
        {
            $file = $request->file('image5');
            $name = $file -> getClientOriginalName();
            $Hinh = str_random(4)."_".$name;
            while(file_exists('uploads/images'.$Hinh))
            {
                $Hinh = str_random(4)."_".$name;
            }
            $file->move("uploads/images", $Hinh);
            $newImage ->image5= "uploads/images/".$Hinh;
        }




        $newImage->created_at = Carbon::now();
        if(! $newImage->save()) {
            return self::RETURN_STR_ZERO;
        }
        return $newImage;

    }
    public function getImageById($id){
        return $this->find($id);
    }
    public function updateImage($request,$id){
        $idImage = $this->find($id);
        if($request -> hasFile('image1'))
        {
            $file = $request->file('image1');
            $name = $file -> getClientOriginalName();
            $Hinh = str_random(4)."_".$name;
            while(file_exists('uploads/images'.$Hinh))
            {
                $Hinh = str_random(4)."_".$name;
            }
            $file->move("uploads/images", $Hinh);
            $idImage ->image1= "uploads/images/".$Hinh;
        }
        //2
        if($request -> hasFile('image2'))
        {
            $file = $request->file('image2');
            $name = $file -> getClientOriginalName();
            $Hinh = str_random(4)."_".$name;
            while(file_exists('uploads/images'.$Hinh))
            {
                $Hinh = str_random(4)."_".$name;
            }
            $file->move("uploads/images", $Hinh);
            $idImage ->image2= "uploads/images/".$Hinh;
        }
        //3
        if($request -> hasFile('image3'))
        {
            $file = $request->file('image3');
            $name = $file -> getClientOriginalName();
            $Hinh = str_random(4)."_".$name;
            while(file_exists('uploads/images'.$Hinh))
            {
                $Hinh = str_random(4)."_".$name;
            }
            $file->move("uploads/images", $Hinh);
            $idImage ->image3= "uploads/images/".$Hinh;
        }
        //4
        if($request -> hasFile('image4'))
        {
            $file = $request->file('image4');
            $name = $file -> getClientOriginalName();
            $Hinh = str_random(4)."_".$name;
            while(file_exists('uploads/images'.$Hinh))
            {
                $Hinh = str_random(4)."_".$name;
            }
            $file->move("uploads/images", $Hinh);
            $idImage ->image4= "uploads/images/".$Hinh;
        }
        //5
        if($request -> hasFile('image5'))
        {
            $file = $request->file('image5');
            $name = $file -> getClientOriginalName();
            $Hinh = str_random(4)."_".$name;
            while(file_exists('uploads/images'.$Hinh))
            {
                $Hinh = str_random(4)."_".$name;
            }
            $file->move("uploads/images", $Hinh);
            $idImage ->image5= "uploads/images/".$Hinh;
        }




        $idImage->updated_at = Carbon::now();
        if(! $idImage ->save()) {
            return self::RETURN_STR_ZERO;
        }
        return $idImage;

    }
    public function deleteImage($id) {
        $idImage = $this->find($id);
        if(! $idImage->destroy($id)) {
            return self::RETURN_STR_ZERO;
        }
        return $idImage;
    }



}

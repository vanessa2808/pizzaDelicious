<?php

namespace App\Models;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $table = 'about';
    protected $fillable = ['image','title','description','created_at','updated_at'];
    protected const RETURN_NUM_ZERO = 0;
    protected const RETURN_NUM_ONE = 1;
    protected const RETURN_STR_ZERO = "0";
    protected const RETURN_STR_ONE = "1";

    public function getAllAbout() {
        return $this->all();
    }
    public function addNewAbout($request) {
        $newAbout = new About();
        if($request -> hasFile('image'))
        {
            $file = $request->file('image');
            $name = $file -> getClientOriginalName();
            $Hinh = str_random(4)."_".$name;
            while(file_exists('uploads/products'.$Hinh))
            {
                $Hinh = str_random(4)."_".$name;
            }
            $file->move("uploads/products", $Hinh);
            $newAbout ->image= "uploads/products/".$Hinh;
        }
        $newAbout->title= $request->title;
        $newAbout->description = $request->description;

        $newAbout->created_at = Carbon::now();
        if(! $newAbout->save()) {
            return self::RETURN_STR_ZERO;
        }
        return $newAbout;

    }
    public function getAboutById($id){
        return $this->find($id);
    }
    public function updateAbout($request,$id){
        $idAbout = $this->find($id);
        if($request -> hasFile('image'))
        {
            $file = $request->file('image');
            $name = $file -> getClientOriginalName();
            $Hinh = str_random(4)."_".$name;
            while(file_exists('uploads/products'.$Hinh))
            {
                $Hinh = str_random(4)."_".$name;
            }
            $file->move("uploads/products", $Hinh);
            $idAbout ->image= "uploads/products/".$Hinh;
        }
        $idAbout->title = $request->title;
        $idAbout->description= $request->description;
        $idAbout->updated_at = Carbon::now();
        if(! $idAbout ->save()) {
            return self::RETURN_STR_ZERO;
        }
        return $idAbout;

    }
    public function deleteAbout($id) {
        $idAbout = $this->find($id);
        if(! $idAbout->destroy($id)) {
            return self::RETURN_STR_ZERO;
        }
        return $idAbout;
    }



}

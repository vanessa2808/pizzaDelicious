<?php

namespace App\Models;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Main extends Model
{
    protected $table = 'main';
    protected $fillable = ['title','description','image1','image2','image3','created_at','updated_at'];
    protected const RETURN_NUM_ZERO = 0;
    protected const RETURN_NUM_ONE = 1;
    protected const RETURN_STR_ZERO = "0";
    protected const RETURN_STR_ONE = "1";

    public function getAllMain() {
        return $this->all();
    }
    public function addNewMain($request) {
        $newMain = new Main();
        $newMain->title= $request->title;
        $newMain->description = $request->description;
        if($request -> hasFile('image1'))
        {
            $file = $request->file('image1');
            $name = $file -> getClientOriginalName();
            $Hinh = str_random(4)."_".$name;
            while(file_exists('uploads/products'.$Hinh))
            {
                $Hinh = str_random(4)."_".$name;
            }
            $file->move("uploads/products", $Hinh);
            $newMain ->image1= "uploads/products/".$Hinh;
        }
        if($request -> hasFile('image2'))
        {
            $file = $request->file('image2');
            $name = $file -> getClientOriginalName();
            $Hinh = str_random(4)."_".$name;
            while(file_exists('uploads/products'.$Hinh))
            {
                $Hinh = str_random(4)."_".$name;
            }
            $file->move("uploads/products", $Hinh);
            $newMain ->image2= "uploads/products/".$Hinh;
        }

        if($request -> hasFile('image3'))
        {
            $file = $request->file('image3');
            $name = $file -> getClientOriginalName();
            $Hinh = str_random(4)."_".$name;
            while(file_exists('uploads/products'.$Hinh))
            {
                $Hinh = str_random(4)."_".$name;
            }
            $file->move("uploads/products", $Hinh);
            $newMain ->image3= "uploads/products/".$Hinh;
        }

        $newMain->created_at = Carbon::now();
        if(! $newMain->save()) {
            return self::RETURN_STR_ZERO;
        }
        return $newMain;

    }
    public function getMainById($id){
        return $this->find($id);
    }
    public function updateMain($request,$id){
        $idMain = $this->find($id);
        $idMain->title = $request->title;
        $idMain->description= $request->description;
        if($request -> hasFile('image1'))
        {
            $file = $request->file('image1');
            $name = $file -> getClientOriginalName();
            $Hinh = str_random(4)."_".$name;
            while(file_exists('uploads/products'.$Hinh))
            {
                $Hinh = str_random(4)."_".$name;
            }
            $file->move("uploads/products", $Hinh);
            $idMain ->image1= "uploads/products/".$Hinh;
        }

        if($request -> hasFile('image2'))
        {
            $file = $request->file('image2');
            $name = $file -> getClientOriginalName();
            $Hinh = str_random(4)."_".$name;
            while(file_exists('uploads/products'.$Hinh))
            {
                $Hinh = str_random(4)."_".$name;
            }
            $file->move("uploads/products", $Hinh);
            $idMain ->image2= "uploads/products/".$Hinh;
        }


        if($request -> hasFile('image3'))
        {
            $file = $request->file('image3');
            $name = $file -> getClientOriginalName();
            $Hinh = str_random(4)."_".$name;
            while(file_exists('uploads/products'.$Hinh))
            {
                $Hinh = str_random(4)."_".$name;
            }
            $file->move("uploads/products", $Hinh);
            $idMain ->image3= "uploads/products/".$Hinh;
        }

        $idMain->updated_at = Carbon::now();
        if(! $idMain ->save()) {
            return self::RETURN_STR_ZERO;
        }
        return $idMain;

    }
    public function deleteMain($id) {
        $idMain = $this->find($id);
        if(! $idMain->destroy($id)) {
            return self::RETURN_STR_ZERO;
        }
        return $idMain;
    }
}

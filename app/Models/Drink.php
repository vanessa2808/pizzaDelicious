<?php

namespace App\Models;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Drink extends Model
{
    protected $table = 'drink';
    protected $fillable = ['name','description','price','image','created_at','updated_at'];
    protected const RETURN_NUM_ZERO = 0;
    protected const RETURN_NUM_ONE = 1;
    protected const RETURN_STR_ZERO = "0";
    protected const RETURN_STR_ONE = "1";

    public function getAllDrink() {
        return $this->all();
    }
    public function addNewDrink($request) {
        $newDrink = new Drink();
        $newDrink->name= $request->name;

        $newDrink->description= $request->description;
        $newDrink->price= $request->price;




        if($request -> hasFile('image'))
        {
            $file = $request->file('image');
            $name = $file -> getClientOriginalName();
            $Hinh = str_random(4)."_".$name;
            while(file_exists('uploads/drink'.$Hinh))
            {
                $Hinh = str_random(4)."_".$name;
            }
            $file->move("uploads/drink", $Hinh);
            $newDrink ->image= "uploads/drink/".$Hinh;
        }




        $newDrink->created_at = Carbon::now();
        if(! $newDrink->save()) {
            return self::RETURN_STR_ZERO;
        }
        return $newDrink;

    }
    public function getDrinkById($id){
        return $this->find($id);
    }
    public function updateDrink($request,$id){
        $idDrink = $this->find($id);
        $idDrink->name= $request->name;

        $idDrink->description= $request->description;
        $idDrink->price= $request->price;




        if($request -> hasFile('image'))
        {
            $file = $request->file('image');
            $name = $file -> getClientOriginalName();
            $Hinh = str_random(4)."_".$name;
            while(file_exists('uploads/drink'.$Hinh))
            {
                $Hinh = str_random(4)."_".$name;
            }
            $file->move("uploads/drink", $Hinh);
            $idDrink ->image= "uploads/drink/".$Hinh;
        }



        $idDrink->updated_at = Carbon::now();
        if(! $idDrink ->save()) {
            return self::RETURN_STR_ZERO;
        }
        return $idDrink;

    }
    public function deleteDrink($id) {
        $idDrink = $this->find($id);
        if(! $idDrink->destroy($id)) {
            return self::RETURN_STR_ZERO;
        }
        return $idDrink;
    }



}

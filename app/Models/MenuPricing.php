<?php

namespace App\Models;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class MenuPricing extends Model
{
    protected $table = 'menuPricing';
    protected $fillable = ['name','description','price','image','created_at','updated_at'];
    protected const RETURN_NUM_ZERO = 0;
    protected const RETURN_NUM_ONE = 1;
    protected const RETURN_STR_ZERO = "0";
    protected const RETURN_STR_ONE = "1";

    public function getAllMenuPricing() {
        return $this->all();
    }
    public function addNewMenuPricing($request) {
        $newMenuPricing = new MenuPricing();
        $newMenuPricing->name= $request->name;

        $newMenuPricing->description= $request->description;
        $newMenuPricing->price= $request->price;




        if($request -> hasFile('image'))
        {
            $file = $request->file('image');
            $name = $file -> getClientOriginalName();
            $Hinh = str_random(4)."_".$name;
            while(file_exists('uploads/menuPricing'.$Hinh))
            {
                $Hinh = str_random(4)."_".$name;
            }
            $file->move("uploads/menuPricing", $Hinh);
            $newMenuPricing ->image= "uploads/menuPricing/".$Hinh;
        }




        $newMenuPricing->created_at = Carbon::now();
        if(! $newMenuPricing->save()) {
            return self::RETURN_STR_ZERO;
        }
        return $newMenuPricing;

    }
    public function getMenuPricingById($id){
        return $this->find($id);
    }
    public function updateMenuPricing($request,$id){
        $idMenuPricing = $this->find($id);
        $idMenuPricing->name= $request->name;

        $idMenuPricing->description= $request->description;
        $idMenuPricing->price= $request->price;




        if($request -> hasFile('image'))
        {
            $file = $request->file('image');
            $name = $file -> getClientOriginalName();
            $Hinh = str_random(4)."_".$name;
            while(file_exists('uploads/menuPricing'.$Hinh))
            {
                $Hinh = str_random(4)."_".$name;
            }
            $file->move("uploads/menuPricing", $Hinh);
            $idMenuPricing ->image= "uploads/menuPricing/".$Hinh;
        }



        $idMenuPricing->updated_at = Carbon::now();
        if(! $idMenuPricing ->save()) {
            return self::RETURN_STR_ZERO;
        }
        return $idMenuPricing;

    }
    public function deleteMenuPricing($id) {
        $idMenuPricing= $this->find($id);
        if(! $idMenuPricing->destroy($id)) {
            return self::RETURN_STR_ZERO;
        }
        return $idMenuPricing;
    }



}

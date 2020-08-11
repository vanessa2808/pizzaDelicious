<?php

namespace App\Models;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
    protected $table = 'pizza';
    protected $fillable = ['bakeryType_id','name','description','price','recipe','chef','time','image','status','created_at','updated_at'];
    protected const RETURN_NUM_ZERO = 0;
    protected const RETURN_NUM_ONE = 1;
    protected const RETURN_STR_ZERO = "0";
    protected const RETURN_STR_ONE = "1";

    public function productDetails() {
        return $this->hasMany('App\Models\pizzaDetails', 'pizza_id', 'id');
    }



    public function bakeryTypes() {
        return $this->belongsTo('App\Models\BakeryTypes', 'bakeryType_id', 'id');
    }



    public function getAllPizza() {
        return $this->all();
    }
    public function addNewPizza($request) {
        $newPizza = new Pizza();
        $newPizza->bakeryType_id= $request->bakeryType_id;

        $newPizza->name= $request->name;

        $newPizza->description= $request->description;
        $newPizza->price= $request->price;
        $newPizza->recipe= $request->recipe;
        $newPizza->chef= $request->chef;
        $newPizza->time= $request->time;



        if($request -> hasFile('image'))
        {
            $file = $request->file('image');
            $name = $file -> getClientOriginalName();
            $Hinh = str_random(4)."_".$name;
            while(file_exists('uploads/pizza'.$Hinh))
            {
                $Hinh = str_random(4)."_".$name;
            }
            $file->move("uploads/pizza", $Hinh);
            $newPizza ->image= "uploads/pizza/".$Hinh;
        }


        $newPizza->status= $request->status;


        $newPizza->created_at = Carbon::now();
        if(! $newPizza->save()) {
            return self::RETURN_STR_ZERO;
        }
        return $newPizza;

    }
    public function getPizzaById($id){
        return $this->find($id);
    }
    public function updatePizza($request,$id){
        $idPizza = $this->find($id);
        $idPizza->bakeryType_id= $request->bakeryType_id;

        $idPizza->name= $request->name;

        $idPizza->description= $request->description;
        $idPizza->price= $request->price;
        $idPizza->recipe= $request->recipe;
        $idPizza->chef= $request->chef;
        $idPizza->time= $request->time;
        $idPizza->status= $request->status;



        if($request -> hasFile('image'))
        {
            $file = $request->file('image');
            $name = $file -> getClientOriginalName();
            $Hinh = str_random(4)."_".$name;
            while(file_exists('uploads/pizza'.$Hinh))
            {
                $Hinh = str_random(4)."_".$name;
            }
            $file->move("uploads/pizza", $Hinh);
            $idPizza ->image= "uploads/pizza/".$Hinh;
        }



        $idPizza->updated_at = Carbon::now();
        if(! $idPizza ->save()) {
            return self::RETURN_STR_ZERO;
        }
        return $idPizza;

    }
    public function deletePizza($id) {
        $idPizza = $this->find($id);
        if(! $idPizza->destroy($id)) {
            return self::RETURN_STR_ZERO;
        }
        return $idPizza;
    }



}

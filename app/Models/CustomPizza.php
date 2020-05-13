<?php

namespace App\Models;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class CustomPizza extends Model
{
    protected $table = 'customPizza';
    protected $fillable = ['approved','user_id','created_at','updated_at'];
    protected const RETURN_NUM_ZERO = 0;
    protected const RETURN_NUM_ONE = 1;
    protected const RETURN_STR_ZERO = "0";
    protected const RETURN_STR_ONE = "1";


    public function Users() {
        return $this->hasMany('App\User', 'user_id', 'id');
    }

    public function getAllCustomPizza() {
        return $this->all();
    }
    public function addNewCustomPizza($request) {
        $newCustomPizza = new CustomPizza();

        $newCustomPizza->user_id= Auth::user()->id;
        $newCustomPizza->approved= "0";





        $newCustomPizza->created_at = Carbon::now();
        if(! $newCustomPizza->save()) {
            return self::RETURN_STR_ZERO;
        }
        return $newCustomPizza;

    }
    public function getCustomPizzaById($id){
        return $this->find($id);
    }
    public function updateCustomPizza($request,$id){
        $idCustomPizza = $this->find($id);
        $idCustomPizza->user_id= Auth::user();

        $idCustomPizza->ingredient_id= $request->ingredientId;





        $idCustomPizza->updated_at = Carbon::now();
        if(! $idCustomPizza ->save()) {
            return self::RETURN_STR_ZERO;
        }
        return $idCustomPizza;

    }
    public function deleteCustomPizza($id) {
        $idCustomPizza = $this->find($id);
        if(! $idCustomPizza->destroy($id)) {
            return self::RETURN_STR_ZERO;
        }
        return $idCustomPizza;
    }



}

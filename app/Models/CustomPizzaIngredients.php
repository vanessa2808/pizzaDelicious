<?php

namespace App\Models;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use App\Models\CustomPizza;
class CustomPizzaIngredients extends Model
{
    protected $table = 'customPizza';
    protected $fillable = ['customPizza_id','ingredient_id','created_at','updated_at'];
    protected const RETURN_NUM_ZERO = 0;
    protected const RETURN_NUM_ONE = 1;
    protected const RETURN_STR_ZERO = "0";
    protected const RETURN_STR_ONE = "1";


    public function Users() {
        return $this->hasMany('App\User', 'user_id', 'id');
    }
    public function Ingredients() {
        return $this->hasMany('App\Models\Ingredients', 'ingredient_id', 'id');
    }

    public function getAllCustomPizzaIngredients() {
        return $this->all();
    }
    public function addNewCustomPizzaIngredients($request) {
        $newCustomPizzaIngredients = new CustomPizzaIngredients();

        $newCustomPizzaIngredients->customPizza_id=$request->this->customPizza->id;
        $newCustomPizzaIngredients->ingredient_id= $request->ingredientId1;
        $newCustomPizzaIngredients->ingredient_id= $request->ingredientId2;
        $newCustomPizzaIngredients->ingredient_id= $request->ingredientId3;
        $newCustomPizzaIngredients->ingredient_id= $request->ingredientId4;




        $newCustomPizzaIngredients->created_at = Carbon::now();
        if(! $newCustomPizzaIngredients->save()) {
            return self::RETURN_STR_ZERO;
        }
        return $newCustomPizzaIngredients;

    }
    public function getCustomPizzaIngredientById($id){
        return $this->find($id);
    }
    public function updateCustomPizzaIngredients($request,$id){
        $idCustomPizzaIngredients = $this->find($id);
        $idCustomPizzaIngredients->customPizza_id= $request->customPizzaId;

        $idCustomPizzaIngredients->ingredient_id= $request->ingredientId;





        $idCustomPizzaIngredients->updated_at = Carbon::now();
        if(! $idCustomPizzaIngredients ->save()) {
            return self::RETURN_STR_ZERO;
        }
        return $idCustomPizzaIngredients;

    }
    public function deleteCustomPizzaIngredients($id) {
        $idCustomPizza = $this->find($id);
        if(! $idCustomPizza->destroy($id)) {
            return self::RETURN_STR_ZERO;
        }
        return $idCustomPizza;
    }



}

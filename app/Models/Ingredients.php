<?php

namespace App\Models;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Ingredients extends Model
{
    protected $table = 'ingredients';
    protected $fillable = ['ingredientType_id','ingredientName','created_at','updated_at'];
    protected const RETURN_NUM_ZERO = 0;
    protected const RETURN_NUM_ONE = 1;
    protected const RETURN_STR_ZERO = "0";
    protected const RETURN_STR_ONE = "1";


    public function IngredientTypes() {
        return $this->belongsTo('App\Models\IngredientTypes', 'ingredientType_id', 'id');
    }

    public function getAllIngredients() {
        return $this->all();
    }
    public function addNewIngredients($request) {
        $newIngredients = new Ingredients();

        $newIngredients->ingredientType_id= $request->ingredientTypeId;

        $newIngredients->ingredientName= $request->ingredientName;


        $newIngredients->created_at = Carbon::now();
        if(! $newIngredients->save()) {
            return self::RETURN_STR_ZERO;
        }
        return $newIngredients;

    }
    public function getRIngredientById($id){
        return $this->find($id);
    }
    public function updateIngredients($request,$id){
        $idIngredient = $this->find($id);
        $idIngredient->ingredientType_id= $request->ingredientTypeId;

        $idIngredient->ingredientName= $request->ingredientName;





        $idIngredient->updated_at = Carbon::now();
        if(! $idIngredient ->save()) {
            return self::RETURN_STR_ZERO;
        }
        return $idIngredient;

    }
    public function deleteIngredients($id) {
        $idIngredient = $this->find($id);
        if(! $idIngredient->destroy($id)) {
            return self::RETURN_STR_ZERO;
        }
        return $idIngredient;
    }



}

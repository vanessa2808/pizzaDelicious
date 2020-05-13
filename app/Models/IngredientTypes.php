<?php

namespace App\Models;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class IngredientTypes extends Model
{
    protected $table = 'ingredientTypes';
    protected $fillable = ['name','created_at','updated_at'];
    protected const RETURN_NUM_ZERO = 0;
    protected const RETURN_NUM_ONE = 1;
    protected const RETURN_STR_ZERO = "0";
    protected const RETURN_STR_ONE = "1";


    public function ingredientTypes() {
        return $this->belongsTo('App\Models\IngredientTypes', 'IngredientType_id', 'id');
    }


    public function getAllIngredientTypes() {
        return $this->all();
    }
    public function addNewIngredientTypes($request) {
        $newIngredientType = new IngredientTypes();
        $newIngredientType->name= $request->name;







        $newIngredientType->created_at = Carbon::now();
        if(! $newIngredientType->save()) {
            return self::RETURN_STR_ZERO;
        }
        return $newIngredientType;

    }
    public function getIngredientTypeById($id){
        return $this->find($id);
    }
    public function updateIngredientTypes($request,$id){
        $idIngredientTypes = $this->find($id);
        $idIngredientTypes->name= $request->name;






        $idIngredientTypes->updated_at = Carbon::now();
        if(! $idIngredientTypes ->save()) {
            return self::RETURN_STR_ZERO;
        }
        return $idIngredientTypes;

    }
    public function deleteIngredientTypes($id) {
        $idIngredientTypes = $this->find($id);
        if(! $idIngredientTypes->destroy($id)) {
            return self::RETURN_STR_ZERO;
        }
        return $idIngredientTypes;
    }



}

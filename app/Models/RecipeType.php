<?php

namespace App\Models;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class RecipeType extends Model
{
    protected $table = 'recipeTypes';
    protected $fillable = ['types','ingredients','created_at','updated_at'];
    protected const RETURN_NUM_ZERO = 0;
    protected const RETURN_NUM_ONE = 1;
    protected const RETURN_STR_ZERO = "0";
    protected const RETURN_STR_ONE = "1";


    public function recipeTypes() {
        return $this->belongsTo('App\Models\RecipeType', 'recipeTypes_id', 'id');
    }


    public function getAllRecipeTypes() {
        return $this->all();
    }
    public function addNewRecipeTypes($request) {
        $newRecipeType = new RecipeType();
        $newRecipeType->types= $request->types;

        $newRecipeType->ingredients= $request->ingredients;






        $newRecipeType->created_at = Carbon::now();
        if(! $newRecipeType->save()) {
            return self::RETURN_STR_ZERO;
        }
        return $newRecipeType;

    }
    public function getRecipeTypeById($id){
        return $this->find($id);
    }
    public function updateRecipeTypes($request,$id){
        $idRecipeTypes = $this->find($id);
        $idRecipeTypes->ingredients= $request->ingredients;

        $idRecipeTypes->types= $request->types;




        $idRecipeTypes->updated_at = Carbon::now();
        if(! $idRecipeTypes ->save()) {
            return self::RETURN_STR_ZERO;
        }
        return $idRecipeTypes;

    }
    public function deleteRecipeTypes($id) {
        $idRecipeTypes = $this->find($id);
        if(! $idRecipeTypes->destroy($id)) {
            return self::RETURN_STR_ZERO;
        }
        return $idRecipeTypes;
    }



}

<?php

namespace App\Models;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    protected $table = 'recipes';
    protected $fillable = ['recipeTypes_id','nameOfRecipes','decription','created_at','updated_at'];
    protected const RETURN_NUM_ZERO = 0;
    protected const RETURN_NUM_ONE = 1;
    protected const RETURN_STR_ZERO = "0";
    protected const RETURN_STR_ONE = "1";


    public function recipeTypes() {
        return $this->belongsTo('App\Models\RecipeType', 'recipeTypes_id', 'id');
    }

    public function getAllRecipe() {
        return $this->all();
    }
    public function addNewRecipe($request) {
        $newRecipe = new Recipe();

        $newRecipe->recipeTypes_id= $request->recipeTypeId;

        $newRecipe->nameOfRecipes= $request->nameOfRecipes;

        $newRecipe->decription= $request->decription;

        $newRecipe->created_at = Carbon::now();
        if(! $newRecipe->save()) {
            return self::RETURN_STR_ZERO;
        }
        return $newRecipe;

    }
    public function getRecipeById($id){
        return $this->find($id);
    }
    public function updateRecipes($request,$id){
        $idRecipe = $this->find($id);
        $idRecipe->recipeTypes_id= $request->recipeTypes;

        $idRecipe->nameOfRecipes= $request->nameOfRecipes;

        $idRecipe->decription= $request->decription;




        $idRecipe->updated_at = Carbon::now();
        if(! $idRecipe ->save()) {
            return self::RETURN_STR_ZERO;
        }
        return $idRecipe;

    }
    public function deleteRecipe($id) {
        $idRecipe = $this->find($id);
        if(! $idRecipe->destroy($id)) {
            return self::RETURN_STR_ZERO;
        }
        return $idRecipe;
    }



}

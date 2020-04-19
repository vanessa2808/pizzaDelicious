<?php

namespace App\Models;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class PizzaRecipe extends Model
{
    protected $table = 'pizza_recipes';
    protected $fillable = ['pizza_id','recipe_id',  'created_at','updated_at'];
    protected const RETURN_NUM_ZERO = 0;
    protected const RETURN_NUM_ONE = 1;
    protected const RETURN_STR_ZERO = "0";
    protected const RETURN_STR_ONE = "1";
    
    public function PizzaRecipe() {
        return $this->hasMany('App\Models\Recipe', 'recipe_id', 'id');
    }
    
    
    
    public function getAllPizzaRecipes() {
        return $this->all();
    }
    
    
    
}

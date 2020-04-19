<?php

namespace App\Http\Controllers\Admin;

use App\Models\PizzaRecipe;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use phpDocumentor\Reflection\Types\Self_;

class PizzaRecipeController extends Controller
{
    protected $pizza_recipes;
    protected const RETURN_NUM_ZERO = 0;
    protected const RETURN_NUM_ONE = 1;
    protected const RETURN_STR_ZERO ="0";
    protected const RETURN_STR_ONE= "1";
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(PizzaRecipe $_pizza_recipes = null)
    {
        $this->middleware('auth');
        $this->pizza_recipes= $_pizza_recipes;
    }
    public function index() {
        $listPizzaRecipes= $this->pizza_recipes->getAllPizzaRecipes();
        return view('admin.recipes.list_pizzaRecipes',[
            'listPizzaRecipes' => $listPizzaRecipes
        ],compact('listPizzaRecipes'));
    }
    
   
    
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
}

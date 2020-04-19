<?php

namespace App\Http\Controllers\Admin;

use App\Models\Recipe;
use App\Models\RecipeType;
use App\Http\Controllers\Controller;
use App\Http\Requests\RecipeRequest;

class RecipeController extends Controller
{
    protected $recipes;
    protected $recipeTypes;
    protected const RETURN_NUM_ZERO = 0;
    protected const RETURN_NUM_ONE = 1;
    protected const RETURN_STR_ZERO ="0";
    protected const RETURN_STR_ONE= "1";
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(Recipe $_recipes = null, RecipeType $_recipeTypes = null)
    {
        $this->middleware('auth');
        $this->recipes= $_recipes;
        $this->recipeTypes= $_recipeTypes;

    }
    public function index() {
        $listRecipe= $this->recipes->getAllRecipe();
        return view('admin.recipes.list_recipe',[
            'listRecipe' => $listRecipe
        ],compact('listRecipe'));
    }

    public function getAddRecipe()
    {
        $listRecipeTypes = $this->recipeTypes->getAllRecipeTypes();
        return view('admin.recipes.add_recipe',[
            'listRecipeTypes' => $listRecipeTypes
            ]


        );
    }
    public function postAddRecipe(RecipeRequest $request) {
        $newRecipe= $this->recipes->addNewRecipe($request);
        if($newRecipe == self::RETURN_STR_ZERO) {
            return redirect('admin/recipes/add_recipe')->with([
                'message' => 'Header is error',
                'class' =>'error'
            ]);;
        }
        return redirect('/admin/recipes/list_recipe')->with(([
            'message' => 'add successfully',
            'class' => 'success'
        ]));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getEditRecipe($id)
    {
        $idRecipe = $this->recipes->getRecipeById($id);
        return view('admin.recipes.edit_recipe',[
            'idRecipe' => $idRecipe
        ],compact('idRecipe'));
    }
    public function postEditRecipe(RecipeRequest $request, $id) {
        $idRecipe =$this->recipes->updateRecipes($request,$id);
        if($idRecipe == self::RETURN_STR_ZERO) {
            return redirect()->back()->with([
                'message' => 'Update error',
                'class' => 'error'
            ]);
        }
        return redirect('/admin/recipes/list_recipe')->with([
            'message' =>'update successfully',
            'class' =>'success'
        ], compact('idRecipe'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $idRecipe = $this->recipes->deleteRecipe($id);
        if($idRecipe == self::RETURN_STR_ZERO){
            return redirect()->back()->with([
                'message' =>' delete error',
                'class' =>'error'
            ]);
        }
        return redirect('admin/recipes/list_recipe')->with([
            'message' => 'delete',
            'class' => 'success'
        ]);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

}

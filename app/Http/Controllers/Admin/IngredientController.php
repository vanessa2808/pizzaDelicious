<?php

namespace App\Http\Controllers\Admin;

use App\Models\Ingredients;
use App\Models\IngredientTypes;
use App\Http\Controllers\Controller;
use App\Http\Requests\IngredientRequest;

class IngredientController extends Controller
{
    protected $ingredients;
    protected $ingredientTypes;
    protected const RETURN_NUM_ZERO = 0;
    protected const RETURN_NUM_ONE = 1;
    protected const RETURN_STR_ZERO ="0";
    protected const RETURN_STR_ONE= "1";
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(Ingredients $_ingredients = null, IngredientTypes $_ingredientTypes = null)
    {
        $this->middleware('auth');
        $this->ingredients= $_ingredients;
        $this->ingredientTypes= $_ingredientTypes;

    }
    public function index() {
        $listIngredients= $this->ingredients->getAllIngredients();
        return view('admin.ingredients.list_ingredients',[
            'listIngredients' => $listIngredients
        ],compact('listIngredients'));
    }

    public function getAddIngredients()
    {
        $listIngredientTypes = $this->ingredientTypes->getAllIngredientTypes();
        return view('admin.ingredients.add_ingredients',[
            'listIngredientTypes' => $listIngredientTypes
            ]


        );
    }
    public function postAddIngredients(IngredientRequest $request) {
        $newIngredients= $this->ingredients->addNewIngredients($request);
        if($newIngredients == self::RETURN_STR_ZERO) {
            return redirect('admin/ingredients/add_ingredients')->with([
                'message' => 'Header is error',
                'class' =>'error'
            ]);;
        }
        return redirect('/admin/ingredients/list_ingredients')->with(([
            'message' => 'add successfully',
            'class' => 'success'
        ]));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getEditIngredients($id)
    {
        $idIngredients = $this->ingredients->getRecipeById($id);
        return view('admin.ingredients.edit_ingredients',[
            'idIngredients' => $idIngredients
        ],compact('idIngredients'));
    }
    public function postEditIngredients(IngredientRequest $request, $id) {
        $idIngredients =$this->ingredients->updateIngredients($request,$id);
        if($idIngredients == self::RETURN_STR_ZERO) {
            return redirect()->back()->with([
                'message' => 'Update error',
                'class' => 'error'
            ]);
        }
        return redirect('/admin/ingredients/list_ingredients')->with([
            'message' =>'update successfully',
            'class' =>'success'
        ], compact('idIngredients'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $idIngredients = $this->ingredients->deleteIngredients($id);
        if($idIngredients == self::RETURN_STR_ZERO){
            return redirect()->back()->with([
                'message' =>' delete error',
                'class' =>'error'
            ]);
        }
        return redirect('admin/ingredients/list_ingredients')->with([
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

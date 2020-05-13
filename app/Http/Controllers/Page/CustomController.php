<?php

namespace App\Http\Controllers\Page;
use App\Models\CustomPizza;

use App\Models\Ingredients;
use App\Models\IngredientTypes;
use App\User;
use App\Http\Controllers\Controller;
use App\Http\Requests\IngredientRequest;
use App\Http\Requests\RecipeTypeRequest;
use App\Http\Requests\UserRequest;
use App\Http\Requests\CustomPizzaRequest;

class CustomController extends Controller
{
    protected $custom;
    protected $recipe;
    protected $users;
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
    public function __construct(Ingredients $_recipes = null, IngredientTypes $_recipeTypes = null, User $_users, CustomPizza $_custom)
    {
        $this->users= $_users;

        $this->recipes= $_recipes;
        $this->recipeTypes= $_recipeTypes;
        $this->custom= $_custom;


    }
    public function index() {
        $listCustom= $this->custom->getAllCustom();


        return view('admin.custom.list_custom',[
            'listCustom' => $listCustom
        ],compact('listCustom'));
    }

    public function getAddCustom()
    {
        $listUsers = $this->users->getAllUsers();
        $listRecipeTypes = $this->recipeTypes->getAllRecipeTypes();

        $listRecipe = $this->recipes->getAllRecipe();
        return view('page.customPizza',[
            'listUsers' => $listUsers,

                'listRecipeTypes' => $listRecipeTypes,
                'listRecipe' => $listRecipe,
            ]


        );
    }
    public function postAddCustom(CustomPizzaRequest $request) {
        $newCustom= $this->custom->addNewCustom($request);
        if($newCustom == self::RETURN_STR_ZERO) {
            return redirect('page/customPizza')->with([
                'message' => 'Header is error',
                'class' =>'error'
            ]);;
        }
        return redirect('/admin/custom/list_custom')->with(([
            'message' => 'add successfully',
            'class' => 'success'
        ]));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getEditCustom($id)
    {
        $idCustom = $this->custom->getCustomById($id);
        return view('page.edit_custom',[
            'idCustom' => $idCustom
        ],compact('idCustom'));
    }
    public function postEditCustom(CustomPizzaRequest $request, $id) {
        $idCustom =$this->custom->updateCustom($request,$id);
        if($idCustom == self::RETURN_STR_ZERO) {
            return redirect()->back()->with([
                'message' => 'Update error',
                'class' => 'error'
            ]);
        }
        return redirect('/admin/custom/list_custom')->with([
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
        $idCustom = $this->custom->deleteCustom($id);
        if($idCustom == self::RETURN_STR_ZERO){
            return redirect()->back()->with([
                'message' =>' delete error',
                'class' =>'error'
            ]);
        }
        return redirect('admin/custom/list_custom')->with([
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

<?php

namespace App\Http\Controllers\Admin;

use App\Models\Ingredients;
use App\Models\CustomPizza;
use App\Models\CustomPizzaIngredients;
use App\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\IngredientRequest;
use App\Http\Requests\CustomPizzaRequest;
use App\Http\Requests\CustomPizzaIngredientRequest;



class CustomPizzaIngredientController extends Controller
{
    protected $ingredients;
    protected $customPizza;
    protected $customPizzaIngredients;
    protected $users;
    protected const RETURN_NUM_ZERO = 0;
    protected const RETURN_NUM_ONE = 1;
    protected const RETURN_STR_ZERO ="0";
    protected const RETURN_STR_ONE= "1";
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(Ingredients $_ingredients = null,CustomPizza $_customPizza ,CustomPizzaIngredients $_customPizzaIngredients = null, User $_users = null)
    {
        $this->middleware('auth');
        $this->ingredients= $_ingredients;
        $this->customPizza= $_customPizza;
        $this->customPizzaIngredients= $_customPizzaIngredients;

        $this->users= $_users;

    }
    public function index() {
        $listCustomPizzaIngredients= $this->customPizzaIngredients->getAllCustomPizzaIngredients();
        return view('admin.custom.list_customPizzaIngredients',[
            'listCustomPizzaIngredients' => $listCustomPizzaIngredients
        ],compact('listCustomPizzaIngredients'));
    }

    public function getAddCustomPizzaIngredients()
    {
        $listCustomPizza = $this->customPizza->getAllCustomPizza();
        return view('admin.custom.add_customPizzaIngredients',[
                'listCustomPizza' => $listCustomPizza
            ]


        );
    }
    public function postAddCustomPizzaIngredients(CustomPizzaIngredientRequest $request) {

        $newCustomPizzaIngredients= $this->customPizzaIngredients->addNewCustomPizzaIngredients($request);
        if($newCustomPizzaIngredients == self::RETURN_STR_ZERO) {
            return redirect('admin/custom/add_customPizzaIngredients')->with([
                'message' => 'Header is error',
                'class' =>'error'
            ]);;
        }
        return redirect('/admin/custom/list_customPizzaIngredients')->with(([
            'message' => 'add successfully',
            'class' => 'success'
        ]));
    }


    public function getEditCustomPizzaIngredients($id)
    {
        $idCustomPizzaIngredients= $this->customPizzaIngredients->getCustomPizzaIngredientById($id);
        return view('admin.custom.edit_customPizzaIngredients',[
            'idCustomPizzaIngredients' => $idCustomPizzaIngredients
        ],compact('idCustomPizzaIngredients'));
    }
    public function postEditCustomPizzaIngredients(CustomPizzaIngredientRequest $request, $id) {
        $idCustomPizzaIngredients =$this->customPizzaIngredients->updateCustomPizzaIngredients($request,$id);
        if($idCustomPizzaIngredients == self::RETURN_STR_ZERO) {
            return redirect()->back()->with([
                'message' => 'Update error',
                'class' => 'error'
            ]);
        }
        return redirect('/admin/customPizza/list_customPizzaIngredients')->with([
            'message' =>'update successfully',
            'class' =>'success'
        ], compact('idCustomPizzaIngredients'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $idCustomPizzaIngredients = $this->customPizzaIngredients->deleteCustomPizzaIngredients($id);
        if($idCustomPizzaIngredients == self::RETURN_STR_ZERO){
            return redirect()->back()->with([
                'message' =>' delete error',
                'class' =>'error'
            ]);
        }
        return redirect('admin/custom/list_customPizzaIngredients')->with([
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

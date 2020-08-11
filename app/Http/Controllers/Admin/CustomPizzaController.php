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
use Illuminate\Support\Facades\Auth;


class CustomPizzaController extends Controller
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
        $listCustomPizza= $this->customPizza->getAllCustomPizza();
        return view('admin.custom.list_customPizza',[
            'listCustomPizza' => $listCustomPizza
        ],compact('listCustomPizza'));
    }



    public function getAddCustomPizza()
    {
        $listIngredients = $this->ingredients->getAllIngredients();
        return view('admin.custom.add_customPizzaIngredients',[
                'listIngredients' => $listIngredients
            ]


        );
    }
    public function postAddCustomPizza(CustomPizzaRequest$request) {
        $newCustomPizza= $this->customPizza->addNewCustomPizza($request);
        if($newCustomPizza == self::RETURN_STR_ZERO) {
            return redirect('admin/custom/add_customPizzaIngredients')->with([
                'message' => 'Header is error',
                'class' =>'error'
            ]);;
        }
        return redirect('/admin/custom/list_customPizza')->with(([
            'message' => 'add successfully',
            'class' => 'success'
        ]));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getEditCustomPizza($id)
    {
        $idCustomPizza= $this->customPizza->getCustomPizzaById($id);
        return view('admin.custom.edit_customPizza',[
            'idCustomPizza' => $idCustomPizza
        ],compact('idCustomPizza'));
    }
    public function postEditCustomPizza(CustomPizzaRequest $request, $id) {
        $idCustomPizza =$this->customPizza->updateCustomPizza($request,$id);
        if($idCustomPizza == self::RETURN_STR_ZERO) {
            return redirect()->back()->with([
                'message' => 'Update error',
                'class' => 'error'
            ]);
        }
        return redirect('/admin/customPizza/list_customPizza')->with([
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
        $idCustomPizza = $this->customPizza->deleteCustomPizza($id);
        if($idCustomPizza == self::RETURN_STR_ZERO){
            return redirect()->back()->with([
                'message' =>' delete error',
                'class' =>'error'
            ]);
        }
        return redirect('admin/custom/list_customPizza')->with([
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

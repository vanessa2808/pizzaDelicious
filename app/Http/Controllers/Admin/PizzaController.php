<?php

namespace App\Http\Controllers\Admin;

use App\Models\Pizza;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\PizzaRequest;
use phpDocumentor\Reflection\Types\Self_;

class PizzaController extends Controller
{
    protected $pizza;
    protected const RETURN_NUM_ZERO = 0;
    protected const RETURN_NUM_ONE = 1;
    protected const RETURN_STR_ZERO ="0";
    protected const RETURN_STR_ONE= "1";
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(Pizza $_pizza = null)
    {
        $this->middleware('auth');
        $this->pizza= $_pizza;
    }
    public function index() {
        $listPizza= $this->pizza->getAllPizza();
        return view('admin.food.list_pizza',[
            'listPizza' => $listPizza
        ],compact('listPizza'));
    }

    public function getAddPizza()
    {
        return view('admin.food.add_pizza');
    }
    public function postAddPizza(PizzaRequest $request) {
        $newPizza= $this->pizza->addNewPizza($request);
        if($newPizza == self::RETURN_STR_ZERO) {
            return redirect('admin/food/add_pizza')->with([
                'message' => 'Header is error',
                'class' =>'error'
            ]);;
        }
        return redirect('/admin/food/list_pizza')->with(([
            'message' => 'add successfully',
            'class' => 'success'
        ]));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getEditPizza($id)
    {
        $idPizza = $this->pizza->getPizzaById($id);
        return view('admin.food.edit_pizza',[
            'idPizza' => $idPizza
        ],compact('idPizza'));
    }
    public function postEditPizza(PizzaRequest $request, $id) {
        $idPizza =$this->pizza->updatePizza($request,$id);
        if($idPizza == self::RETURN_STR_ZERO) {
            return redirect()->back()->with([
                'message' => 'Update error',
                'class' => 'error'
            ]);
        }
        return redirect('/admin/food/list_pizza')->with([
            'message' =>'update successfully',
            'class' =>'success'
        ], compact('idPizza'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function delePizza($id)
    {
        $idPizza = $this->pizza->deletePizza($id);
        if($idPizza == self::RETURN_STR_ZERO){
            return redirect()->back()->with([
                'message' =>' delete error',
                'class' =>'error'
            ]);
        }
        return redirect('admin/food/list_pizza')->with([
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

<?php

namespace App\Http\Controllers\Page;


use App\Models\Pizza;
use App\Models\PizzaDetails;


use App\Http\Controllers\Controller;

class PizzaController extends Controller
{
    protected $pizza;
    protected $pizzaDetails;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Pizza $_pizza = null, PizzaDetails $_pizza_details = null)
    {

        $this->pizza = $_pizza;
        $this->pizzaDetails = $_pizza_details;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index($id)
    {
        $listPizza= $this->pizza->getPizzaById($id);
        if(empty($listPizza)){
            return redirect()->back();
        }
        return view('page.pizza_details',[
            'listPizza' => $listPizza
        ]);
    }


}

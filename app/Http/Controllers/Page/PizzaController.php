<?php

namespace App\Http\Controllers\Page;

use Illuminate\Http\Request;
use App\Models\Pizza;
use App\Models\ProductDetails;
use bumbummen99\Shoppingcart\Facades\Cart ;
use App\Http\Controllers\Controller;

class PizzaController extends Controller
{
    protected $pizza;
    protected $productDetails;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Pizza $_pizza = null, ProductDetails $_productDetails = null)
    {

        $this->pizza = $_pizza;
        $this->productDetails = $_productDetails;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function pizzaDetails($id)
    {
        $idPizza= $this->pizza->getPizzaDetailById($id);
        if(empty($idPizza)){
            return redirect()->back();
        }
        return view('page.pizza_details',[
            'idPizza' => $idPizza
        ]);
    }


}

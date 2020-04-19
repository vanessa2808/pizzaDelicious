<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\FoodRequest;
use App\Models\Food;

class FoodController extends Controller
{
    protected $food;
    protected const RETURN_NUM_ZERO = 0;
    protected const RETURN_NUM_ONE = 1;
    protected const RETURN_STR_ZERO = "0";
    protected const RETURN_STR_ONE = "1";
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(Food $_food = null)
    {
        $this->middleware('auth');
        $this->food=$_food;
    }

    public function index()
    {
        $listFood = $this->food->getAllFood();
        return view('admin.food.list_food',[
           'listFood' => $listFood
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getAddFood()
    {
        return view('admin.food.add_food');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postAddFood(FoodRequest $request)
    {
        $newFood = $this->food->addNewFood($request);
        if($newFood == self::RETURN_STR_ZERO) {
            return redirect('admin/food/add_food');
        }
        return redirect('admin/food/list_food');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getEditFood($id)
    {
        $idFood = $this->food->getFoodById($id);
        return view('admin.food.edit_food',[
           'idFood' => $idFood
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function postEditFood(FoodRequest $request, $id)
    {
        $idFood = $this->food->updateFood($request,$id);
        if($idFood == self::RETURN_STR_ZERO) {
            return redirect()->back();
        }
        return redirect('admin/food/list_food');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $idFood = $this->food->deteteFood($id);
        if(!$idFood == self::RETURN_STR_ZERO) {
            return redirect()->back();
        }
        return redirect('admin/food/list_food');
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Models\Drink;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\DrinkRequest;
use phpDocumentor\Reflection\Types\Self_;

class DrinkController extends Controller
{
    protected $drink;
    protected const RETURN_NUM_ZERO = 0;
    protected const RETURN_NUM_ONE = 1;
    protected const RETURN_STR_ZERO ="0";
    protected const RETURN_STR_ONE= "1";
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(Drink $_drink = null)
    {
        $this->middleware('auth');
        $this->drink= $_drink;
    }
    public function index() {
        $listDrink= $this->drink->getAllDrink();
        return view('admin.food.list_drink',[
            'listDrink' => $listDrink
        ],compact('listDrink'));
    }

    public function getAddDrink()
    {
        return view('admin.food.add_drink');
    }
    public function postAddDrink(DrinkRequest $request) {
        $newDrink= $this->drink->addNewDrink($request);
        if($newDrink == self::RETURN_STR_ZERO) {
            return redirect('admin/food/add_drink')->with([
                'message' => 'Header is error',
                'class' =>'error'
            ]);;
        }
        return redirect('/admin/food/list_drink')->with(([
            'message' => 'add successfully',
            'class' => 'success'
        ]));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getEditDrink($id)
    {
        $idDrink = $this->drink->getDrinkById($id);
        return view('admin.food.edit_drink',[
            'idDrink' => $idDrink
        ],compact('idDrink'));
    }
    public function postEditDrink(DrinkRequest $request, $id) {
        $idDrink =$this->drink->updateDrink($request,$id);
        if($idDrink == self::RETURN_STR_ZERO) {
            return redirect()->back()->with([
                'message' => 'Update error',
                'class' => 'error'
            ]);
        }
        return redirect('/admin/food/list_drink')->with([
            'message' =>'update successfully',
            'class' =>'success'
        ], compact('idDrink'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function deleDrink($id)
    {
        $idDrink = $this->drink->deleteDrink($id);
        if($idDrink == self::RETURN_STR_ZERO){
            return redirect()->back()->with([
                'message' =>' delete error',
                'class' =>'error'
            ]);
        }
        return redirect('admin/food/list_drink')->with([
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

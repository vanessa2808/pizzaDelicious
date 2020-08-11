<?php

namespace App\Http\Controllers\Admin;

use App\Models\IngredientTypes;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\IngredientTypeRequest;
use phpDocumentor\Reflection\Types\Self_;

class IngredientTypeController extends Controller
{
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
    public function __construct(IngredientTypes $_ingredientTypes = null)
    {
        $this->middleware('auth');
        $this->ingredientTypes= $_ingredientTypes;
    }
    public function index() {
        $listIngredientTypes= $this->ingredientTypes->getAllIngredientTypes();
        return view('admin.ingredientTypes.list_ingredientTypes',[
            'listIngredientTypes' => $listIngredientTypes
        ],compact('listIngredientTypes'));
    }

    public function getAddIngredientTypes()
    {
        return view('admin.ingredientTypes.add_ingredientTypes');
    }
    public function postAddIngredientTypes(IngredientTypeRequest $request) {
        $newIngredientTypes= $this->ingredientTypes->addNewIngredientTypes($request);
        if($newIngredientTypes == self::RETURN_STR_ZERO) {
            return redirect('admin/ingredientTypes/add_ingredientTypes')->with([
                'message' => 'Header is error',
                'class' =>'error'
            ]);;
        }
        return redirect('/admin/ingredientTypes/list_ingredientTypes')->with(([
            'message' => 'add successfully',
            'class' => 'success'
        ]));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getEditIngredientTypes($id)
    {
        $idIngredientTypes = $this->ingredientTypes->getIngredientTypeById($id);
        return view('admin.ingredientTypes.edit_ingredientTypes',[
            'idIngredientTypes' => $idIngredientTypes
        ],compact('idIngredientTypes'));
    }
    public function postEditIngredientTypes(IngredientTypeRequest $request, $id) {
        $idIngredientTypes =$this->ingredientTypes->updateIngredientTypes($request,$id);
        if($idIngredientTypes == self::RETURN_STR_ZERO) {
            return redirect()->back()->with([
                'message' => 'Update error',
                'class' => 'error'
            ]);
        }
        return redirect('/admin/ingredientTypes/list_ingredientTypes')->with([
            'message' =>'update successfully',
            'class' =>'success'
        ], compact('idIngredientTypes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function deleteIngre($id)
    {
        $idIngredientTypes = $this->ingredientTypes->deleteIngredientTypes($id);
        if($idIngredientTypes == self::RETURN_STR_ZERO){
            return redirect()->back()->with([
                'message' =>' delete error',
                'class' =>'error'
            ]);
        }
        return redirect('admin/ingredientTypes/list_ingredientTypes')->with([
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

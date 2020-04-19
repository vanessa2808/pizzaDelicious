<?php

namespace App\Http\Controllers\Admin;

use App\Models\RecipeType;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\RecipeTypeRequest;
use phpDocumentor\Reflection\Types\Self_;

class RecipeTypeController extends Controller
{
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
    public function __construct(RecipeType $_recipeTypes = null)
    {
        $this->middleware('auth');
        $this->recipeTypes= $_recipeTypes;
    }
    public function index() {
        $listRecipeTypes= $this->recipeTypes->getAllRecipeTypes();
        return view('admin.recipeTypes.list_recipeTypes',[
            'listRecipeTypes' => $listRecipeTypes
        ],compact('listRecipeTypes'));
    }

    public function getAddRecipeTypes()
    {
        return view('admin.recipeTypes.add_recipeTypes');
    }
    public function postAddRecipeTypes(RecipeTypeRequest $request) {
        $newRecipeTypes= $this->recipeTypes->addNewRecipeTypes($request);
        if($newRecipeTypes == self::RETURN_STR_ZERO) {
            return redirect('admin/recipeTypes/add_recipeTypes')->with([
                'message' => 'Header is error',
                'class' =>'error'
            ]);;
        }
        return redirect('/admin/recipeTypes/list_recipeTypes')->with(([
            'message' => 'add successfully',
            'class' => 'success'
        ]));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getEditRecipeTypes($id)
    {
        $idRecipeTypes = $this->recipeTypes->getRecipeTypeById($id);
        return view('admin.recipeTypes.edit_recipeTypes',[
            'idRecipeTypes' => $idRecipeTypes
        ],compact('idRecipeTypes'));
    }
    public function postEditRecipeTypes(RecipeTypeRequest $request, $id) {
        $idRecipeTypes =$this->recipeTypes->updateRecipeTypes($request,$id);
        if($idRecipeTypes == self::RETURN_STR_ZERO) {
            return redirect()->back()->with([
                'message' => 'Update error',
                'class' => 'error'
            ]);
        }
        return redirect('/admin/recipeTypes/list_recipeTypes')->with([
            'message' =>'update successfully',
            'class' =>'success'
        ], compact('idRecipeTypes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function deleteRe($id)
    {
        $idRecipeTypes = $this->recipeTypes->deleteRecipeTypes($id);
        if($idRecipeTypes == self::RETURN_STR_ZERO){
            return redirect()->back()->with([
                'message' =>' delete error',
                'class' =>'error'
            ]);
        }
        return redirect('admin/recipeTypes/list_recipeTypes')->with([
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

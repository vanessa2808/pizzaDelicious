<?php

namespace App\Http\Controllers\Admin;

use App\Models\BakeryTypes;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\BakeryTypeRequest;
use phpDocumentor\Reflection\Types\Self_;

class BakeryTypeController extends Controller
{
    protected $bakeryTypes;
    protected const RETURN_NUM_ZERO = 0;
    protected const RETURN_NUM_ONE = 1;
    protected const RETURN_STR_ZERO ="0";
    protected const RETURN_STR_ONE= "1";
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(BakeryTypes $_bakeryTypes = null)
    {
        $this->middleware('auth');
        $this->bakeryTypes= $_bakeryTypes;
    }
    public function index() {
        $listBakeryTypes= $this->bakeryTypes->getAllBakeryTypes();
        return view('admin.bakeryTypes.list_bakeryTypes',[
            'listBakeryTypes' => $listBakeryTypes
        ],compact('listBakeryTypes'));
    }

    public function getAddBakeryTypes()
    {
        return view('admin.bakeryTypes.add_bakeryTypes');
    }
    public function postAddBakeryTypes(BakeryTypeRequest $request) {
        $newBakeryTypes= $this->bakeryTypes->addNewBakeryTypes($request);
        if($newBakeryTypes == self::RETURN_STR_ZERO) {
            return redirect('admin/bakeryTypes/add_bakeryTypes')->with([
                'message' => 'Header is error',
                'class' =>'error'
            ]);;
        }
        return redirect('/admin/bakeryTypes/list_bakeryTypes')->with(([
            'message' => 'add successfully',
            'class' => 'success'
        ]));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getEditBakeryTypes($id)
    {
        $idBakeryTypes = $this->bakeryTypes->getBakeryTypeById($id);
        return view('admin.bakeryTypes.edit_bakeryTypes',[
            'idBakeryTypes ' => $idBakeryTypes
        ],compact('idBakeryTypes '));
    }
    public function postEditBakeryTypes(BakeryTypeRequest $request, $id) {
        $idBakeryTypes =$this->bakeryTypes->updateBakeryTypes($request,$id);
        if($idBakeryTypes == self::RETURN_STR_ZERO) {
            return redirect()->back()->with([
                'message' => 'Update error',
                'class' => 'error'
            ]);
        }
        return redirect('/admin/bakeryTypes/list_bakeryTypes')->with([
            'message' =>'update successfully',
            'class' =>'success'
        ], compact('IdBakeryTypes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $idBakeryTypes = $this->bakeryTypes->deleteBakeryTypes($id);
        if($idBakeryTypes == self::RETURN_STR_ZERO){
            return redirect()->back()->with([
                'message' =>' delete error',
                'class' =>'error'
            ]);
        }
        return redirect('admin/bakeryTypes/list_bakeryTypes')->with([
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

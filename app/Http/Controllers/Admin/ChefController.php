<?php

namespace App\Http\Controllers\Admin;

use App\Models\Chef;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ChefRequest;
use phpDocumentor\Reflection\Types\Self_;

class ChefController extends Controller
{
    protected $chef;
    protected const RETURN_NUM_ZERO = 0;
    protected const RETURN_NUM_ONE = 1;
    protected const RETURN_STR_ZERO ="0";
    protected const RETURN_STR_ONE= "1";
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(Chef $_chef = null)
    {
        $this->middleware('auth');
        $this->chef= $_chef;
    }
    public function index() {
        $listChef= $this->chef->getAllChef();
        return view('admin.chef.list_chef',[
            'listChef' => $listChef
        ],compact('listChef'));
    }

    public function getAddChef()
    {
        return view('admin.chef.add_chef');
    }
    public function postAddChef(ChefRequest $request) {
        $newChef= $this->chef->addNewChef($request);
        if($newChef == self::RETURN_STR_ZERO) {
            return redirect('admin/chef/add_chef')->with([
                'message' => 'Header is error',
                'class' =>'error'
            ]);;
        }
        return redirect('/admin/chef/list_chef')->with(([
            'message' => 'add successfully',
            'class' => 'success'
        ]));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getEditChef($id)
    {
        $idChef = $this->chef->getChefById($id);
        return view('admin.chef.edit_chef',[
            'idChef' => $idChef
        ],compact('idChef'));
    }
    public function postEditChef(ChefRequest $request, $id) {
        $idChef =$this->chef->updateChef($request,$id);
        if($idChef == self::RETURN_STR_ZERO) {
            return redirect()->back()->with([
                'message' => 'Update error',
                'class' => 'error'
            ]);
        }
        return redirect('/admin/chef/list_chef')->with([
            'message' =>'update successfully',
            'class' =>'success'
        ], compact('idChef'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $idChef = $this->chef->deleteChef($id);
        if($idChef == self::RETURN_STR_ZERO){
            return redirect()->back()->with([
                'message' =>' delete error',
                'class' =>'error'
            ]);
        }
        return redirect('admin/chef/list_chef')->with([
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

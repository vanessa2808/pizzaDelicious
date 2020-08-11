<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\BuggerRequest;
use App\Models\Bugger;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use phpDocumentor\Reflection\Types\Self_;

class BuggerController extends Controller
{
    protected $buggers;
    protected const RETURN_NUM_ZERO = 0;
    protected const RETURN_NUM_ONE = 1;
    protected const RETURN_STR_ZERO ="0";
    protected const RETURN_STR_ONE= "1";
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(Bugger $_buggers = null)
    {
        $this->middleware('auth');
        $this->buggers= $_buggers;
    }
    public function index() {
        $listBuggers= $this->buggers->getAllBuggers();
        return view('admin.food.list_bugger',[
            'listBuggers' => $listBuggers
        ],compact('listBuggers'));
    }

    public function getAddBuggers()
    {
        return view('admin.food.add_bugger');
    }
    public function postAddBuggers(BuggerRequest $request) {
        $newBuggers= $this->buggers->addNewBuggers($request);
        if($newBuggers == self::RETURN_STR_ZERO) {
            return redirect('admin/food/add_bugger')->with([
                'message' => 'Header is error',
                'class' =>'error'
            ]);;
        }
        return redirect('/admin/food/list_bugger')->with(([
            'message' => 'add successfully',
            'class' => 'success'
        ]));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getEditbuggers($id)
    {
        $idBuggers = $this->buggers->getBuggerById($id);
        return view('admin.food.edit_buggers',[
            'idBuggers' => $idBuggers
        ],compact('idBuggers'));
    }
    public function postEditBuggers(BuggerRequest $request, $id) {
        $idBuggers =$this->buggers->updateBugger($request,$id);
        if($idBuggers == self::RETURN_STR_ZERO) {
            return redirect()->back()->with([
                'message' => 'Update error',
                'class' => 'error'
            ]);
        }
        return redirect('/admin/food/list_bugger')->with([
            'message' =>'update successfully',
            'class' =>'success'
        ], compact('idBuggers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function deleBuggers($id)
    {
        $idBuggers = $this->buggers->deleteBuggers($id);
        if($idBuggers == self::RETURN_STR_ZERO){
            return redirect()->back()->with([
                'message' =>' delete error',
                'class' =>'error'
            ]);
        }
        return redirect('admin/food/list_bugger')->with([
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

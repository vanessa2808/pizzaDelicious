<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Http\Requests\MainRequest;
use App\Models\Main;
use Illuminate\Http\Request;

class MainController extends Controller
{
    protected $main;
    protected const RETURN_NUM_ZERO = 0;
    protected const RETURN_NUM_ONE = 1;
    protected const RETURN_STR_ZERO ="0";
    protected const RETURN_STR_ONE= "1";
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(Main $_main = null)
    {
        $this->middleware('auth');
        $this->main= $_main;
    }
    public function index() {
        $listMain = $this->main->getAllMain();
        return view('admin.main.list_main',[
            'listMain' => $listMain
        ]);
    }

    public function getAddMain()
    {
        return view('admin.main.add_main');
    }
    public function postAddMain(MainRequest $request) {
        $newMain = $this->main->addNewMain($request);
        if($newMain == self::RETURN_STR_ZERO) {
            return redirect('admin/main/add_main')->with([
                'message' => 'main is error',
                'class' =>'error'
            ]);;
        }
        return redirect('/admin/main/list_main')->with(([
            'message' => 'add successfully',
            'class' => 'success'
        ]));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getEditMain($id)
    {
        $idMain = $this->main->getMainById($id);
        return view('admin.main.edit_main',[
            'idMain' => $idMain
        ]);
    }
    public function postEditMain(MainRequest $request, $id) {
        $idMain =$this->main->updateMain($request,$id);
        if($idMain == self::RETURN_STR_ZERO) {
            return redirect()->back()->with([
                'message' => 'Update error',
                'class' => 'error'
            ]);
        }
        return redirect('/admin/main/list_main')->with([
            'message' =>'update successfully',
            'class' =>'success'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $idMain = $this->main->deleteMain($id);
        if($idMain == self::RETURN_STR_ZERO){
            return redirect()->back()->with([
                'message' =>' delete error',
                'class' =>'error'
            ]);
        }
        return redirect('admin/main/list_main')->with([
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

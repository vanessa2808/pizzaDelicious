<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Http\Requests\SidebarRequest;
use App\Models\Sidebar;
use Illuminate\Http\Request;

class SidebarController extends Controller
{
    protected $sidebar;
    protected const RETURN_NUM_ZERO = 0;
    protected const RETURN_NUM_ONE = 1;
    protected const RETURN_STR_ZERO ="0";
    protected const RETURN_STR_ONE= "1";
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(Sidebar $_sidebar = null)
    {
        $this->middleware('auth');
        $this->sidebar= $_sidebar;
    }
    public function index() {
        $listSidebar = $this->sidebar->getAllSidebar();
        return view('admin.sidebar.list_sidebar',[
            'listSidebar' => $listSidebar
        ]);
    }

    public function getAddSidebar()
    {
        return view('admin.sidebar.add_sidebar');
    }
    public function postAddSidebar(SidebarRequest $request) {
        $newSidebar = $this->sidebar->addNewSidebar($request);
        if($newSidebar == self::RETURN_STR_ZERO) {
            return redirect('admin/sidebar/add_sidebar')->with([
                'message' => 'sidebar is error',
                'class' =>'error'
            ]);;
        }
        return redirect('/admin/sidebar/list_sidebar')->with(([
            'message' => 'add successfully',
            'class' => 'success'
        ]));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getEditSidebar($id)
    {
        $idSidebar = $this->sidebar->getSidebarById($id);
        return view('admin.sidebar.edit_sidebar',[
            'idSidebar' => $idSidebar
        ]);
    }
    public function postEditSidebar(SidebarRequest $request, $id) {
        $idSidebar =$this->sidebar->updateSidebar($request,$id);
        if($idSidebar == self::RETURN_STR_ZERO) {
            return redirect()->back()->with([
                'message' => 'Update error',
                'class' => 'error'
            ]);
        }
        return redirect('/admin/sidebar/list_sidebar')->with([
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
        $idSidebar = $this->sidebar->deleteSidebar($id);
        if($idSidebar == self::RETURN_STR_ZERO){
            return redirect()->back()->with([
                'message' =>' delete error',
                'class' =>'error'
            ]);
        }
        return redirect('admin/sidebar/list_sidebar')->with([
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

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\MenuRequest;
use App\Models\Menu;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use phpDocumentor\Reflection\Types\Self_;

class MenuController extends Controller
{
    protected $menu;
    protected const RETURN_NUM_ZERO = 0;
    protected const RETURN_NUM_ONE = 1;
    protected const RETURN_STR_ZERO ="0";
    protected const RETURN_STR_ONE= "1";
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(Menu $_menu = null)
    {
        $this->middleware('auth');
        $this->menu= $_menu;
    }
    public function index() {
        $listMenu= $this->menu->getAllMenu();
        return view('admin.menu.list_menu',[
            'listMenu' => $listMenu
        ],compact('listMenu'));
    }

    public function getAddMenu()
    {
        return view('admin.menu.add_menu');
    }
    public function postAddMenu(MenuRequest $request) {
        $newMenu= $this->menu->addNewMenu($request);
        if($newMenu == self::RETURN_STR_ZERO) {
            return redirect('admin/menu/add_menu')->with([
                'message' => 'Header is error',
                'class' =>'error'
            ]);;
        }
        return redirect('/admin/menu/list_menu')->with(([
            'message' => 'add successfully',
            'class' => 'success'
        ]));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getEditMenu($id)
    {
        $idMenu = $this->menu->getMenuById($id);
        return view('admin.menu.edit_menu',[
            'idMenu' => $idMenu
        ],compact('idMenu'));
    }
    public function postEditMenu(MenuRequest $request, $id) {
        $idMenu =$this->menu->updateMenu($request,$id);
        if($idMenu == self::RETURN_STR_ZERO) {
            return redirect()->back()->with([
                'message' => 'Update error',
                'class' => 'error'
            ]);
        }
        return redirect('/admin/menu/list_menu')->with([
            'message' =>'update successfully',
            'class' =>'success'
        ], compact('idMenu'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $idMenu = $this->menu->deleteMenu($id);
        if($idMenu == self::RETURN_STR_ZERO){
            return redirect()->back()->with([
                'message' =>' delete error',
                'class' =>'error'
            ]);
        }
        return redirect('admin/menu/list_menu')->with([
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

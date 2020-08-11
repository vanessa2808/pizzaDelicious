<?php

namespace App\Http\Controllers\Admin;

use App\Models\HeaderMenu;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\HeaderMenuRequest;
use phpDocumentor\Reflection\Types\Self_;

class HeaderMenuController extends Controller
{
    protected $headerMenu;
    protected const RETURN_NUM_ZERO = 0;
    protected const RETURN_NUM_ONE = 1;
    protected const RETURN_STR_ZERO ="0";
    protected const RETURN_STR_ONE= "1";
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(HeaderMenu $_headerMenu = null)
    {
        $this->middleware('auth');
        $this->headerMenu= $_headerMenu;
    }
    public function index() {
        $listHeaderMenu = $this->headerMenu->getAllHeaderMenu();
        return view('admin.header.list_headerMenu',[
            'listHeaderMenu' => $listHeaderMenu
        ],compact('listHeaderMenu'));
    }

    public function getAddHeaderMenu()
    {
        return view('admin.header.add_headerMenu');
    }
    public function postAddHeaderMenu(HeaderMenuRequest $request) {
        $newHeaderMenu = $this->headerMenu->addNewHeaderMenu($request);
        if($newHeaderMenu == self::RETURN_STR_ZERO) {
            return redirect('admin/header/add_headerMenu')->with([
                'message' => 'Header is error',
                'class' =>'error'
            ]);;
        }
        return redirect('/admin/header/list_headerMenu')->with(([
            'message' => 'add successfully',
            'class' => 'success'
        ]));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getEditHeaderMenu($id)
    {
        $idHeaderMenu = $this->headerMenu->getHeaderMenuById($id);
        return view('admin.header.edit_headerMenu',[
            'idHeaderMenu' => $idHeaderMenu
        ],compact('idHeaderMenu'));
    }
    public function postEditHeaderMenu(HeaderMenuRequest $request, $id) {
        $idHeaderMenu =$this->headerMenu->updateHeaderMenu($request,$id);
        if($idHeaderMenu == self::RETURN_STR_ZERO) {
            return redirect()->back()->with([
                'message' => 'Update error',
                'class' => 'error'
            ]);
        }
        return redirect('/admin/header/list_headerMenu')->with([
            'message' =>'update successfully',
            'class' =>'success'
        ], compact('idHeaderMenu'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function deleMenu($id)
    {
        $idHeaderMenu = $this->headerMenu->deleteHeaderMenu($id);
        if($idHeaderMenu == self::RETURN_STR_ZERO){
            return redirect()->back()->with([
                'message' =>' delete error',
                'class' =>'error'
            ]);
        }
        return redirect('admin/header/list_headerMenu')->with([
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

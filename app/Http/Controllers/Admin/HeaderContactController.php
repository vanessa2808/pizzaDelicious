<?php

namespace App\Http\Controllers\Admin;

use App\Models\HeaderContact;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\HeaderContactRequest;
use phpDocumentor\Reflection\Types\Self_;

class HeaderContactController extends Controller
{
    protected $headerContact;
    protected const RETURN_NUM_ZERO = 0;
    protected const RETURN_NUM_ONE = 1;
    protected const RETURN_STR_ZERO ="0";
    protected const RETURN_STR_ONE= "1";
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(HeaderContact $_headerContact = null)
    {
        $this->middleware('auth');
        $this->headerContact= $_headerContact;
    }
    public function index() {
        $listHeaderContact = $this->headerContact->getAllHeaderContact();
        return view('admin.header.list_headerContact',[
            'listHeaderContact' => $listHeaderContact
        ],compact('listHeaderContact'));
    }

    public function getAddHeaderContact()
    {
        return view('admin.header.add_headerContact');
    }
    public function postAddHeaderContact(HeaderContactRequest $request) {
        $newHeaderContact = $this->headerContact->addNewHeaderContact($request);
        if($newHeaderContact == self::RETURN_STR_ZERO) {
            return redirect('admin/header/add_headerContact')->with([
                'message' => 'Header is error',
                'class' =>'error'
            ]);;
        }
        return redirect('/admin/header/list_headerContact')->with(([
            'message' => 'add successfully',
            'class' => 'success'
        ]));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getEditHeaderContact($id)
    {
        $idHeaderContact = $this->headerContact->getHeaderContactById($id);
        return view('admin.header.edit_headerContact',[
            'idHeaderContact' => $idHeaderContact
        ],compact('idHeaderContact'));
    }
    public function postEditHeaderContact(HeaderContactRequest $request, $id) {
        $idHeaderContact =$this->headerContact->updateHeaderContact($request,$id);
        if($idHeaderContact == self::RETURN_STR_ZERO) {
            return redirect()->back()->with([
                'message' => 'Update error',
                'class' => 'error'
            ]);
        }
        return redirect('/admin/header/list_headerContact')->with([
            'message' =>'update successfully',
            'class' =>'success'
        ], compact('idHeaderContact'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $idHeaderContact = $this->headerContact->deleteHeaderContact($id);
        if($idHeaderContact == self::RETURN_STR_ZERO){
            return redirect()->back()->with([
                'message' =>' delete error',
                'class' =>'error'
            ]);
        }
        return redirect('admin/header/list_headerContact')->with([
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

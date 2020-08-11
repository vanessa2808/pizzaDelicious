<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\AboutRequest;
use App\Models\About;

class AboutController extends Controller
{
    protected $about;
    protected const RETURN_NUM_ZERO = 0;
    protected const RETURN_NUM_ONE = 1;
    protected const RETURN_STR_ZERO ="0";
    protected const RETURN_STR_ONE= "1";
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(About $_about = null)
    {
        $this->middleware('auth');
        $this->about= $_about;
    }
    public function index() {
        $listAbout = $this->about->getAllAbout();
        return view('admin.about.list_about',[
            'listAbout' => $listAbout
        ]);
    }

    public function getAddAbout()
    {
        return view('admin.about.add_about');
    }
    public function postAddAbout(AboutRequest $request) {
        $newAbout = $this->about->addNewAbout($request);
        if($newAbout == self::RETURN_STR_ZERO) {
            return redirect('admin/about/add_about')->with([
                'message' => 'about is error',
                'class' =>'error'
            ]);;
        }
        return redirect('/admin/about/list_about')->with(([
            'message' => 'add successfully',
            'class' => 'success'
        ]));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getEditAbout($id)
    {
        $idAbout = $this->about->getAboutById($id);
        return view('admin.about.edit_about',[
            'idAbout' => $idAbout
        ]);
    }
    public function postEditAbout(AboutRequest $request, $id) {
        $idAbout =$this->about->updateAbout($request,$id);
        if($idAbout == self::RETURN_STR_ZERO) {
            return redirect()->back()->with([
                'message' => 'Update error',
                'class' => 'error'
            ]);
        }
        return redirect('/admin/about/list_about')->with([
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
        $idAbout = $this->about->deleteAbout($id);
        if($idAbout == self::RETURN_STR_ZERO){
            return redirect()->back()->with([
                'message' =>' delete error',
                'class' =>'error'
            ]);
        }
        return redirect('admin/about/list_about')->with([
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

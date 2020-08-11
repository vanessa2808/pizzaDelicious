<?php

namespace App\Http\Controllers\Admin;

use App\Models\Image;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ImageRequest;
use phpDocumentor\Reflection\Types\Self_;

class ImageController extends Controller
{
    protected $activities;
    protected const RETURN_NUM_ZERO = 0;
    protected const RETURN_NUM_ONE = 1;
    protected const RETURN_STR_ZERO ="0";
    protected const RETURN_STR_ONE= "1";
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(Image $_image = null)
    {
        $this->middleware('auth');
        $this->image= $_image;
    }
    public function index() {
        $listImage = $this->image->getAllImage();
        return view('admin.activities.list_image',[
            'listImage' => $listImage
        ],compact('listImage'));
    }

    public function getAddImage()
    {
        return view('admin.activities.add_Image');
    }
    public function postAddImage(ImageRequest $request) {
        $newImage = $this->image->addNewImage($request);
        if($newImage == self::RETURN_STR_ZERO) {
            return redirect('admin/activities/add_image')->with([
                'message' => 'Header is error',
                'class' =>'error'
            ]);;
        }
        return redirect('/admin/activities/list_image')->with(([
            'message' => 'add successfully',
            'class' => 'success'
        ]));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getEditImage($id)
    {
        $idImage = $this->image->getImageById($id);
        return view('admin.activities.edit_image',[
            'idImage' => $idImage
        ],compact('idImage'));
    }
    public function postEditImage(ImageRequest $request, $id) {
        $idImage =$this->image->updateImage($request,$id);
        if($idImage == self::RETURN_STR_ZERO) {
            return redirect()->back()->with([
                'message' => 'Update error',
                'class' => 'error'
            ]);
        }
        return redirect('/admin/activities/list_image')->with([
            'message' =>'update successfully',
            'class' =>'success'
        ], compact('idImage'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $idImage = $this->image->deleteImage($id);
        if($idImage == self::RETURN_STR_ZERO){
            return redirect()->back()->with([
                'message' =>' delete error',
                'class' =>'error'
            ]);
        }
        return redirect('admin/activities/list_image')->with([
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

<?php

namespace App\Http\Controllers\Admin;

use App\Models\Activities;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ActivitiesRequest;
use phpDocumentor\Reflection\Types\Self_;

class ActivitiesController extends Controller
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
    public function __construct(Activities $_activities = null)
    {
        $this->middleware('auth');
        $this->activities= $_activities;
    }
    public function index() {
        $listActivities = $this->activities->getAllActivities();
        return view('admin.activities.list_activities',[
            'listActivities' => $listActivities
        ],compact('listActivities'));
    }

    public function getAddActivities()
    {
        return view('admin.activities.add_activities');
    }
    public function postAddActivities(ActivitiesRequest $request) {
        $newActivities = $this->activities->addNewActivities($request);
        if($newActivities == self::RETURN_STR_ZERO) {
            return redirect('admin/activities/add_activities')->with([
                'message' => 'Header is error',
                'class' =>'error'
            ]);;
        }
        return redirect('/admin/activities/list_activities')->with(([
            'message' => 'add successfully',
            'class' => 'success'
        ]));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getEditActivities($id)
    {
        $idActivities = $this->activities->getActivitiesById($id);
        return view('admin.activities.edit_activities',[
            'idActivities' => $idActivities
        ],compact('idActivities'));
    }
    public function postEditActivities(ActivitiesRequest $request, $id) {
        $idActivities =$this->activities->updateActivities($request,$id);
        if($idActivities == self::RETURN_STR_ZERO) {
            return redirect()->back()->with([
                'message' => 'Update error',
                'class' => 'error'
            ]);
        }
        return redirect('/admin/activities/list_activities')->with([
            'message' =>'update successfully',
            'class' =>'success'
        ], compact('idActivities'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function deleActivities($id)
    {
        $idActivities = $this->activities->deleteActivities($id);
        if($idActivities == self::RETURN_STR_ZERO){
            return redirect()->back()->with([
                'message' =>' delete error',
                'class' =>'error'
            ]);
        }
        return redirect('admin/activities/list_activities')->with([
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

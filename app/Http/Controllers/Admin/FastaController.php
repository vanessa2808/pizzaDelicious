<?php

namespace App\Http\Controllers\Admin;

use App\Models\Fasta;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\FastaRequest;
use phpDocumentor\Reflection\Types\Self_;

class FastaController extends Controller
{
    protected $fasta;
    protected const RETURN_NUM_ZERO = 0;
    protected const RETURN_NUM_ONE = 1;
    protected const RETURN_STR_ZERO ="0";
    protected const RETURN_STR_ONE= "1";
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(Fasta $_fasta = null)
    {
        $this->middleware('auth');
        $this->fasta= $_fasta;
    }
    public function index() {
        $listFasta= $this->fasta->getAllFasta();
        return view('admin.food.list_fasta',[
            'listFasta' => $listFasta
        ],compact('listFasta'));
    }

    public function getAddFasta()
    {
        return view('admin.food.add_fasta');
    }
    public function postAddFasta(FastaRequest $request) {
        $newFasta= $this->fasta->addNewFasta($request);
        if($newFasta == self::RETURN_STR_ZERO) {
            return redirect('admin/food/add_fasta')->with([
                'message' => 'Header is error',
                'class' =>'error'
            ]);;
        }
        return redirect('/admin/food/list_fasta')->with(([
            'message' => 'add successfully',
            'class' => 'success'
        ]));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getEditFasta($id)
    {
        $idFasta = $this->fasta->getFastaById($id);
        return view('admin.food.edit_fasta',[
            'idFasta' => $idFasta
        ],compact('idFasta'));
    }
    public function postEditFasta(FastaRequest $request, $id) {
        $idFasta =$this->fasta->updateFasta($request,$id);
        if($idFasta == self::RETURN_STR_ZERO) {
            return redirect()->back()->with([
                'message' => 'Update error',
                'class' => 'error'
            ]);
        }
        return redirect('/admin/food/list_fasta')->with([
            'message' =>'update successfully',
            'class' =>'success'
        ], compact('idFasta'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $idFasta = $this->fasta->deleteFasta($id);
        if($idFasta == self::RETURN_STR_ZERO){
            return redirect()->back()->with([
                'message' =>' delete error',
                'class' =>'error'
            ]);
        }
        return redirect('admin/food/list_fasta')->with([
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

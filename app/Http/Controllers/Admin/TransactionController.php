<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Transaction;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class TransactionController extends Controller
{
    
    protected $transaction;
    protected const RETURN_NUM_ZERO = 0;
    protected const RETURN_NUM_ONE = 1;
    protected const RETURN_STR_ZERO = "0";
    protected const RETURN_STR_ONE = "1";
    
    public function __construct(
        Transaction $_transaction = null
        )
    {
        $this->middleware('auth');
        $this->transaction = $_transaction;
    }
    public function index()
    {
        
        if(!empty($_GET['sort'])){
            $sort = $_GET['sort'];
            if($sort == 'thu'){
                $listTransaction = $this->transaction->where('tittle', 'thu')->get();
            }elseif($sort == 'chi'){
                $listTransaction = $this->transaction->where('tittle', 'chi')->get();
            }else{
                $listTransaction = $this->transaction->getAllTransaction();
            }
        }else{
            $listTransaction = $this->transaction->getAllTransaction();
        }
        
        return view('admin.transaction.index',[
            'listTransaction' => $listTransaction
        ]);
    }
}
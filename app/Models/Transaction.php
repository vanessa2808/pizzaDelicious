<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class Transaction extends Model
{
    protected $table = 'transaction';
    protected $fillable = ['tittle', 'amount', 'note', 'order_id', 'created_at', 'updated_at'];
    /**
     * Relation with model Orders
     *
     * @retun mix
     */
    public function order() {
        return $this->belongsTo('App\Models\Orders', 'order_id', 'id');
    }
    /**
     * Relation with model warehousing
     *
     * @retun mix
     */
    
    public function getAllTransaction() {
        $listTransaction = $this->all();
        return $listTransaction;
    }
    public function getTimeAgoAttribute() {
        return Carbon::parse($this->created_at)->diffForHumans();
    }
    public function getValueChiThisMonth() {
        $now = Carbon::now();
        $total = Transaction::select(DB::raw("SUM(ABS(amount)) as total_value"))
        ->where('tittle', 'Chi')
        ->whereMonth('created_at', $now->month)
        ->whereYear('created_at', $now->year)
        ->first();
        if (empty($total)) {
            return array('total_value' => 0);
        }
        return array('total_value' => $total->total_value);
    }
    public function getValueThuThisMonth() {
        $now = Carbon::now();
        $total = Transaction::select(DB::raw("SUM(ABS(amount)) as total_value"))
        ->where('tittle', 'Thu')
        ->whereMonth('created_at', $now->month)
        ->whereYear('created_at', $now->year)
        ->first();
        if (empty($total)) {
            return array('total_value' => 0);
        }
        return array('total_value' => $total->total_value);
    }
}
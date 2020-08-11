<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    protected $table = 'orders';
    protected $fillable = ['recipient', 'address', 'phone', 'payment_type', 'total', 'user_id', 'status_id', 'created_at', 'updated_at'];
    /**
     * Relation with model User
     *
     * @retun mix
     */
    public function users() {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }
    /**
     * Relation with model Status
     *
     * @retun mix
     */
    public function status() {
        return $this->belongsTo('App\Models\Status', 'status_id', 'id');
    }
    /**
     * Relation with model transaction
     *
     * @retun mix
     */
    public function transaction() {
        return $this->hasMany('App\Models\Transaction', 'order_id', 'id');
    }
    /**
     * Relation with model orderdetails
     *
     * @retun mix
     */
    public function OrderDetails() {
        return $this->hasMany('App\Models\OrderDetails', 'order_id', 'id');
    }
    public function getListPizzaByUserId($id) {
        return  $this->where('user_id',$id)->get();
        
    }
    public function getListOrders() {
       return  $this->all();
       
    }
    public function getOrderById($id) {
        return $this->find($id);
        
    }
}

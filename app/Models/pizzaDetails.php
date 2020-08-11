<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PizzaDetails extends Model
{
    protected $table = 'pizza_details';
    protected $fillable = ['quantity', 'pizza_id','custom_id' ,'created_at', 'updated_at'];
    protected const RETURN_STR_ZERO = "0";
    protected const RETURN_STR_ONE = "1";
    /**
     * Relation with model Orders
     *
     * @retun mix
     */
    public function orderdetail() {
        return $this->hasMany('App\Models\Orders', 'pizza_details_id', 'id');
    }
    /**
     * Relation with model Status
     *
     * @retun mix
     */
    public function pizza() {
        return $this->belongsTo('App\Models\Pizza', 'pizza_id', 'id');
    }
    public function getPizzaDetailById($id) {
        $listPizzaDetail = $this->where('pizza_id', $id)->get();
        if(empty($listPizzaDetail)){
            return self::RETURN_STR_ZERO;
        }
        return $listPizzaDetail;
    }
    public function addNewPizzaDetails($request) {
        $newPizzaDetails = new PizzaDetails();
        $newPizzaDetails->quantity = $request->quantity;
        $newPizzaDetails->pizza_id = $request->pizza_id;
        $newPizzaDetails->custom_id = $request->custom_id;

        if(! $newPizzaDetails->save()){
            return self::RETURN_STR_ZERO;
        }
        return $newPizzaDetails;
    }
    public function getStatusById($id) {
        $oPizzaDetails = $this->find($id);
        return $oPizzaDetails;
    }
}

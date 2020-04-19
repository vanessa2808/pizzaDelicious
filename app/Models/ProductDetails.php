<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductDetails extends Model
{
    protected $table = 'product_details';
    protected $fillable = ['quantity', 'pizza_id', 'beefPizza_id','vegetablePizza_id','vegetarianPizza_id', 'created_at', 'updated_at'];
    protected const RETURN_STR_ZERO = "0";
    protected const RETURN_STR_ONE = "1";
    /**
     * Relation with model Orders
     *
     * @retun mix
     */
    public function orderdetails() {
        return $this->hasMany('App\Models\Orders', 'product_detail_id', 'id');
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
        $listPizzaDetails = $this->where('pizza_id', $id)->get();
        if(empty($listPizzaDetails)){
            return self::RETURN_STR_ZERO;
        }
        return $listPizzaDetails;
    }
    public function addPizzaDetails($request) {
        $newPizzaDetails = new ProductDetails();
        $newPizzaDetails->quantity = $request->quantity;
        $newPizzaDetails->pizza_id = $request->pizza_id;
        $newPizzaDetails->beefPizza_id = $request->beefPizza_id;
        $newPizzaDetails->vegetablePizza_id = $request->vegetablePizza_id;
        $newPizzaDetails->vegetarianPizza_id = $request->vegetarianPizza_id;
        if(! $newPizzaDetails->save()){
            return self::RETURN_STR_ZERO;
        }
        return $newPizzaDetails;
    }
    public function getStatusById($id) {
        $idPizzaDetails = $this->find($id);
        return $idPizzaDetails;
    }
}

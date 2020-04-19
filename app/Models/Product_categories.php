<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
class Product_categories extends Model
{
    protected $table = 'product_categories';
    protected $fillable = ['type', 'created_at','updated_at'];
    protected const RETURN_NUM_ZERO = 0;
    protected const RETURN_NUM_ONE = 1;
    protected const RETURN_STR_ZERO = "0";
    protected const RETURN_STR_ONE = "1";
    /**
     *Relation with model product categories
     * @return mix
     */
    public function categories() {
        return $this->hasMany('App\Models\Product_categories', 'category_id', 'id');
    }
    public function getAllCategories(){
        return  $this->all();
    }
    public function addnewCategories($request) {
        $newCategories = new Product_categories();
        $newCategories->type = $request->type;
        $newCategories->created_at = Carbon::now();
        if (! $newCategories->save()) {
            return self::RETURN_STR_ZERO;
        }
        return $newCategories;
    }
    public function getCategoryId($id) {
        return $this->find($id);
    }
    public function updateProductCategories($request, $id) {
        $idCategory = $this->find($id);
        $idCategory->type = $request->type;
        $idCategory->updated_at= Carbon::now();
        if(! $idCategory->save()){
            return self::RETURN_STR_ZERO;
        }
        return $idCategory;
    }
    public function deleteCategories($id){
        $idCategory = $this->find($id);
        if(! $idCategory->destroy($id)){
            return self::RETURN_STR_ZERO;
        }
        return $idCategory;
    }


}

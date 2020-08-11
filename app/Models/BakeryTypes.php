<?php

namespace App\Models;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class BakeryTypes extends Model
{
    protected $table = 'bakeryTypes';
    protected $fillable = ['name','created_at','updated_at'];
    protected const RETURN_NUM_ZERO = 0;
    protected const RETURN_NUM_ONE = 1;
    protected const RETURN_STR_ZERO = "0";
    protected const RETURN_STR_ONE = "1";


    public function bakeryTypes() {
        return $this->belongsTo('App\Models\BakeryTypes', 'BakeryType_id', 'id');
    }


    public function getAllBakeryTypes() {
        return $this->all();
    }
    public function addNewBakeryTypes($request) {
        $newBakeryType = new BakeryTypes();
        $newBakeryType->name= $request->name;







        $newBakeryType->created_at = Carbon::now();
        if(! $newBakeryType->save()) {
            return self::RETURN_STR_ZERO;
        }
        return $newBakeryType;

    }
    public function getBakeryTypeById($id){
        return $this->find($id);
    }
    public function updateBakeryTypes($request,$id){
        $idBakeryTypes = $this->find($id);
        $idBakeryTypes->name= $request->name;






        $idBakeryTypes->updated_at = Carbon::now();
        if(! $idBakeryTypes ->save()) {
            return self::RETURN_STR_ZERO;
        }
        return $idBakeryTypes;

    }
    public function deleteBakeryTypes($id) {
        $idBakeryTypes = $this->find($id);
        if(! $idBakeryTypes->destroy($id)) {
            return self::RETURN_STR_ZERO;
        }
        return $idBakeryTypes;
    }



}

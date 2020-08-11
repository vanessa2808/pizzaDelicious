<?php

namespace App\Models;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table = 'services';
    protected $fillable = ['title','description','created_at','updated_at'];
    protected const RETURN_NUM_ZERO = 0;
    protected const RETURN_NUM_ONE = 1;
    protected const RETURN_STR_ZERO = "0";
    protected const RETURN_STR_ONE = "1";

    public function getAllServices() {
        return $this->all();
    }
    public function addNewServices($request) {
        $newServices = new Service();
        $newServices->title= $request->title;

        $newServices->description= $request->description;



        $newServices->created_at = Carbon::now();
        if(! $newServices->save()) {
            return self::RETURN_STR_ZERO;
        }
        return $newServices;

    }
    public function getServiceById($id){
        return $this->find($id);
    }
    public function updateServices($request,$id){
        $idServices = $this->find($id);
        $idServices->title= $request->title;

        $idServices->description= $request->description;



        $idServices->updated_at = Carbon::now();
        if(! $idServices ->save()) {
            return self::RETURN_STR_ZERO;
        }
        return $idServices;

    }
    public function deleteServices($id) {
        $idServices = $this->find($id);
        if(! $idServices->destroy($id)) {
            return self::RETURN_STR_ZERO;
        }
        return $idServices;
    }



}

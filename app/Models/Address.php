<?php

namespace App\Models;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $table = 'address';
    protected $fillable = ['phone','address','status','email','detail1','detail2','time','website','created_at','updated_at'];
    protected const RETURN_NUM_ZERO = 0;
    protected const RETURN_NUM_ONE = 1;
    protected const RETURN_STR_ZERO = "0";
    protected const RETURN_STR_ONE = "1";

    public function getAllAddress() {
        return $this->all();
    }
    public function addNewAddress($request) {
        $newAddress = new Address();
        $newAddress->phone= $request->phone;
        $newAddress->address= $request->address;
        $newAddress->status= $request->status;

        $newAddress->email= $request->email;
        $newAddress->detail1= $request->detail1;

        $newAddress->detail2= $request->detail2;

        $newAddress->time= $request->time;
        $newAddress->website= $request->website;

        $newAddress->created_at = Carbon::now();
        if(! $newAddress->save()) {
            return self::RETURN_STR_ZERO;
        }
        return $newAddress;

    }
    public function getAddressById($id){
        return $this->find($id);
    }
    public function updateAddress($request,$id){
        $idAddress = $this->find($id);

        $idAddress->phone= $request->phone;
        $idAddress->address= $request->address;
        $idAddress->status= $request->status;

        $idAddress->email= $request->email;
        $idAddress->detail1= $request->detail1;

        $idAddress->detail2= $request->detail2;

        $idAddress->time= $request->time;
        $idAddress->website= $request->website;



        $idAddress->updated_at = Carbon::now();
        if(! $idAddress ->save()) {
            return self::RETURN_STR_ZERO;
        }
        return $idAddress;

    }
    public function deleteAddress($id) {
        $idAddress = $this->find($id);
        if(! $idAddress->destroy($id)) {
            return self::RETURN_STR_ZERO;
        }
        return $idAddress;
    }



}

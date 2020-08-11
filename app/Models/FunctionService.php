<?php

namespace App\Models;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class FunctionService extends Model
{
    protected $table = 'numServices';
    protected $fillable = ['title','description','image','created_at','updated_at'];
    protected const RETURN_NUM_ZERO = 0;
    protected const RETURN_NUM_ONE = 1;
    protected const RETURN_STR_ZERO = "0";
    protected const RETURN_STR_ONE = "1";

    public function getAllFunctionServices() {
        return $this->all();
    }
    public function addNewFunctionServices($request) {
        $newFunctionServices = new FunctionService();
        $newFunctionServices->title= $request->title;

        $newFunctionServices->description= $request->description;




        if($request -> hasFile('image'))
        {
            $file = $request->file('image');
            $name = $file -> getClientOriginalName();
            $Hinh = str_random(4)."_".$name;
            while(file_exists('uploads/services'.$Hinh))
            {
                $Hinh = str_random(4)."_".$name;
            }
            $file->move("uploads/services", $Hinh);
            $newFunctionServices ->image= "uploads/services/".$Hinh;
        }




        $newFunctionServices->created_at = Carbon::now();
        if(! $newFunctionServices->save()) {
            return self::RETURN_STR_ZERO;
        }
        return $newFunctionServices;

    }
    public function getFunctionServiceById($id){
        return $this->find($id);
    }
    public function updateFunctionServices($request,$id){
        $idFunctionServices = $this->find($id);
        $idFunctionServices->title= $request->title;

        $idFunctionServices->description= $request->description;




        if($request -> hasFile('image'))
        {
            $file = $request->file('image');
            $name = $file -> getClientOriginalName();
            $Hinh = str_random(4)."_".$name;
            while(file_exists('uploads/services'.$Hinh))
            {
                $Hinh = str_random(4)."_".$name;
            }
            $file->move("uploads/services", $Hinh);
            $idFunctionServices ->image= "uploads/services/".$Hinh;
        }



        $idFunctionServices->updated_at = Carbon::now();
        if(! $idFunctionServices ->save()) {
            return self::RETURN_STR_ZERO;
        }
        return $idFunctionServices;

    }
    public function deleteFunctionServices($id) {
        $idFunctionServices = $this->find($id);
        if(! $idFunctionServices->destroy($id)) {
            return self::RETURN_STR_ZERO;
        }
        return $idFunctionServices;
    }



}

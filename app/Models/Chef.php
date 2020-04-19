<?php

namespace App\Models;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Chef extends Model
{
    protected $table = 'chef';
    protected $fillable = ['name','description','position','image','created_at','updated_at'];
    protected const RETURN_NUM_ZERO = 0;
    protected const RETURN_NUM_ONE = 1;
    protected const RETURN_STR_ZERO = "0";
    protected const RETURN_STR_ONE = "1";

    public function getAllChef() {
        return $this->all();
    }
    public function addNewChef($request) {
        $newChef = new Chef();
        $newChef->name= $request->name;

        $newChef->description= $request->description;
        $newChef->position= $request->position;




        if($request -> hasFile('image'))
        {
            $file = $request->file('image');
            $name = $file -> getClientOriginalName();
            $Hinh = str_random(4)."_".$name;
            while(file_exists('uploads/position'.$Hinh))
            {
                $Hinh = str_random(4)."_".$name;
            }
            $file->move("uploads/position", $Hinh);
            $newChef ->image= "uploads/position/".$Hinh;
        }




        $newChef->created_at = Carbon::now();
        if(! $newChef->save()) {
            return self::RETURN_STR_ZERO;
        }
        return $newChef;

    }
    public function getChefById($id){
        return $this->find($id);
    }
    public function updateChef($request,$id){
        $idChef = $this->find($id);
        $idChef->name= $request->name;

        $idChef->description= $request->description;
        $idChef->position= $request->position;




        if($request -> hasFile('image'))
        {
            $file = $request->file('image');
            $name = $file -> getClientOriginalName();
            $Hinh = str_random(4)."_".$name;
            while(file_exists('uploads/chef'.$Hinh))
            {
                $Hinh = str_random(4)."_".$name;
            }
            $file->move("uploads/chef", $Hinh);
            $idChef ->image= "uploads/chef/".$Hinh;
        }



        $idChef->updated_at = Carbon::now();
        if(! $idChef ->save()) {
            return self::RETURN_STR_ZERO;
        }
        return $idChef;

    }
    public function deleteChef($id) {
        $idChef = $this->find($id);
        if(! $idChef->destroy($id)) {
            return self::RETURN_STR_ZERO;
        }
        return $idChef;
    }



}

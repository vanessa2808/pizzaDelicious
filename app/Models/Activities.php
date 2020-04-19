<?php

namespace App\Models;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Activities extends Model
{
    protected $table = 'activities';
    protected $fillable = ['title','image','description','created_at','updated_at'];
    protected const RETURN_NUM_ZERO = 0;
    protected const RETURN_NUM_ONE = 1;
    protected const RETURN_STR_ZERO = "0";
    protected const RETURN_STR_ONE = "1";

    public function getAllActivities() {
        return $this->all();
    }
    public function addNewActivities($request) {
        $newActivities = new Activities();
        $newActivities->title= $request->title;
        $newActivities->description= $request->description;

        if($request -> hasFile('image'))
        {
            $file = $request->file('image');
            $name = $file -> getClientOriginalName();
            $Hinh = str_random(4)."_".$name;
            while(file_exists('uploads/header'.$Hinh))
            {
                $Hinh = str_random(4)."_".$name;
            }
            $file->move("uploads/header", $Hinh);
            $newActivities ->image= "uploads/header/".$Hinh;
        }




        $newActivities->created_at = Carbon::now();
        if(! $newActivities->save()) {
            return self::RETURN_STR_ZERO;
        }
        return $newActivities;

    }
    public function getActivitiesById($id){
        return $this->find($id);
    }
    public function updateActivities($request,$id){
        $idActivities = $this->find($id);
        if($request -> hasFile('image'))
        {
            $file = $request->file('image');
            $name = $file -> getClientOriginalName();
            $Hinh = str_random(4)."_".$name;
            while(file_exists('uploads/header'.$Hinh))
            {
                $Hinh = str_random(4)."_".$name;
            }
            $file->move("uploads/header", $Hinh);
            $idActivities ->image= "uploads/header/".$Hinh;
        }

        $idActivities->title= $request->title;
        $idActivities->description= $request->description;



        $idActivities->updated_at = Carbon::now();
        if(! $idActivities ->save()) {
            return self::RETURN_STR_ZERO;
        }
        return $idActivities;

    }
    public function deleteActivities($id) {
        $idActivities = $this->find($id);
        if(! $idActivities->destroy($id)) {
            return self::RETURN_STR_ZERO;
        }
        return $idActivities;
    }



}

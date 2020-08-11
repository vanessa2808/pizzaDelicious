<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
class Food extends Model
{
    protected $table = 'food';
    protected $fillable = ['id','name','chef','time','description','image','created_at','updated_at'];
    protected const RETURN_NUM_ZERO = 0;
    protected const RETURN_NUM_ONE = 1;
    protected const RETURN_STR_ZERO = "0";
    protected const RETURN_STR_ONE = "1";
    public function getAllFood() {
        return $this->all();
    }

    public function addNewFood($request){
        $newFood = new Food();
        $newFood->name = $request->name;
        $newFood->chef = $request->chef;
        $newFood->time = $request->time;
        $newFood->description = $request->description;

        $newFood->created_at = Carbon::now();
        if($request -> hasFile('image'))
        {
            $file = $request->file('image');
            $name = $file -> getClientOriginalName();
            $imagename = str_random(4)."_".$name;
            while(file_exists('uploads/food'.$imagename))
            {
                $imagename = str_random(4)."_".$name;
            }
            $file->move("uploads/food", $imagename);
            $newFood ->image= "uploads/food/".$imagename;
        }
        else
        {
            $newFood ->image="";
        }
        if(!$newFood->save()){
            return self::RETURN_STR_ZERO;
        }
        return $newFood;



    }
    public function deteteFood($id){
        $idFood= $this->find($id);
        if(! $idFood->destroy($id)) {
            return self::RETURN_STR_ZERO;
        }
        return $idFood;
    }
    public function getFoodById($id) {
        return $this->find($id);
    }
    public function updateFood($request, $id) {
        $idFood = $this->find($id);
        $idFood->name = $request->name;
        $idFood->chef = $request->chef;
        $idFood->time = $request->time;
        $idFood->description = $request->description;

        if($request -> hasFile('image'))
        {
            $file = $request->file('image');
            $name = $file -> getClientOriginalName();
            $imagename = str_random(4)."_".$name;
            while(file_exists('uploads/food'.$imagename))
            {
                $imagename = str_random(4)."_".$name;
            }
            $file->move("uploads/food", $imagename);
            $idFood ->image= "uploads/food/".$imagename;
        }
        else
        {
            $idFood ->image="";
        }
        $idFood->updated_at = Carbon::now();

        if(!$idFood->save()){
            return self::RETURN_STR_ZERO;
        }
        return $idFood;


    }
}

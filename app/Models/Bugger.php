<?php

namespace App\Models;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Bugger extends Model
{
    protected $table = 'buggers';
    protected $fillable = ['name','description','price','recipe','chef','time','image','created_at','updated_at'];
    protected const RETURN_NUM_ZERO = 0;
    protected const RETURN_NUM_ONE = 1;
    protected const RETURN_STR_ZERO = "0";
    protected const RETURN_STR_ONE = "1";

    public function getAllBuggers() {
        return $this->all();
    }
    public function addNewBuggers($request) {
        $newBugger = new Bugger();
        $newBugger->name= $request->name;

        $newBugger->description= $request->description;
        $newBugger->price= $request->price;
        $newBugger->recipe= $request->recipe;
        $newBugger->chef= $request->chef;
        $newBugger->time= $request->time;



        if($request -> hasFile('image'))
        {
            $file = $request->file('image');
            $name = $file -> getClientOriginalName();
            $Hinh = str_random(4)."_".$name;
            while(file_exists('uploads/buggers'.$Hinh))
            {
                $Hinh = str_random(4)."_".$name;
            }
            $file->move("uploads/buggers", $Hinh);
            $newBugger ->image= "uploads/buggers/".$Hinh;
        }




        $newBugger->created_at = Carbon::now();
        if(! $newBugger->save()) {
            return self::RETURN_STR_ZERO;
        }
        return $newBugger;

    }
    public function getBuggerById($id){
        return $this->find($id);
    }
    public function updateBugger($request,$id){
        $idBugger = $this->find($id);
        $idBugger->name= $request->name;

        $idBugger->description= $request->description;
        $idBugger->price= $request->price;
        $idBugger->recipe= $request->recipe;
        $idBugger->chef= $request->chef;
        $idBugger->time= $request->time;



        if($request -> hasFile('image'))
        {
            $file = $request->file('image');
            $name = $file -> getClientOriginalName();
            $Hinh = str_random(4)."_".$name;
            while(file_exists('uploads/buggers'.$Hinh))
            {
                $Hinh = str_random(4)."_".$name;
            }
            $file->move("uploads/buggers", $Hinh);
            $idBugger ->image= "uploads/buggers/".$Hinh;
        }



        $idBugger->updated_at = Carbon::now();
        if(! $idBugger ->save()) {
            return self::RETURN_STR_ZERO;
        }
        return $idBugger;

    }
    public function deleteBuggers($id) {
        $idBugger = $this->find($id);
        if(! $idBugger->destroy($id)) {
            return self::RETURN_STR_ZERO;
        }
        return $idBugger;
    }



}

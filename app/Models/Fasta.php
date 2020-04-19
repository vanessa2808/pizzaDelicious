<?php

namespace App\Models;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Fasta extends Model
{
    protected $table = 'fasta';
    protected $fillable = ['name','description','price','recipe','chef','time','image','created_at','updated_at'];
    protected const RETURN_NUM_ZERO = 0;
    protected const RETURN_NUM_ONE = 1;
    protected const RETURN_STR_ZERO = "0";
    protected const RETURN_STR_ONE = "1";

    public function getAllFasta() {
        return $this->all();
    }
    public function addNewFasta($request) {
        $newFasta = new Fasta();
        $newFasta->name= $request->name;

        $newFasta->description= $request->description;
        $newFasta->price= $request->price;
        $newFasta->recipe= $request->recipe;
        $newFasta->chef= $request->chef;
        $newFasta->time= $request->time;



        if($request -> hasFile('image'))
        {
            $file = $request->file('image');
            $name = $file -> getClientOriginalName();
            $Hinh = str_random(4)."_".$name;
            while(file_exists('uploads/fasta'.$Hinh))
            {
                $Hinh = str_random(4)."_".$name;
            }
            $file->move("uploads/fasta", $Hinh);
            $newFasta ->image= "uploads/fasta/".$Hinh;
        }




        $newFasta->created_at = Carbon::now();
        if(! $newFasta->save()) {
            return self::RETURN_STR_ZERO;
        }
        return $newFasta;

    }
    public function getFastaById($id){
        return $this->find($id);
    }
    public function updateFasta($request,$id){
        $idFasta = $this->find($id);
        $idFasta->name= $request->name;

        $idFasta->description= $request->description;
        $idFasta->price= $request->price;
        $idFasta->recipe= $request->recipe;
        $idFasta->chef= $request->chef;
        $idFasta->time= $request->time;



        if($request -> hasFile('image'))
        {
            $file = $request->file('image');
            $name = $file -> getClientOriginalName();
            $Hinh = str_random(4)."_".$name;
            while(file_exists('uploads/fasta'.$Hinh))
            {
                $Hinh = str_random(4)."_".$name;
            }
            $file->move("uploads/fasta", $Hinh);
            $idFasta ->image= "uploads/fasta/".$Hinh;
        }



        $idFasta->updated_at = Carbon::now();
        if(! $idFasta ->save()) {
            return self::RETURN_STR_ZERO;
        }
        return $idFasta;

    }
    public function deleteFasta($id) {
        $idFasta = $this->find($id);
        if(! $idFasta->destroy($id)) {
            return self::RETURN_STR_ZERO;
        }
        return $idFasta;
    }



}

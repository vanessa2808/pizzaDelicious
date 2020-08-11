<?php

namespace App\Models;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Sidebar extends Model
{
    protected $table = 'sidebar';
    protected $fillable = ['title','image1','image2','image3','created_at','updated_at'];
    protected const RETURN_NUM_ZERO = 0;
    protected const RETURN_NUM_ONE = 1;
    protected const RETURN_STR_ZERO = "0";
    protected const RETURN_STR_ONE = "1";

    public function getAllSidebar() {
        return $this->all();
    }
    public function addNewSidebar($request) {
        $newSidebar = new Sidebar();
        $newSidebar->title= $request->title;
        if($request -> hasFile('image1'))
        {
            $file = $request->file('image1');
            $name = $file -> getClientOriginalName();
            $Hinh = str_random(4)."_".$name;
            while(file_exists('uploads/products'.$Hinh))
            {
                $Hinh = str_random(4)."_".$name;
            }
            $file->move("uploads/products", $Hinh);
            $newSidebar ->image1= "uploads/products/".$Hinh;
        }
        if($request -> hasFile('image2'))
        {
            $file = $request->file('image2');
            $name = $file -> getClientOriginalName();
            $Hinh = str_random(4)."_".$name;
            while(file_exists('uploads/products'.$Hinh))
            {
                $Hinh = str_random(4)."_".$name;
            }
            $file->move("uploads/products", $Hinh);
            $newSidebar ->image2= "uploads/products/".$Hinh;
        }

        if($request -> hasFile('image3'))
        {
            $file = $request->file('image3');
            $name = $file -> getClientOriginalName();
            $Hinh = str_random(4)."_".$name;
            while(file_exists('uploads/products'.$Hinh))
            {
                $Hinh = str_random(4)."_".$name;
            }
            $file->move("uploads/products", $Hinh);
            $newSidebar ->image3= "uploads/products/".$Hinh;
        }

        $newSidebar->created_at = Carbon::now();
        if(! $newSidebar->save()) {
            return self::RETURN_STR_ZERO;
        }
        return $newSidebar;

    }
    public function getSidebarById($id){
        return $this->find($id);
    }
    public function updateSidebar($request,$id){
        $idSidebar = $this->find($id);
        $idSidebar->title = $request->title;
        $idSidebar->description= $request->description;
        if($request -> hasFile('image1'))
        {
            $file = $request->file('image1');
            $name = $file -> getClientOriginalName();
            $Hinh = str_random(4)."_".$name;
            while(file_exists('uploads/products'.$Hinh))
            {
                $Hinh = str_random(4)."_".$name;
            }
            $file->move("uploads/products", $Hinh);
            $idSidebar ->image1= "uploads/products/".$Hinh;
        }

        if($request -> hasFile('image2'))
        {
            $file = $request->file('image2');
            $name = $file -> getClientOriginalName();
            $Hinh = str_random(4)."_".$name;
            while(file_exists('uploads/products'.$Hinh))
            {
                $Hinh = str_random(4)."_".$name;
            }
            $file->move("uploads/products", $Hinh);
            $idSidebar ->image2= "uploads/products/".$Hinh;
        }


        if($request -> hasFile('image3'))
        {
            $file = $request->file('image3');
            $name = $file -> getClientOriginalName();
            $Hinh = str_random(4)."_".$name;
            while(file_exists('uploads/products'.$Hinh))
            {
                $Hinh = str_random(4)."_".$name;
            }
            $file->move("uploads/products", $Hinh);
            $idSidebar ->image3= "uploads/products/".$Hinh;
        }

        $idSidebar->updated_at = Carbon::now();
        if(! $idSidebar ->save()) {
            return self::RETURN_STR_ZERO;
        }
        return $idSidebar;

    }
    public function deleteSidebar($id) {
        $idSidebar = $this->find($id);
        if(! $idSidebar->destroy($id)) {
            return self::RETURN_STR_ZERO;
        }
        return $idSidebar;
    }
}

<?php

namespace App\Models;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table = 'menu';
    protected $fillable = ['name','description','price','recipe','chef','time','image','created_at','updated_at'];
    protected const RETURN_NUM_ZERO = 0;
    protected const RETURN_NUM_ONE = 1;
    protected const RETURN_STR_ZERO = "0";
    protected const RETURN_STR_ONE = "1";

    public function getAllMenu() {
        return $this->all();
    }
    public function addNewMenu($request) {
        $newMenu = new Menu();
        $newMenu->name= $request->name;

        $newMenu->description= $request->description;
        $newMenu->price= $request->price;
        $newMenu->recipe= $request->recipe;
        $newMenu->chef= $request->chef;
        $newMenu->time= $request->time;



        if($request -> hasFile('image'))
        {
            $file = $request->file('image');
            $name = $file -> getClientOriginalName();
            $Hinh = str_random(4)."_".$name;
            while(file_exists('uploads/menu'.$Hinh))
            {
                $Hinh = str_random(4)."_".$name;
            }
            $file->move("uploads/menu", $Hinh);
            $newMenu ->image= "uploads/menu/".$Hinh;
        }




        $newMenu->created_at = Carbon::now();
        if(! $newMenu->save()) {
            return self::RETURN_STR_ZERO;
        }
        return $newMenu;

    }
    public function getMenuById($id){
        return $this->find($id);
    }
    public function updateMenu($request,$id){
        $idMenu = $this->find($id);
        $idMenu->name= $request->name;

        $idMenu->description= $request->description;
        $idMenu->price= $request->price;
        $idMenu->recipe= $request->recipe;
        $idMenu->chef= $request->chef;
        $idMenu->time= $request->time;



        if($request -> hasFile('image'))
        {
            $file = $request->file('image');
            $name = $file -> getClientOriginalName();
            $Hinh = str_random(4)."_".$name;
            while(file_exists('uploads/menu'.$Hinh))
            {
                $Hinh = str_random(4)."_".$name;
            }
            $file->move("uploads/menu", $Hinh);
            $idMenu ->image= "uploads/menu/".$Hinh;
        }



        $idMenu->updated_at = Carbon::now();
        if(! $idMenu ->save()) {
            return self::RETURN_STR_ZERO;
        }
        return $idMenu;

    }
    public function deleteMenu($id) {
        $idMenu = $this->find($id);
        if(! $idMenu->destroy($id)) {
            return self::RETURN_STR_ZERO;
        }
        return $idMenu;
    }



}

<?php

namespace App\Models;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $table = 'member';
    protected $fillable = ['name','role_id','avatar','email','phone','password','created_at','updated_at'];
    protected const RETURN_NUM_ZERO = 0;
    protected const RETURN_NUM_ONE = 1;
    protected const RETURN_STR_ZERO = "0";
    protected const RETURN_STR_ONE = "1";

    public function getAllMember() {
        return $this->all();
    }
    public function addNewMember($request) {
        $newMember = new Member();
        $newMember->name = $request->name;
        $newMember->email = $request->email;
        $newMember->phone = $request->phone;
        $newMember->password = $request->password;

        $newMember->created_at = Carbon::now();
        if($request -> hasFile('avatar'))
        {
            $file = $request->file('avatar');
            $name = $file -> getClientOriginalName();
            $nameImage = str_random(4)."_".$name;
            while(file_exists('uploads/member'.$nameImage))
            {
                $nameImage = str_random(4)."_".$name;
            }
            $file->move("uploads/member", $nameImage);
            $newMember ->image= "uploads/member/".$nameImage;
        }
        else
        {
            $newMember ->avatar="";
        }
        if(!$newMember->save()){
            return self::RETURN_STR_ZERO;
        }
        return $newMember;

    }
    public function getMemberById($id){
        return $this->find($id);
    }

}

<?php

namespace App;

use App\Models\pizzaDetails;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable
{
    use Notifiable;
    public const ROLE_ADMIN = 0;
    public const ROLE_USER =1;
    protected const RETURN_NUM_ZERO = 0;
    protected const RETURN_NUM_ONE = 1;
    protected const RETURN_STR_ZERO = "0";
    protected const RETURN_STR_ONE = "1";
    protected $table= 'users';


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'role_id','name', 'phone','dateofbirth','address',  'email', 'password'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'dateofbirth' => 'date',
    ];
    public function orders(){
        return $this->hasMany('App\Models\Orders', 'user_id','id');
    }
    public function getAllUsers() {
        return $this->all();
    }
    public function posts(){
               return $this->hasMany(pizzaDetails::class);
    }
    public function comments()
	    {
	        return $this->hasMany('App\Models\Comment');
	    }

    public function addNewUsers($request) {
        $newUsers = new User();

        $newUsers->role_id = $request->role_id;
        $newUsers->name = $request->name;
        $newUsers->phone = $request->phone;

        $newUsers->dateofbirth = $request->dateofbirth;
        $newUsers->address = $request->address;
        $newUsers->email = $request->email;
        $newUsers->password = $request->password;
        $newUsers->created_at = Carbon::now();

        if(! $newUsers->save()) {
            return self::RETURN_STR_ZERO;
        }
        return $newUsers;
    }
    public function getUserById($id) {
        return $this->find($id);
    }
    public function updateUser($request, $id) {
        $idUser = $this->find($id);
        $idUser->role_id = $request->role_id;
        $idUser->name = $request->name;
        $idUser->phone = $request->phone;
        $idUser->dateofbirth = $request->dateofbirth;
        $idUser->dateofbirth = $request->dateofbirth;
        $idUser->address = $request->address;
        $idUser->email = $request->email;
        $idUser->password = $request->password;
        $idUser->created_at = Carbon::now();

        if(! $idUser->save()) {
            return self::RETURN_STR_ZERO;
        }
        return $idUser;

    }
    public  function deleteUser($id){
        $idUser = $this->find($id);
        if(! $idUser->destroy($id)) {
            return self::RETURN_STR_ZERO;
        }
        return $idUser;
    }








}

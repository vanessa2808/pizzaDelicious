<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Facades\Alert;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\User;

class UserController extends Controller
{
    protected $users;

    public function __construct(User $_users = null)
    {
        $this->middleware('auth');
        $this->users = $_users;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listUsers =$this->users->getAllUsers();
        return view('admin.users.list_users',[
            'listUsers' => $listUsers
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getAdd()
    {
        return view('admin.users.add_users');

    }
    public function postAdd(UserRequest $request){
        $newUsers = $this->users->addNewUsers($request);
        if($newUsers == self::RETURN_STR_ZERO){
            return redirect('admin/users/add_users');
        }

        return redirect('admin/users/list_users');
        alert()->success('Post Created', 'Successfully'); // hoặc có thể dùng alert('Post Created','Successfully', 'success');

    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getEdit($id)
    {
        $idUsers = $this->users->getUserById($id);
        return view('admin.users.edit_users',[
            'idUsers' => $idUsers
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function postEdit(UserRequest $request, $id)
    {
        $idUsers = $this->users->updateUser($request,$id);
        if($idUsers == self::RETURN_STR_ZERO) {
            return redirect()->back();
        }
        return redirect('/admin/users/list_users');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $idUsers = $this->users->deleteUser($id);
        if($idUsers == self::RETURN_STR_ZERO){

            return redirect()->back();
        }


        return redirect('admin/users/list_users');
    }
}

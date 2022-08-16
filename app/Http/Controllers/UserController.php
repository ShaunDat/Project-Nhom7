<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    public function index()
    {

        $users=User::all();
        return view('Admin/userList', compact("users"));
    }

    public function getAllUser(){
        $users=User::paginate(10);
        return view('Admin/userList',compact("users"));
    }

    public function getUser()
    {
        return view('Admin/createUser');
    }

    public function getEditUser($id){
        $data['users'] = User::find($id);
       return view('Admin/editUser',$data);

    }


    public function postEditUser(Request $request,$id) 

    { 

        $users = User::find($id); 
        $users->name = $request->name; 
        $users->email = $request->email; 
        $users->save(); 

    return redirect()->route('Admin/userList'); 

} 

 public function delete($id)
    {
        $users = User::find($id);
        $users->delete();
        return back();
    }
}
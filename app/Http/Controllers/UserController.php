<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Gate;

class UserController extends Controller
{
    public function index(){
        $users = User::all();
        return view('manageuser',['users' => $users]);
    }

    public function add(){
        return view('createuser');
    }

    public function create(Request $request){
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'roles' => $request->roles
        ]);
        return redirect()->route('manageuser');
    }

    public function edit($id){
        $users = User::find($id);
        return view('edituser',['users'=>$users]);
    }

    public function update($id, Request $request){
        $users = User::find($id);

        $users->name = $request->name;
        $users->email = $request->email;
        $users->password = $request->password;
        $users->roles = $request->roles;

        $users->save();

        return redirect()->route('manageuser');
    }

    public function delete($id){
        $users = User::find($id);
        $users->delete();

        return redirect()->route('manageuser');
    }

}

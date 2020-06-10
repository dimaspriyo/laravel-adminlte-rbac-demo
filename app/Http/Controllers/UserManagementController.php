<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class UserManagementController extends Controller
{
    //
    public function create(Request $request)
    {
        $roles = \Spatie\Permission\Models\Role::all();
        return view('adminlte/pages/usermanagement/create',['roles' => $roles]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'password' => 'required',
            'email' => 'required',
            'role' => 'required'
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        if($user->save()){
            $createdUser = User::find($user->id);
            $createdUser->assignRole($request->role);
        }

        $request->session()->flash('success','Insert User Successful');
        return redirect()->route('user.list');

    }

    public function delete(Request $request)
    {
        $user = User::find($request->id);
        if($user->delete()){
            $request->session()->flash('success','Delete User Successful');
            return redirect()->route('user.list');
        }else{
            $request->session()->flash('failed','Delete User Failed');
            return redirect()->route('user.list');
        }
    }

    public function list()
    {
        $user = User::all();
        return view('adminlte/pages/usermanagement/list',['data' => $user]);
    }
}

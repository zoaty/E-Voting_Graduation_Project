<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;

class UserController extends Controller
{

    public function index(User $user){
        
        $users = User::all();

        return view('users.index', ['users'=>$users]);
    }

    public function show(User $user){
        
        return view('users.profile', ['user'=>$user, 'roles'=>Role::all()]);
    }

    public function update(User $user){
        
        $inputs = request()->validate([
            'name'=> ['required', 'string', 'max:255'],
            'email'=> ['required', 'email', 'max:255'],
            'avatar'=> ['file'],
            //'password'=> ['min:6', 'max:255', 'confirmed'],
        ]);

        $user->update($inputs);



        if(request('avatar')){
            $inputs['avatar'] = request('avatar')->store('images');
        }

        return back();
    }

    public function attach(User $user){
        $user->roles()->attach(request('role'));
        return back();
    }

    public function detach(User $user){
        $user->roles()->detach(request('role'));
        return back();
    }
}


<?php

namespace App\Http\Controllers;

use App\Role;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $r)
    {
        $users= User::all();
        return view('users.index',['users'=> $users]);
    }
    public function create()
    {
        $roles= Role::all();
        return view('users.create',['roles'=>$roles]);
    }
    public function store(Request $r)
    {
        $inputs = $r->all();
        $user= new User(['name'=> $inputs['name'],
            'role_id'=> $inputs['rol'],
            'email'=> $inputs['email'],
            'password'=> $inputs['password']
        ]);

        $user->save();
        return redirect('/users');
    }
    public function edit($id)
    {
        $roles= Role::all();
        $user = User::find($id);
        return view('users.edit', ['user'=>$user,'roles'=>$roles]);
    }
    public function update($id, Request $r)
    {
        $inputs = $r->all();

        $user = User::find($id);
        $role = Role::find($inputs['roles']);
        if($role==null)
        {
            $role = 2;
        }
        $user->role()->associate($role);
        $user->name = $inputs['name'];
           $user->save();

        return redirect('/users');
    }
    public function destroy($id)
    {
        $users = User::find($id);
        $users->delete();
        return redirect('/users');
    }
}

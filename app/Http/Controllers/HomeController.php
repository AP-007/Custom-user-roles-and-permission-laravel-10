<?php

namespace App\Http\Controllers;

use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function dashboard()
    {
        $user = Auth::user();
    // $role = Role::where('slug', 'admin')->first();
    // $user->roles()->attach($role);
    // dd($user->roles);

    //$permission= Permission::first();
    //$user->permissions()->attach($permission);
    // dd($user->hasRole('admin'));
        return view('dashboard');
    }
}
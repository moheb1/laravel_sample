<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Spatie\Permission\Models\Role;


use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    
    public function dashboard()
    {
        
//         $user=Auth::user();
//         // Adding permissions to a user
// $user->givePermissionTo('edit articles');

// // Adding permissions via a role
// $user->assignRole('writer');

// $role = Role::findByName('writer');

// $role->givePermissionTo('edit articles');
        $user = \Auth::user();
        return view('admin.dashboard', compact('user'));
    }

    public function logout(){
         Auth::logout();
        return redirect('/');
    }
}

<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    function index(){
        $auth = Auth::check();
        if ($auth){
            $role = Auth::user()->role;
            $name = Auth::user()->name;
        }
        $users = User::where('id', Auth::user()->id)->firstOrFail();
        return view('profile', ['auth' => $auth, 'role' => $role, 'name' => $name, 'users' => $users]);
    }

    function update(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
        ]);

        User::where('id', $request->id)->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
        ]);

        return redirect()->back();
    }
}

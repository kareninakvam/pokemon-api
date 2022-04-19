<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use Illuminate\Support\Facades\Hash;

class UserController extends Controller

{

    
    public function edit(){
        $user = auth()->user();
        return view('profile.updateUser', ['user' => $user]);
    }

    public function update(Request $request){
        $password= Hash::make($request->password);
        $user = User::findOrFail($request->id);
        $user->name = $request->name;
        $user->password = $password;
        $user->update();
        return redirect ('/');
    }
}



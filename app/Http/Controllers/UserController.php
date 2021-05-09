<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;


use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index(){
        $users = User::orderBy('id','desc')->paginate();



        return view('user.index', compact('users'));
    }

    public function edit(){


    }

    public function update(){

    }

    public function show(User $user){

        return view('user.show',['user' => $user]);
    }

    public function destroy(User $user){
        $user->delete();

        return redirect()->route('user.index');

    }
}

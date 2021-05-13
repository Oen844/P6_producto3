<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;


use Illuminate\Support\Facades\Auth;

class UserController extends Controller


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

    public function index(){
        $users = User::orderBy('id','desc')->paginate();



        return view('user.index', compact('users'));
    }

    public function edit(User $user){
        return view('user.edit',compact('user'));

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

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Illuminate\Support\Facades\Hash;



class UserController extends Controller
{
    //
    //
    function login(Request $req){
        $user =  User::where(['email'=> $req->email])->first();
        if(!$user || !Hash::check($req->password, $user->password)){
            return redirect('account/form/login')->with('error','Invalide Creadentials');
        }else{
            $req->session()->put('user', $user);
            return redirect('account')->with('success','Login Success');;
        }
    }

    function login_form(){
        return view('admin.login');
    }

    function logout(Request $request) {
        session()->forget('user');
        session()->flush();
        return redirect('account/form/login');


        Auth::logout();
        return redirect('account/form/login')->with('success','Signout');;
    }
}

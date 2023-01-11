<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;


class HomeController extends Controller
{
    //
    function index(){
        if(session::has('user')){
            return view('admin.index');
        }
        else{
            return redirect('account/form/login');
        }
    }

    function home(){
        return view('frontend.index');
    }

    function about(){
        return view('frontend.about');
    }

    function contact(){
        return view('frontend.contact');
    }
}

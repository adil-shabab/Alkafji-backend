<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;


class HomeController extends Controller
{
    //
    function index(){
        if(session::has('user')){
            // $messages =Contact::count();
            // $projects =Projects::count();
            // $gallery =Gallery::count();
            // $threed =Threed::count();
            // $interior =Interiorthreed::count();
            // return view('admin.index', compact('gallery', 'messages', 'threed', 'projects', 'interior'));
            return view('admin.index');
        }
        else{
            return redirect('account/form/login');
        }

    }
}

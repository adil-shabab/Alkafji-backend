<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Models\Contact;
use App\Models\Paper;
use App\Models\Plastic;
use App\Models\Foam;
use App\Models\Protection;
use App\Models\Aluminium;
use App\Models\Food;
use App\Models\Best;


class HomeController extends Controller
{
    //
    function index(){
        if(session::has('user')){
            $paper =Paper::count();
            $plastic =Plastic::count();
            $protection =Protection::count();
            $foam = Foam::count();
            $aluminium = Aluminium::count();
            $contact = Contact::count();
            $food = Food::count();
            return view('admin.index', compact('paper', 'aluminium', 'plastic', 'contact', 'foam', 'food', 'protection'));
        }
        else{
            return redirect('account/form/login');
        }
    }

    function home(){
        $product= Best::all();
        return view('frontend.index', compact('product'));
    }

    function about(){
        return view('frontend.about');
    }

    function contact(){
        return view('frontend.contact');
    }

    function paper(){
        $product= Paper::all();
        return view('frontend.paper', compact('product'));
    }
    function plastic(){
        $product= Plastic::all();
        return view('frontend.plastic', compact('product'));
    }
    function aluminium(){
        $product= Aluminium::all();
        return view('frontend.aluminium', compact('product'));
    }
    function foam(){
        $product= Foam::all();
        return view('frontend.foam', compact('product'));
    }
    function food(){
        $product= Food::all();
        return view('frontend.food', compact('product'));
    }
    function protection(){
        $product= Protection::all();
        return view('frontend.protection', compact('product'));
    }

}

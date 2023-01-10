<?php

namespace App\Http\Controllers;

use App\Models\Plastic;
use Session;
use Illuminate\Http\Request;

class PlasticController extends Controller
{
    //
      //
      public function index(){
        if(Session::has('user')){
            $plastic= Plastic::all();
            return view('admin.plastic', compact('plastic'));
        }
        else{
            return redirect('account/form/login');
        }

    }


    public function store(Request $request)
    {
        if(Session::has('user')){
            $plastic = new Plastic;
            if($request->hasfile('image'))
            {
                $file = $request->file('image');
                $extenstion = $file->getClientOriginalExtension();
                $filename = time().'.'.$extenstion;
                $file->move('uploads/Plastic/', $filename);
                $plastic->image = $filename;
            }
            $plastic->title = $request->title;

            $plastic->save();
            return redirect('account/plastic')->with('success','Plastic Product Added Successfully');
        }
        else{
            return redirect('account/form/login');
        }
    }


    public function plastic_form(){
        if(Session::has('user')){
            return view('admin.plastic-form');
        }
        else{
            return redirect('account/form/login');
        }

    }

    public function destroy($id){
        if(Session::has('user')){
            $plastic = Plastic::find($id);
            $plastic->delete();
            return redirect('account/plastic')->with('success','Plastic Product Deleted Successfully');
        }
        else{
            return redirect('account/form/login');
        }
    }

}

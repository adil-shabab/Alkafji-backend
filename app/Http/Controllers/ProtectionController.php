<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Protection;
use Session;

class ProtectionController extends Controller
{
    //
    public function index(){
        if(Session::has('user')){
            $protection= Protection::all();
            return view('admin.protection', compact('protection'));
        }
        else{
            return redirect('account/form/login');
        }

    }


    public function store(Request $request)
    {
        if(Session::has('user')){
            $protection = new Protection;
            if($request->hasfile('image'))
            {
                $file = $request->file('image');
                $extenstion = $file->getClientOriginalExtension();
                $filename = time().'.'.$extenstion;
                $file->move('uploads/Protection/', $filename);
                $protection->image = $filename;
            }
            $protection->title = $request->title;

            $protection->save();
            return redirect('account/protection')->with('success','Hygiene and Protection Product Added Successfully');
        }
        else{
            return redirect('account/form/login');
        }
    }


    public function protection_form(){
        if(Session::has('user')){
            return view('admin.protection-form');
        }
        else{
            return redirect('account/form/login');
        }

    }

    public function destroy($id){
        if(Session::has('user')){
            $protection = Protection::find($id);
            $protection->delete();
            return redirect('account/protection')->with('success','Hygiene and Protection Product Deleted Successfully');
        }
        else{
            return redirect('account/form/login');
        }
    }

}

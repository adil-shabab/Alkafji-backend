<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Best;
use Session;

class BestController extends Controller
{
    //
    public function index(){
        if(Session::has('user')){
            $best= Best::all();
            return view('admin.best', compact('best'));
        }
        else{
            return redirect('account/form/login');
        }

    }


    public function store(Request $request)
    {
        if(Session::has('user')){
            $best = new Best;
            if($request->hasfile('image'))
            {
                $file = $request->file('image');
                $extenstion = $file->getClientOriginalExtension();
                $filename = time().'.'.$extenstion;
                $file->move('uploads/Best/', $filename);
                $best->image = $filename;
            }
            $best->title = $request->title;

            $best->save();
            return redirect('account/popular-products')->with('success','Popular Product Added Successfully');
        }
        else{
            return redirect('account/form/login');
        }
    }


    public function best_form(){
        if(Session::has('user')){
            return view('admin.best-form');
        }
        else{
            return redirect('account/form/login');
        }

    }

    public function destroy($id){
        if(Session::has('user')){
            $best = Best::find($id);
            $best->delete();
            return redirect('account/popular-products')->with('success','Popular Product Deleted Successfully');
        }
        else{
            return redirect('account/form/login');
        }
    }
}

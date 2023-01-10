<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paper;
use Session;

class PaperController extends Controller
{
    //
    public function index(){
        if(Session::has('user')){
            $paper= Paper::all();
            return view('admin.paper', compact('paper'));
        }
        else{
            return redirect('account/form/login');
        }

    }


    public function store(Request $request)
    {
        if(Session::has('user')){
            $paper = new Paper;
            if($request->hasfile('image'))
            {
                $file = $request->file('image');
                $extenstion = $file->getClientOriginalExtension();
                $filename = time().'.'.$extenstion;
                $file->move('uploads/Paper/', $filename);
                $paper->image = $filename;
            }
            $paper->title = $request->title;

            $paper->save();
            return redirect('account/paper')->with('success','Paper Product Added Successfully');
        }
        else{
            return redirect('account/form/login');
        }
    }


    public function paper_form(){
        if(Session::has('user')){
            return view('admin.paper-form');
        }
        else{
            return redirect('account/form/login');
        }

    }

    public function destroy($id){
        if(Session::has('user')){
            $paper = Paper::find($id);
            $paper->delete();
            return redirect('account/paper')->with('success','Paper Product Deleted Successfully');
        }
        else{
            return redirect('account/form/login');
        }
    }
}

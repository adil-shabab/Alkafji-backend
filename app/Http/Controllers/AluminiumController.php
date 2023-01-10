<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Aluminium;
use Session;

class AluminiumController extends Controller
{
    //
    public function index(){
        if(Session::has('user')){
            $aluminium= Aluminium::all();
            return view('admin.aluminium', compact('aluminium'));
        }
        else{
            return redirect('account/form/login');
        }

    }


    public function store(Request $request)
    {
        if(Session::has('user')){
            $aluminium = new Aluminium;
            if($request->hasfile('image'))
            {
                $file = $request->file('image');
                $extenstion = $file->getClientOriginalExtension();
                $filename = time().'.'.$extenstion;
                $file->move('uploads/Aluminium/', $filename);
                $aluminium->image = $filename;
            }
            $aluminium->title = $request->title;

            $aluminium->save();
            return redirect('account/aluminium')->with('success','Aluminium Product Added Successfully');
        }
        else{
            return redirect('account/form/login');
        }
    }


    public function aluminium_form(){
        if(Session::has('user')){
            return view('admin.aluminium-form');
        }
        else{
            return redirect('account/form/login');
        }

    }

    public function destroy($id){
        if(Session::has('user')){
            $aluminium = Aluminium::find($id);
            $aluminium->delete();
            return redirect('account/aluminium')->with('success','Aluminium Product Deleted Successfully');
        }
        else{
            return redirect('account/form/login');
        }
    }
}

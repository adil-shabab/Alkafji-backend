<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Foam;
use Session;


class FoamController extends Controller
{
    //
    public function index(){
        if(Session::has('user')){
            $foam= Foam::all();
            return view('admin.foam', compact('foam'));
        }
        else{
            return redirect('account/form/login');
        }

    }


    public function store(Request $request)
    {
        if(Session::has('user')){
            $foam = new Foam;
            if($request->hasfile('image'))
            {
                $file = $request->file('image');
                $extenstion = $file->getClientOriginalExtension();
                $filename = time().'.'.$extenstion;
                $file->move('uploads/Foam/', $filename);
                $foam->image = $filename;
            }
            $foam->title = $request->title;

            $foam->save();
            return redirect('account/foam')->with('success','Foam Product Added Successfully');
        }
        else{
            return redirect('account/form/login');
        }
    }


    public function foam_form(){
        if(Session::has('user')){
            return view('admin.foam-form');
        }
        else{
            return redirect('account/form/login');
        }

    }

    public function destroy($id){
        if(Session::has('user')){
            $foam = Foam::find($id);
            $foam->delete();
            return redirect('account/foam')->with('success','Foam Product Deleted Successfully');
        }
        else{
            return redirect('account/form/login');
        }
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Food;
use Session;


class FoodController extends Controller
{
    //
    public function index(){
        if(Session::has('user')){
            $food= Food::all();
            return view('admin.food', compact('food'));
        }
        else{
            return redirect('account/form/login');
        }

    }


    public function store(Request $request)
    {
        if(Session::has('user')){
            $food = new Food;
            if($request->hasfile('image'))
            {
                $file = $request->file('image');
                $extenstion = $file->getClientOriginalExtension();
                $filename = time().'.'.$extenstion;
                $file->move('uploads/Food/', $filename);
                $food->image = $filename;
            }
            $food->title = $request->title;

            $food->save();
            return redirect('account/food')->with('success','Food Product Added Successfully');
        }
        else{
            return redirect('account/form/login');
        }
    }


    public function food_form(){
        if(Session::has('user')){
            return view('admin.food-form');
        }
        else{
            return redirect('account/form/login');
        }

    }

    public function destroy($id){
        if(Session::has('user')){
            $food = Food::find($id);
            $food->delete();
            return redirect('account/food')->with('success','Food Product Deleted Successfully');
        }
        else{
            return redirect('account/form/login');
        }
    }
}

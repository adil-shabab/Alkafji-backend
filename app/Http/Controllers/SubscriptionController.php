<?php

namespace App\Http\Controllers;
use App\Models\Subscription;
use Illuminate\Http\Request;
use Session;



class SubscriptionController extends Controller
{
    //

    public function index(){
        if(Session::has('user')){
            $subscription= Subscription::all();
            return view('admin.subscription', compact('subscription'));
        }
        else{
            return redirect('account/form/login');
        }

    }


    public function store(Request $request)
    {
        $subscription = new Subscription;

            $subscription->email = $request->email;
            $subscription->name = $request->name;

            $subscription->save();
            return redirect('/')->with('success','Subscription Added Successfully');
    }



    public function destroy($id){
        if(Session::has('user')){
            $subscription = Subscription::find($id);
            $subscription->delete();
            return redirect('account/subscription')->with('success','Subscription Deleted Successfully');
        }
        else{
            return redirect('account/form/login');
        }
    }
}

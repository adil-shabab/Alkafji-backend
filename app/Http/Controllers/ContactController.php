<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    //
    public function store(Request $request)
    {
        $contact = new Contact;
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->number = $request->number;
        $contact->content = $request->content;
        $contact->save();
        return redirect('contact')->with('success','Message Sent Successfully');
    }

    public function messages(){
        $messages= Contact::all();
        return view('admin.messages',compact('messages'));
    }

    public function message_form(){
        return view('admin.message-form');
    }

    public function destroy($id){
        $message = Contact::find($id);
        $message->delete();
        return redirect('account/messages')->with('success','Message Deleted Successfully');
    }
}

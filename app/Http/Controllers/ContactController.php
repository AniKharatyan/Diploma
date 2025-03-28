<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function contacts()
    {
        $contacts = contact::all();
        return view('contact.contacts',compact('contacts'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'fname' => 'required',
            'lname' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        $contact = new Contact();
        $contact->fname = $request->input('fname');
        $contact->lname = $request->input('lname');
        $contact->email = $request->input('email');
        $contact->subject = $request->input('subject');
        $contact->message = $request->input('message');
        $contact->save();

        return view('user.home');
    }

    public function delete(string $id)
    {
        $message = Contact::find($id);
        $message->delete();
        return redirect()->back();
    }
}

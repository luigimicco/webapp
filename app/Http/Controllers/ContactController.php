<?php

namespace App\Http\Controllers;

use App\Mail\SendNewMail;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact.contact');
    }

    public function send(Request $request)
    {

        $request->validate([
            'name' => 'required|max:255',
            'email' =>'required|max:255',
            'message' => 'required',
        ], [
            'required' => 'Il campo è obbligatorio',
        ]);

        $form_data = $request->all();
        $new_contact = new Contact();
        $new_contact->fill($form_data);
        $new_contact->save();

        Mail::to($new_contact->email)->send(new SendNewMail($new_contact));
        
        return redirect()->route('contact')->with('alert', 'success')->with('alert-message', "Messaggio inviato con successo");
    }
}

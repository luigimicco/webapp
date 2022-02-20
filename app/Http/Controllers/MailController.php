<?php

namespace App\Http\Controllers;

use App\Mail\SendNewMail;
use App\Models\Lead;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function index()
    {
        return view('contact.contact');
    }

    public function send(Request $request)
    {
        $form_data = $request->all();
        $new_lead = new Lead();
        $new_lead->fill($form_data);
        $new_lead->save();

        Mail::to($new_lead->email)->send(new SendNewMail($new_lead));
        return redirect()->route('contact.contact');
    }
}

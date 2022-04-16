<?php

namespace App\Http\Controllers\Api;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Mail\SendNewMail;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    /**
     * Send an email from the website form.
     *
     * @param  Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        // # Validazione
        $validator = Validator::make(
            $data,
            [
                'name' => 'required',
                'subject' => 'required',
                'email' => 'required|email',
                'message' => 'required'
            ],
            [
                'name.required' => 'Il nome è obbligatorio.',
                'subject.required' => 'L\'oggetto è obbligatorio.',
                'email.required' => 'La mail è obbligatoria.',
                'email.email' => 'L\'indirizzo email non è valido.',
                'message.required' => 'Il testo del messaggio è obbligatorio.'
            ]
        );

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()]);
        };

        $contact = new Contact();
        $contact->fill($data);
        $contact->save();

        $mail = new SendNewMail($data);
        Mail::to(env('MAIL_ADMIN_ADDRESS'))->send($mail); // MAIL_ADMIN_ADDRESS è stata aggiunta nel file ENV

        return response('Mail sent successfully', 204); // o return response('Mail received', 201)
    }
}

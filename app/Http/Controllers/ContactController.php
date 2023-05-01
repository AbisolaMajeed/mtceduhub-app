<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Mail\SendContactEmail;
use App\Mail\SendContactAdminEmail;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\ContactFormRequest;

class ContactController extends Controller
{
    public function index()
    {
        return view('pages.contact');
    }

    public function mailContactForm(ContactFormRequest $request)
    {   
        $data = array(
            'name' => $request->name,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'msg_subject' => $request->msg_subject,
            'message'   =>   $request->message
        );

        Mail::to($request->email)->send(new SendContactEmail($data));
        Mail::to('info@mtceduhub.com')->send(new SendContactAdminEmail($data));

        //Store data in database
        Contact::create($data);

        return response()->json(['success'=>'Successful!']);
    }
}

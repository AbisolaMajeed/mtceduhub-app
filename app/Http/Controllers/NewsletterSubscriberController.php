<?php

namespace App\Http\Controllers;

use App\Models\NewsletterSubscriber;
use App\Mail\SendNewsletterSubscriberEmail;
use App\Mail\SendNewsletterSubscriberAdminEmail;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\NewsletterSubscriberRequest;

class NewsletterSubscriberController extends Controller
{
    public function mailNewletterSubscriberForm (NewsletterSubscriberRequest $request)
    {
        $data = array(
            'email' => $request->email,
        );

        Mail::to($request->email)->send(new SendNewsletterSubscriberEmail($data));
        Mail::to('info@mtceduhub.com')->send(new SendNewsletterSubscriberAdminEmail($data));

        //Store data in database
        NewsletterSubscriber::create($data);

        return response()->json(['success'=>'Successful!']);
    }
}

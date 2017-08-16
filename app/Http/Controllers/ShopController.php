<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactMeRequest;
use Mail;
use App\Mail\ContactMail;

class ShopController extends Controller
{
    /**
    * Show the form
    *
    * @return View
    */
    public function showCart()
    {
        return view('shop.cart');
    }

    /**
    * Email the contact request
    *
    * @param ContactMeRequest $request
    * @return Redirect
    */
    public function sendContactInfo(ContactMeRequest $request)
    {
        $data = $request->only('name', 'email', 'phone');
        $data['messageLines'] = explode("\n", $request->get('message'));

        Mail::to($data['email'])->queue(new ContactMail($data)); // this for queueing sender
        // Mail::to($data['email'])->send(new ContactMail($data)); // this for manually sender

        return back()
            ->withSuccess("Thank you for your message. It has been sent.");
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactMeRequest;
use App\Http\Requests\ContactMessageCreateRequest;
use Mail;
use App\Model\ContactMessage;
use App\Model\ContactInfo;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    /**
    * Show the form
    *
    * @return View
    */
    public function showForm()
    {
        $contact = ContactInfo::all();
        return view('contact.contact', compact('contact'));
    }

    /**
    * Store message from contact
    */
    public function sendMessage(ContactMessageCreateRequest $request)
    {
        $data = array_merge(['is_blocked' => false], $request->all());
        ContactMessage::create($data);
        return redirect()->route('contact')
            ->withSuccess('Pesan Anda berhasil dikirim.');
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

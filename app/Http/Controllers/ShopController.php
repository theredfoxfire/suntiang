<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactMeRequest;
use Mail;
use App\Model\Carts;
use App\Model\CartAdditional;
use App\Mail\ContactMail;

class ShopController extends Controller
{
    /**
    * Show the form
    *
    * @return View
    */
    public function addCart(Request $request)
    {
        $sessionID = $request->cookie('sessionID');
        $data = array_merge($request->all(), ['session_id' => $sessionID]);
        unset($data['condiments']); unset($data['drink']);
        $cart = Carts::create($data);
        $additional = array('cart_id' => $cart->id, 'item_id' => $request->all()['condiments']);
        CartAdditional::create($additional);

        return redirect()->route('cart')
                        ->withSuccess("Item berhasil ditambahkan ke dalam cart.");
    }
    /**
    * Show the form
    *
    * @return View
    */
    public function showCart(Request $request)
    {
        $sessionID = $request->cookie('sessionID');
        $cart = Carts::getCarts($sessionID);

        return view('shop.cart', compact('cart'));
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

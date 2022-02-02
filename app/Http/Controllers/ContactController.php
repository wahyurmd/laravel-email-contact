<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Mail;
use Alert;

class ContactController extends Controller {

    public function index() {
        return view( 'contact_form' );
    }

    public function contactUsForm( Request $request ) {
        // Form validation
        $this->validate( $request, [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|min:12',
            'subject' => 'required',
            'message' => 'required',
        ] );

        // Penyimapanan data ke database
        Contact::create( $request->all() );

        // Kirim email ke admin
        \Mail::send('mail', $data = array(
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'phone' => $request->get('phone'),
            'subject' => $request->get('subject'),
            'messages' => $request->get('message'),
        ), function ($message) use ($request) {
            $message->from($request->email);
            // $message->sender('john@johndoe.com', 'John Doe');
            $message->to('wahyurmd@synodev.my.id', 'Admin');
            $message->cc('wahyurmd0512@gmail.com', 'Wahyu Ramadhani');
            $message->bcc('wahyurmd13@gmail.com', 'Wahyu Ramadhani');
            $message->subject($request->get('subject'));
            // $message->replyTo('john@johndoe.com', 'John Doe');
            // $message->priority(3);
            // $message->attach('pathToFile');
        });
        Alert::success('Thank You', 'We will reply as soon as possible');
        return back();
    }

}
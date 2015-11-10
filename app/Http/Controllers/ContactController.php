<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactFormRequest;

class ContactController extends Controller {

    public function index(ContactFormRequest $request) {
        return 'OK';

        \Mail::send('emails.contact', [
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'message' => $request->get('message')
        ], function($message) {
            $message->from('postmaster@divspace.com');
            $message->to('kyle@divspace.com', 'Kyle Anderson');
            $message->subject('Divspace.com Contact Form Submission');
        });
    }

}

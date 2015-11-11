<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactFormRequest;

class ContactController extends Controller {

    public function index(ContactFormRequest $request) {
        \Mail::send('emails.contact', [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'body' => $request->input('message')
        ], function($message) {
            $message->to('kyle@divspace.com', 'Kyle Anderson');
            $message->from('postmaster@divspace.com', 'Divspace');
            $message->subject('Contact Form Submission');
        });

        return response()->json([
            'error' => false,
            'status' => 'OK',
            'statusCode' => 200
        ]);
    }

}

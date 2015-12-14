<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class ContactFormRequest extends Request
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required',
            'email' => 'required|email|max:512',
            'message' => 'required',
            'first_name' => 'honeypot',
            'last_name' => 'required|honeytime:5'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Your name is required',
            'email.required' => 'Your email address is required',
            'email.email' => 'Your email address is invalid',
            'email.max' => 'Your email address cannot exceed 512 characters',
            'message.required' => 'Your message is required'
        ];
    }
}

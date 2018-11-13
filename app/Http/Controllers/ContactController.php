<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class ContactController extends Controller
{
    public function show() {
        return view('contacts');
    }

    public function sendContact(Request $request) {
        $rules = [
            'name'=>'required|max:20',
            'email'=>'required|email',
            'phone'=>'required|regex:/(0)[0-9]{9}/',
            'message'=>'required|max:300'
        ];

        $messages = [
            'name.required' => 'Поле для имени должно быть обязательно заполнено!',
            'name.max' => 'Имя не может быть длиннее 20 символов.',
            'email.required' => 'Поле e-mail должно быть обязательно заполнено!',
            'email.email' => 'Email должен быть в формате xxx@xxx.xxx',
            'phone.required' => 'Поле номера телефона должно быть обязательно заполнено!',
            'phone.regex' => 'Поле номера телефона должно быть в формате 0111111111.',
            'message.required' => 'Поле сообщения должно быть обязательно заполнено!',
            'message.max' => 'Сообщение должно содержать не более 300 символов.'
        ];

        $this->validate($request, $rules, $messages);

        Contact::create([
            'cont_name' => $request->name,
            'cont_email' => $request->email,
            'cont_phone' => $request->phone,
            'cont_message' => $request->message
        ]);

        return view('contacts_sended');
    }
}

<?php

namespace App\Http\Controllers;

use App\CallRequests;
use App\MailRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MainController extends Controller
{
    public function index()
    {
        return view('main.templates.pages.alcohole');
    }

    public function sendEmail(Request $request)
    {
        $data = $this->validate($request, [
            'name' => 'string|required',
            'email' => 'email|required',
            'description' => 'string|required'
        ]);


        Mail::send('main.emails.message-email', $data, function($message) use ($data) {
            $message->to('elitevikup@gmail.com', $data['name'])->subject('Письмо от клиента');
            $message->from($data['email'], 'Elite-vikup');
            $message->replyTo($data['email'], $data['name']);
        });

        $newMail = MailRequest::create($data);

        return response()->json([
            "success" => $newMail ? true : false,
        ]);
    }

    public function orderCall(Request $request)
    {
        $data = $this->validate($request, [
            'name' => 'string|required',
            'phoneNumber' => 'string|required'
        ]);

        Mail::send('main.emails.call-request-email', $data, function($message) use ($data) {
            $message->to('elitevikup@gmail.com', $data['name'])->subject('Заказ на звонок');
            $message->from('elitevikup@gmail.com', 'Elite-vikup');
        });

        $newCall = CallRequests::create($data);

        return response()->json([
            "success" => $newCall ? true : false,
        ]);
    }
}

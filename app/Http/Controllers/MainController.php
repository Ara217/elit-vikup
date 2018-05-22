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
        return view('main.templates.main');
    }

    public function sendEmail(Request $request)
    {
        $data = $this->validate($request, [
            'name' => 'string|required',
            'email' => 'email|required',
            'description' => 'string|required'
        ]);



        Mail::send('main.emails.email', $data, function($message) use ($data) {
            $message->to($data['email'], $data['name'])->subject('Письмо от клиента');
//            $message->attach('C:\laravel-master\laravel\public\uploads\image.png');
//            $message->attach('C:\laravel-master\laravel\public\uploads\test.txt');
            $message->from('elitevikup@gmail.com','Elite-vikup');
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

        $newCall = CallRequests::create($data);

        return response()->json([
            "success" => $newCall ? true : false,
        ]);
    }
}

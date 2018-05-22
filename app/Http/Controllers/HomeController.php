<?php

namespace App\Http\Controllers;

use App\CallRequests;
use App\MailRequest;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin-panel.home');
    }

    public function getCallRequests()
    {
        $calls = CallRequests::paginate(10);

        return view('admin-panel.call-request', ['calls' => $calls]);
    }

    public function getMailRequests()
    {
        $mails = MailRequest::paginate(10);

        return view('admin-panel.mail-request', ['mails' => $mails]);
    }
}

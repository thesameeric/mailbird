<?php

namespace App\Http\Controllers;


use App\Mail\welcomeMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class mailController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

     /**
     * sends a mail
     *
     * @return void
     */
    public function send(Request $request)
    {
        $rules = [
            'recieverMail' => 'required|email',
            'message' => 'required|min:5',
        ];

        $this->validate($request, $rules);

        $mailObj = new \stdClass();
        $mailObj->senderName = $request->input('senderName', 'DSCFUTA');
        $mailObj->receiverName = $request->input('recieverName', 'User');
        $mailObj->message = $request->input('message');
 
        Mail::to($request->recieverMail)->send(new welcomeMail($mailObj));
    }
}

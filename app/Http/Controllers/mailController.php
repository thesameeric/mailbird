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
     * Processes mail requests
     *
     * @return void
     */
    public function send()
    {
        $objDemo = new \stdClass();
        $objDemo->sender = 'DSCFUTA';
        $objDemo->receiver = 'Okiti';
 
        Mail::to("osivwiokiti@gmail.com")->send(new welcomeMail($objDemo));
    }
}

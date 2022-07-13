<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\SendGreetings;
use Mail;


class EmailController extends Controller
{

    public function index()
    {
        return view('emails.maliform');
    }
    public function send(Request $request)
    {
        $To = $request->To;

        $Data = [
            // 'Name'   => '',
            // 'Email'  => 'demo@demo.com',
            // 'Subject'=> 'Demo Subject',
            // 'Message'=> 'Demo Message',

            'Subject' => $request->Subject,
            'Massage' => $request->Massage,

        ];

        // Mail::send(['text' =>'mail'],$Data,function($Message){
        //     $Message->to('ferdawusa@gmail.com','Fedawus')->subject('Message From Application')->from('info@dem.com');
        // });

        // Mail::to('ferdawusm@gmail.com')->send(new SendGreetings($Data));
        Mail::to($To)->send(new SendGreetings($Data));

        return back();

    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
 
use App\Mail\NotifyMail;
use Exception;
use Illuminate\Support\Facades\Mail as Mail;

class SendEmailController extends Controller
{
    public function index()
    {

        $details = [
            'title' => "Titulo del correo",
            'body' => "Contenido del correo",
            'img' => asset('images/cumpleanos.jpg')
        ];
        try {
            $email = "";
            Mail::to($email)->send(new NotifyMail($details));

            if (Mail::failures()) {
                return response()->Fail('Sorry! Please try again later');
            }else{
                //return response()->success('Great! Successfully send in your mail');
                //dd("Email is Sent.");
                return view('emails.demoMail', compact('details'));
            }
        } catch (Exception $e) {
            dd($e);
        }

    } 
}

<?php

namespace App\Http\Controllers;

use App\Mail\feedbackmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail as FacadesMail;
use Illuminate\Support\Facdes\Mail;

class MailController extends Controller
{
    public function sendEmail()
    {
        $details = [
            'title'=> 'Pharma Bangladesh helping team',
            'body'=>'We will contact with you very shortly'

        ];
        FacadesMail::to("prantosaha604@gmail.com")->send(new feedbackmail ($details));
        return "Request Accepted";
    }
}

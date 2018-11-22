<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Contactmail;
use Illuminate\Support\Facades\Mail;
use App\Mail\EmailContact;

use App\Http\Requests\ContactmailRequest;

class MailController extends Controller
{
    public function create(ContactmailRequest $request ){

        $contact= new Contactmail;
        $contact->name = $request->name;
        $contact->email=$request->email;
        $contact->subject=$request->subject;
        $contact->msg=$request->msg;
        $contact->save();

        $mailable=new EmailContact($contact);
        Mail::to('j@m.fr')->send($mailable);
        return redirect('');
        
    }
}

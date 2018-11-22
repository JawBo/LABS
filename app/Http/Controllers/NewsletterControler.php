<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Newsletter;
use App\Http\Requests\NewsletterRequest;

class NewsletterControler extends Controller
{
    public function index(NewsletterRequest $request){
        
        $newsletter = new Newsletter;
        $newsletter->email = $request->email;
        $newsletter->save();
        $request->session()->flash('success', 'Email Address Confirmed !');
        return redirect()->back();

    }
}

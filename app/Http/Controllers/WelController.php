<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Image;
use App\Icone;
use App\Service;
use App\Video;
use App\Testimonial;
use App\Team;

class WelController extends Controller
{
    public function index(){
        $contenuImage = Image::where('section','carousel')->get();
        $contenuIcone = Icone::all();
        $services3 = Service::all()->random(3);
        $contenuService = Service::all();
        $contenuVideo = Video::all()->random(1);
        $contenuTestimonials = Testimonial::all();
        $contenuTeam = Team::all()->random(2);
        return view
        (
            'welcome',compact
            (
                'contenuImage','contenuIcone','services3','contenuService','contenuVideo','contenuTestimonials','contenuTeam' 
            )
        );
    }
    
}



<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Service;
use App\Project;

class ServiceController extends Controller
{
    public function index(){
        $contenuService = Service::all();
        $contenuProject = Project::orderBy('id','desc')->take(6)->get()->reverse();
        $project3 = Project::orderBy('id','desc')->take(3)->get()->reverse();

        return view ('services',compact('contenuService','contenuProject','project3'));

    }
}

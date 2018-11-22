<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Service;
use App\Project;


class AdminserviceController extends Controller
{
    public function services(){

        $services = Service::all();
        return view ('admin.services',compact('services'));

    }
    public function newservices(Request $request){

        $item = new Service;
        $item->icone = $request->icone;
        $item->service= $request->service;
        $item->text=$request->text;
        $item->save();
        return redirect()->back();

    }
    public function deleteservices($id){

        $item = Service::find($id);
        $item ->delete();
        return redirect()->back();
    }

    public function projects(){

        $projects = Project::all();
        return view ('admin.projects',compact('projects'));

    }
    public function newprojects(Request $request){

        $item = new Project;
        $item->icone = $request->icone;
        $item->service= $request->service;
        $item->text=$request->text;
        $item->image = $request->image;
        $item->save();
        return redirect()->back();

    }
    public function deleteprojects($id){

        $item = Project::find($id);
        $item ->delete();
        return redirect()->back();
    }
    public function project(){

        $projects = Project::all();
        return view ('admin.project',compact('projects'));

    }
    public function new3project(Request $request){

        $item = new Project;
        $item->icone = $request->icone;
        $item->service= $request->service;
        $item->text=$request->text;
        $item->image = $request->image;
        $item->save();
        return redirect()->back();

    }
    public function delete3project($id){

        $item = Project::find($id);
        $item ->delete();
        return redirect()->back();
    }

}

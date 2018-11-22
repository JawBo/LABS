<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Storage;
use ImgInt;


use App\Image;
use App\Video;
use App\Testimonial;
use App\Service;
use App\Team;


class AdminhomeController extends Controller
{
    public function logo(){
        $contenulogo = Image::where('section','logo')->get();
        return view('admin.logo',compact('contenulogo'));

    }
    public function createlogo(Request $request){

        $image=$request->file('image');
        $image->storeAs('public/img/logo/original/',$image);
        $resized = ImgInt::make($image)->resize(1000,500)->save();
        Storage::put('public/img/logo/resized/'.$image,$resized);
        $item = new Image;
        $item->image = $image;
        $item->section= 'logo';
        $item->save();
        return redirect()->back();
    }
    public function deletelogo($id){
        $item = Image::find($id);
        $item->delete();
        return redirect()->back();
    }
    public function carousel(){

        $carousel=Image::all();
        return view ('admin.carousel',compact('carousel'));
    }
    public function storeimg(Request $request){

        $image=$request->file('image');
        $imagename=time().$image->hashname();
        $image->storeAs('public/img/carousel/original/',$imagename);
        $resized = ImgInt::make($image)->resize(1000,500)->save();
        Storage::put('public/img/carousel/resized/'.$imagename,$resized);
        $item = new Image;
        $item->image = $imagename;
        $item->section= 'carousel';
        $item->save();
        return redirect()->back();

    }
    public function deleteimg($id){
        
        $item = Image::find($id);
        $item->delete();
        return redirect()->back();

    }
    public function video(){

        $videos = Video::all();
        return view ('admin.video',compact('videos'));
    }
    public function newvideo(Request $request){

        $item = new Video;
        $item->url = $request->url;
        $item->save();
        return redirect()->back();
    }
    public function deletevideo($id){

        $item = Video::find($id);
        $item->delete();
        return redirect()->back();
    }
    public function testimonial(){

        $testi = Testimonial::all();
        return view ('admin.testimonial',compact('testi'));
    }
    public function newtestimonial(Request $request){

        $item = new Testimonial;
        $item->name = $request->name;
        $item->job = $request->job;
        $item->testimonial = $request->testimonial;
        $item->image = $request->image;
        $item->save();
        return redirect()->back();
    }
    public function deletetestimonial($id){

        $item = Testimonial::find($id);
        $item->delete();
        return redirect()->back();
    }
    public function service(){

        $service = Service::all();
        return view ('admin.10services',compact('service'));
    }
    public function newservice(Request $request){

        $item = new Service;
        $item->name = $request->name;
        $item->job = $request->job;
        $item->testimonial = $request->testimonial;
        $item->image = $request->image;
        $item->save();
        return redirect()->back();
    }
    public function deleteservice($id){

        $item = Service::find($id);
        $item->delete();
        return redirect()->back();
    }
    public function team(){

        $team = Team::all();
        return view ('admin.team',compact('team'));
    }
    public function newteam(Request $request){

        $item = new Team;
        $item->name = $request->name;
        $item->job = $request->job;
        $item->image = $request->image;
        $item->save();
        return redirect()->back();
    }
    public function deleteteam($id){

        $item = Team::find($id);
        $item->delete();
        return redirect()->back();
    }
    
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function getUpdate(){
        // $about = About::all();
        return view('content');
   }

   public function update(Request $re){
    dd("success");

    $var = $re->select1;
    $file = $re->filesTest;
    $destinationPath = public_path('/images');
    $file->move($destinationPath,$file->getClientOriginalName());
    // dd($destinationPath);
    // $abou = About::find(2);
    // $abou->font = $re->select1;
    // $abou->content_list_left = $re->content_list_left;
    // $abou->content_list_right =$re->content_list_right;
    // $abou->title =$re->title;
    // $abou->content_image =$re->content_image;
    // $abou->save();
    return redirect('content')->with('success', 'Task was successful!');
}
}

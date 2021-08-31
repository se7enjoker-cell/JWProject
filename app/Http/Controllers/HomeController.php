<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function getUpdate(){
        // $about = About::all();
        return view('Admin/about');
   }

   public function update(Request $request){
    // $path = $request->file('filesTest')->store('public/img');

    // return $path;

      $path = asset('images');
    $file = $request->filesTest;
    $file->move($path,$file->getClientOriginalName());
    // dd($destinationPath);
    // $abou = About::find(2);
    // $abou->font = $re->select1;
    // $abou->content_list_left = $re->content_list_left;
    // $abou->content_list_right =$re->content_list_right;
    // $abou->title =$re->title;
    // $abou->content_image =$re->content_image;
    // $abou->save();
    // return redirect('content')->with('success', 'Task was successful!');
}
}

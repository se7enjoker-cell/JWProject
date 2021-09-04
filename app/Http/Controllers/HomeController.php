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
        // 
        $file = $request->filesTest;
        $destinationPath = public_path('/images');
        $file->move($destinationPath,$file->getClientOriginalName());
        dd($file->getClientOriginalName());
    }
}

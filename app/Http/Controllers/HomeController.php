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
        // $file = $request->filesTest;
        $destinationPath = asset('storage/app');;
        // $file->move($destinationPath,$file->getClientOriginalName());
        dd($destinationPath);
    }
}

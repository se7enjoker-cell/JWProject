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
        $file_name = $request->file('filesTest')->getClientOriginalName();
        $request->file('filesTest')->move('public/images',$file_name);
        dd('success');
    }
}

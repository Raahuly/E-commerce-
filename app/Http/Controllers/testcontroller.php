<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
use App\Models\Rahul;

class testcontroller extends Controller
{
    //
 public function index()
 {
     return view('home');
 }
 public function dynamic($url){
     $name=Rahul::Rahul();
     dd($name);
     return view('web');

 }
 public function dynamic($test){
     dd($this->agent->isMobile());
     return View::make('Home')
     ->with('a',$test)
 }
 public function insert(Request $request){
    $name=$request->input('name');
    dd($name);
}
public function updatet(Request $request){
    $name=$request->input('name');
    dd($name.' '.$id);
}
 
}

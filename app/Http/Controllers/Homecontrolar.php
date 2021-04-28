<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Homecontrolar extends Controller
{
    // public function master(){

    //     return view('master');
    // }

    public function index(){

        return view('index');
    }
   
    public function catagory(){

        return view('catagory');
    }  
    public function case_study(){

        return view('case');
    }  
 
    
    function blog (){
        return view('blog');
    }

    function home (){
        return view('home');
    }
    // function practice (){
    //     return view('practice');
    // }
    
  
}

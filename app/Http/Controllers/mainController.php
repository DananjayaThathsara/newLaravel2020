<?php

namespace App\Http\Controllers;

use App\Service;
use Illuminate\Http\Request;

class mainController extends Controller
{
 public  function index(){
     $content="This is home page";
     return view('home',compact('content'));
 }
    public  function about(){
        $content="This is about page";
        return view('about',compact('content'));
    }
    public  function contact(){
        $content="This is contact page";
        return view('contact',compact('content'));
    }
    public  function services(){
        $services=Service::all();

        return view('services',compact('services'));
    }

}

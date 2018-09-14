<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getHome(){
      return view('home');
    }
    public function getAbout(){
      return view('about');
    }
    public function getServices(){
      return view('services');
    }
    public function getContact(){
      return view('contact');
    }
    public function getPortfolio(){
      return view('portfolio');
    }
}

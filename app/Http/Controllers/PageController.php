<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Album;

class PageController extends Controller
{
    public function getHome(){
      $albums= Album::with('Photos')->get();
      return view('home')->with('albums', $albums);
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

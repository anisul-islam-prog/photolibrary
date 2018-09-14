<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlbumsController extends Controller
{
    public function adminIndex(){
      return view('admin.albums.index');
    }
    public function adminLogin(){
      return view('admin.login');
    }
    public function create(){
      return view('admin.albums.create');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Album;

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
    public function store(Requests $request){
      $this->validate($request,[
        'name'=>'required',
        'cover' =>'image|max:1999'
      ]);
      //get file name with extension
      $filenamewithext = $request->file('cover_image')->getClientOriginalName();
      //get just the filename
      $filename = pathinfo($filenamewithext, PATHINFO_FILENAME);
      //get extension name
      $extension = $request->file('cover_image')->getClientOriginalExtension();
      //Create new file name
      $filenameToStore= $filename.'_'.time().'.'.$extension;
      //Upload Image
      $path=$request -> file('cover_image') ->storeAs('public/img/albumcovers',$filenameToStore);
      //create Album
      $album= new Album;
    }
}

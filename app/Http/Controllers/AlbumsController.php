<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Album;

class AlbumsController extends Controller
{
    public function adminIndex(){
      $albums= Album::with('Photos')->get();
      return view('admin.albums.index')->with('albums', $albums);
    }
    public function adminLogin(){
      return view('admin.login');
    }
    public function create(){
      return view('admin.albums.create');
    }
    public function store(Request $request){
      $this->validate($request,[
        'name'=>'required',
        'cover_image' => 'required|image',
        'description' =>'required'
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
      $path=$request -> file('cover_image') ->storeAs('public/albumcovers',$filenameToStore);
      //create Album
      $album= new Album;
      $album ->name =$request->input('name');
      $album ->description =$request->input('description');
      $album ->cover_image = $filenameToStore;
      $album ->save();
      return redirect('/admin')->with('success', 'Album Created');
    }
}

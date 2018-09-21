<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photo;

class PhotosController extends Controller
{
    public function create($album_id){
      return view('admin.photos.create')->with('album_id',$album_id);
    }
    public function store(Request $request){
      $this->validate($request,[
        'title'=>'required',
        'photo' => 'required|image|max:1999',
        'description' =>'required'
      ]);
      //get file title with extension
      $filenamewithext = $request->file('photo')->getClientOriginalName();
      //get just the filename
      $filename = pathinfo($filenamewithext, PATHINFO_FILENAME);
      //get extension name
      $extension = $request->file('photo')->getClientOriginalExtension();
      //Create new file name
      $filenameToStore= $filename.'_'.time().'.'.$extension;
      //Upload Image
      $path=$request -> file('photo') ->storeAs('public/photos/'.$request->input('album_id'),$filenameToStore);
      //Upload Photo
      $photo=new Photo;
      $photo->album_id = $request->input('album_id');
      $photo->title = $request->input('title');
      $photo->description = $request->input('description');
      $photo->size = $request->file('photo')->getClientSize();
      $photo->photo = $filenameToStore;
      $photo->save();
      return redirect('/albums/'.$request->input('album_id'))->with('success', 'Photo Uploaded');

    }
}

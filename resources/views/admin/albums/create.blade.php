@extends('layouts.admin')

@section('content')
<h3>Create An Album</h3>
{!!Form::open(['action' => 'AlbumsController@store', 'method' =>'POST', 'enctype' => 'multipart/form.data'])!!}
  {{Form::text('name','',['placeholder' => 'Album Name'])}}
  {{Form::textarea('description','',['placeholder' => 'Album Description'])}}
  {{Form::file('cover_img')}}
  {{Form::submit('submit')}}
{!!Form::close() !!}
@endsection

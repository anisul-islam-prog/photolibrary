@extends('layouts.admin')
@section('content')
<h1>{{$album->name}}</h1>
<a class= "button secondary" href="/admin">Go Back </a>
<a class= "button" href="/photos/create/{{$album->id}}">Upload Photo to Album</a>
<hr>
@endsection

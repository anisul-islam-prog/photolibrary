@extends('layouts.home')

@section('content')
    <h1>Contact</h1>
    {!! Form::open(['url' => 'contact/submit']) !!}
    <div>
    {{Form::label('name', 'Name')}}
    {{Form::text('name', '',['class' => 'form-control', 'placeholder' => 'Enter Name'])}}
    </div>
    <div>
    {{Form::label('email', 'E-Mail Address')}}
    {{Form::text('email', '',['class' => 'form-control', 'placeholder' => 'Enter email address'])}}
    </div>
    <div>
    {{Form::label('message', 'Message')}}
    {{Form::textarea('message', '',['class' => 'form-control', 'placeholder' => 'Enter Message'])}}
    </div>
    <div>
      {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
    </div>

    {!! Form::close() !!}
@endsection

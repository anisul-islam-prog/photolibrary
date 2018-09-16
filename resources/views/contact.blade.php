@extends('layouts.home')
@section('content')
<div class="col-md-6 col-7 content_section">
<!--=================== contact info and form start====================-->
                         <div class="content_box">
                             <div class="content_box_inner">
                                 <div>
                                     <h3>
                                         Get in touch with us
                                     </h3>
                                     <p>
                                         Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequat ante ac congue.
                                     </p>

                                     <ul class="nosyely_list pt50">
                                         <li>
                                             <div class="img_box_two">
                                                 <img src="{{URL('img/icons/satelite.png')}}" alt="info list">
                                                 <div class="content align-items-center">
                                                     <p>
                                                         Contact address<br/>
                                                         Dhaka,Bangladesh
                                                     </p>
                                                 </div>
                                             </div>
                                         </li>
                                         <li>
                                             <div class="img_box_two">
                                                 <img src="{{URL('img/icons/scheme.png')}}" alt="info list">
                                                 <div class="content align-items-center">
                                                     <p>
                                                        lordofxtreme@gmail.com
                                                     </p>
                                                 </div>
                                             </div>
                                         </li>
                                         <li>
                                             <div class="img_box_two">
                                                 <img src="{{URL('img/icons/smartphone.png')}}" alt="info list">
                                                 <div class="content align-items-center">
                                                     <p>
                                                         +12313131
                                                     </p>
                                                 </div>
                                             </div>
                                         </li>
                                     </ul>

                                     <div class="mt75 row justify-content-center">
                                       {!! Form::open(['url' => 'contact/submit']) !!}
                                         <div class="col-lg-6 col-12">
                                           {{Form::label('name', 'Name')}}
                                           {{Form::text('name', '',['class' => 'form-control', 'placeholder' => 'Enter Name'])}}
                                         </div>
                                         <div class="col-lg-6 col-12">
                                           {{Form::label('email', 'E-Mail Address')}}
                                           {{Form::text('email', '',['class' => 'form-control', 'placeholder' => 'Enter email address'])}}
                                         </div>
                                         <div class="col-13">
                                           {{Form::label('message', 'Message')}}
                                           {{Form::textarea('message', '',['class' => 'form-control', 'placeholder' => 'Enter Message'])}}
                                         </div>
                                         <div class="col-12">
                                             {{Form::submit('Send',['class'=>'btn btn-primary'])}}
                                         </div>
                                         {!! Form::close() !!}
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <!--=================== contact info and form end====================-->
                     </div>
                     <div class="col-md-6 col-5 img_section" style="background-color:#000;">
                            <!--map -->
                            <div id="map" data-lon="24.036176" data-lat="57.039986" class="map"></div>
                            <!--map end-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--=================== content body end ====================-->
    </div>

@endsection

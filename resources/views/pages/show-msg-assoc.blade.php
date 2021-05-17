@extends('layout.master')

@section('title')
    Specific Associate Message
@stop

@section('content')
    <div class="container">
        <p>{{$message_associate->associate_id}}</p>
        <p>{{$message_associate->subject}}</p>
        <img src="{{asset('images')}}/{{$message_associate->msg_imagefile}}" alt="image msg" style="max-width:60px;">
    </div>
@stop

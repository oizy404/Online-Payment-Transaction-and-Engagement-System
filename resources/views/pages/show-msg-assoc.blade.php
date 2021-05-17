@extends('layout.master')

@section('title')
    Specific Associate Message
@stop

@section('content')
    <div class="container">
        <p>{{$message_associate->associate_id}}</p>
        <p>{{$message_associate->subject}}</p>
        <img src="{{asset('img_msgassociates')}}/{{$message_associate->msg_imagefile}}" alt="image msg" style="max-width:500px;">
    </div>
@stop

@extends('layout.master')

@section('title')
    Inbox Clients
@stop

@section('content')
@include('shared.header')
@include('shared.assoc_sidenav')
<div class="card col-md-6 offset-md-3 mt-5 rounded show-message">
    <div class="cardheader">
        Sent Message
        <a href="{{route('inbox_message_associates.index')}}" class="btn-back"><i class="fas fa-times-circle"></i></a>
    </div>
    <div class="card-body">
        <p style="width: 50%"><strong>Subject: </strong>{{$inbox_message_associate->subject}}</p>
        <p style="width: 50%"><strong>Subject: </strong>{{$inbox_message_associate->mode_of_payment}}</p>
        <div class="img-msg mt-4">
            <img src="{{asset('img_msgassociates')}}/{{$inbox_message_associate->msg_imagefile}}" alt="image msg" style="max-width:380px;">
        </div>
    </div>
</div>
@include('pages.create_msg_associates')
@stop

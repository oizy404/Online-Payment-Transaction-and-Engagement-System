@extends('layout.master')

@section('title')
    Inbox Clients
@stop

@section('content')
<div class="card col-md-6 offset-md-3 mt-5 rounded show-message">
    <div class="cardheader">
        Sent Message
        <a href="{{route('clients-inbox')}}" class="btn-back"><i class="fas fa-times-circle"></i></a>
    </div>
    <div class="card-body">
        <p style="width: 50%"><strong>Subject: </strong>{{$clients_inbox_msg->subject}}</p>
        <div class="img-msg mt-4">
            <img src="{{asset('img_msgassociates')}}/{{$clients_inbox_msg->msg_imagefile}}" id="image-msg" alt="image msg" style="max-width:380px;">
        </div>
    </div>
</div>
@stop
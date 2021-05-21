
@extends('layout.master')

@section('title')
    Clients Received Messages
@stop

@section('content')
<div class="card col-md-6 offset-md-3 mt-5 rounded show-message">
    <div class="cardheader">
        Sent Message
        <a href="{{route('inbox_message_clients.index')}}" class="btn-back"><i class="fas fa-times-circle"></i></a>
    </div>
    <div class="card-body">
        <p style="width: 50%"><strong>Subject: </strong>{{$inbox_message_client->subject}}</p>
        <p style="width: 50%"><strong>Mode of Payment: </strong>{{$inbox_message_client->mode_of_payment}}</p>
        <div class="img-msg mt-2">
            <img src="{{asset('img_msgclients')}}/{{$inbox_message_client->msg_imagefile}}" alt="image msg" style="max-width:380px;">
        </div>
    </div>
</div>
@stop
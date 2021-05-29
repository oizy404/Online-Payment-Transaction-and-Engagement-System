
@extends('layout.master')

@section('title')
    Clients Received Messages
@stop

@section('content')
<div class="card col-md-6 offset-md-3 mt-5 rounded show-message">
    <div class="cardheader">
        Sent Message
        <a href="{{route('associates-inbox')}}" class="btn-back"><i class="fas fa-times-circle"></i></a>
    </div>
    <div class="card-body">
        <a href="{{ url('dynamic_pdf/pdf') }}" class="btn btn-danger">Convert into PDF</a>
        <p style="width: 50%"><strong>Subject: </strong>{{$assoc_inbox_msg->subject}}</p>
        <p id="mode-payment" style="width: 50%; cursor: pointer; padding: 0px;"><strong>Mode of Payment: </strong>{{$assoc_inbox_msg->mode_of_payment}}</p>
        <div class="img-msg mt-2">
            <img src="{{asset('img_msgclients')}}/{{$assoc_inbox_msg->msg_imagefile}}" id="image-msg" alt="image msg" style="max-width:380px;">
        </div>
    </div>
</div>
@include('pages.payment')
@stop
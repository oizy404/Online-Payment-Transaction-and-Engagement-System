
@extends('layout.master')

@section('title')
    Associates Sent Messages
@stop

@section('content')
@include('shared.header')
@include('shared.assoc_sidenav')

    <div class="row dashboard-body">
        <div class="col-2 side-chat-container">
            <h4>Chats...</h4>
            <div class="chat-con rounded">
                <p>lsaalhf</p>
                <p>sfsdfhs</p>
                <p>lorem</p>
            </div>
        </div>
        <div class="col-10 show-message">
            <h5>Subject: {{$message_associate->subject}}</h5>
                <div class="img-msg">
                    <img src="{{asset('img_msgassociates')}}/{{$message_associate->msg_imagefile}}" alt="image msg" style="max-width:380px;">
                </div>
        </div>
    </div>
    
@include('pages.create_msg_associates')
@stop


@extends('layout.master')

@section('title')
    Inbox Associates
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
        <div class="col-10 dashboard">
            <div class="show-message">
                <img src="{{$inbox_message_clients.index}}" alt="">
            </div>
        </div>
    </div>
    
@include('pages.create_msg_associates')
@stop

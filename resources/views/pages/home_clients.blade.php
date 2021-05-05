@extends('layout.master')

@section('title')
    Inbox Clients
@stop

@include('shared.header')
@include('shared.clients_sidenav')

@section('content')
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
            <div class="msg-updates">
                <button class="btn-delete"><i class="fa fa-trash"></i></button>
            </div>
            <table id="message">
                <thead>
                    <tr>
                        <th><input type="checkbox" id="msg-checkbox" name="msg-checkbox"></th>
                        <th id="from">From</th>
                        <th id="msg">Message</th>
                        <th id="received">Received</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($inbox_message_associates as $message_associate)
                        <tr>
                            <td><input type="checkbox" id="msg-checkbox" name="msg-checkbox"></td>
                            <td>{{$message_associate->associate_id}}</td>
                            <td>{{$message_associate->subject}}</td>
                            <td>{{$message_associate->created_at}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    
@include('pages.create_msg_clients')
@stop

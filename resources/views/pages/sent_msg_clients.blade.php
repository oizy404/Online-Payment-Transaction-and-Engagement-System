@extends('layout.master')

@section('title')
    Clients Sent Messages
@stop

@section('content')
@include('shared.header')
@include('shared.clients_sidenav')

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
                    @foreach ($message_clients as $message_client)
                        <tr>
                            <td><input type="checkbox" id="msg-checkbox" name="msg-checkbox"></td>
                            <td>{{$message_client->client_id}}</td>
                            <td>{{$message_client->subject}}</td>
                            <td>{{$message_client->created_at}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    
@include('pages.create_msg_clients')
@stop

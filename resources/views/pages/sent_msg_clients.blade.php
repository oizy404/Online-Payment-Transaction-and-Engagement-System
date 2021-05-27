@extends('layout.master')

@section('title')
    Clients Sent Messages
@stop

@section('content')
@include('shared.header-clients')
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
        <div class="row">
                <div class="column data">
                    <table id="message">
                        <thead>
                            <tr>
                                <th id="from">To</th>
                                <th id="msg">Message</th>
                                <th id="received">Sent</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($message_clients as $message_client)
                                <tr class='clickable-row' data-href="{{route('msg-clients', $message_client->id)}}">
                                <td>{{$message_client->client_id}}</td>
                                <td>{{$message_client->subject}}</td>
                                <td>{{$message_client->created_at}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="column updates">
                    <table id="message">
                        <thead>
                            <tr>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($message_clients as $message_client)
                                <tr>
                                    <td>
                                    <a href="{{route('delete', $message_client->id)}}">Delete</a>
                                    </td>
                                    <!-- <td><a href=""><i class="far fa-check-circle"></i></a></td> -->
                                    <!-- <i class="fas fa-check-circle"></i> -->
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
    
@include('pages.create_msg_clients')
@stop

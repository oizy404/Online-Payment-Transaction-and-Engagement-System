@extends('layout.master')

@section('title')
    Inbox Clients
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
                                <th id="from">From</th>
                                <th id="msg">Message</th>
                                <th id="received">Received</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($clients_inbox_msgs as $clients_inbox_msg)
                                <tr class='clickable-row' data-href="{{route('inbox-clients', $clients_inbox_msg->id)}}">
                                    <td>{{$clients_inbox_msg->associate_id}}</td>
                                    <td>{{$clients_inbox_msg->subject}}</td>
                                    <td>{{$clients_inbox_msg->created_at}}</td>
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
                                <th>Done</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($clients_inbox_msgs as $clients_inbox_msg)
                                <tr>
                                    <td>
                                        Delete
                                    </td>
                                    <td><a href=""><i class="far fa-check-circle"></i></a></td>
                                    <!-- <i class="fas fa-check-circle"></i> -->
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    
@include('pages.create_msg_clients')
@stop

@extends('layout.master')

@section('title')
Associates Received Messages
@stop

@section('content')
@include('shared.header-assoc')
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
                            @foreach($assoc_inbox_msgs as $assoc_inbox_msg)
                                <tr class='clickable-row' data-href="{{route('inbox-assoc', $assoc_inbox_msg->id)}}">
                                <td>{{$assoc_inbox_msg->client_id}}</td>
                                <td>{{$assoc_inbox_msg->subject}}</td>
                                <td>{{$assoc_inbox_msg->created_at}}</td>
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
                            @foreach($assoc_inbox_msgs as $assoc_inbox_msg)
                                <tr>
                                    <td>
                                    <a href="#">Delete</a>
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
@include('pages.create_msg_associates')
@stop
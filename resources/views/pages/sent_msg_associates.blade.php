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
                    @foreach ($message_associates as $message_associate)
                        <tr class='clickable-row' data-href="{{route('message_associates.show', $message_associate->id)}}">
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
    
@include('pages.create_msg_associates')
@stop

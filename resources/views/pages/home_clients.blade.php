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
                            @foreach ($inbox_message_associates as $inbox_message_associate)
                                <tr class='clickable-row' data-href="{{route('inbox_message_associates.show', $inbox_message_associate->id)}}">
                                    <td>{{$inbox_message_associate->associate_id}}</td>
                                    <td>{{$inbox_message_associate->subject}}</td>
                                    <td>{{$inbox_message_associate->created_at}}</td>
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
                            @foreach ($inbox_message_associates as $inbox_message_associate)
                                <tr>
                                    <td>
                                        <form action="{{route('inbox_message_associates.destroy', $inbox_message_associate->id)}}" method="post">
                                            @csrf 
                                            @method('delete')
                                            <button class="btn-delete" type="submit"onclick="return confirm(' Are you sure you want to delete this event?')">
                                                <i class="far fa-trash-alt"></i>
                                            </button>
                                        </form>
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

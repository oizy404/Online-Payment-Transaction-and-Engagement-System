@extends('layout.master')

@section('title')
    Associates
@stop

@section('content')

    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <img src="images/bulanoicon.png" id="companyicon"alt="Company Icon" style="width: 140px">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <form class="d-flex search">
                    <input class="form-control" type="search" placeholder="Search">
                    <button class="btn" id="btn-search" ><i class="fa fa-search"></i></button>
                </form>
                <div class="user-info">
                    <p>Genelyn Fckincata</p>
                    <div class="btn-group">
                        <button class="btn" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="images/user.jpg" class="rounded-circle" id="user-avatar"><i class="fas fa-caret-down"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-lg-end">
                            <li><a class="dropdown-item" href="#">Profile</a></li>
                            <li><a class="dropdown-item" href="#">Log Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <div class="row dashboard-body">
        <div class="col-2 side-container">
            <div class="create">
                <a href="" class="" id="btn-create"><i class="fa fa-plus-square"></i>Create</a><br>
            </div>
            <a href="">Inbox</a><br>
            <a href="">Sent</a><br>
        </div>
        <div class="col-10 dashboard">
            <div class="msg-updates">
                <button class="btn-delete"><i class="fa fa-trash"></i></button>
            </div>
            <table id="message">
                <tr>
                    <th><input type="checkbox" id="msg-checkbox" name="msg-checkbox"></th>
                    <th id="from">From</th>
                    <th id="msg">Message</th>
                    <th id="received">Received</th>
                </tr>
                <tr>
                    <td><input type="checkbox" id="msg-checkbox" name="msg-checkbox"></td>
                    <td>ldiha.lga</td>
                    <td>saasfaf</td>
                    <td>khkashf</td>
                </tr>
            </table>
        </div>
    </div>
@stop

@extends('layout.master')

@section('title')
    Admin Home
@stop

@section('content')
@include('shared.admin-header')
@include('shared.admin-sidenav')   
<div class="admin-dashboard">
    <div class="admindash-container">
        <div class="row mt-5" id="admin-dashcards">
            <div class="col-md-3 offset-md-3" id="card-users">
                <div class="card cards">
                    <center>
                    <div class="card-body">
                        <i class="fas fa-users rounded-circle"></i>
                        <h5 class="card-title mt-2">Bulano's Associates Accounts</h5>
                    </div>
                    </center>
                    <div class="card-footer">
                        More Info...<i class="fas fa-arrow-right" style="float: right;"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-3 offset-md-1" id="card-users">
                <div class="card" id="admindash-card">
                    <center>
                    <div class="card-body">
                        <i class="fas fa-users rounded-circle"></i>
                        <h5 class="card-title mt-2">Bulano's Clients Accounts</h5>
                    </div>
                    </center>
                    <div class="card-footer">
                        More Info...<i class="fas fa-arrow-right" style="float: right;"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-3 offset-md-3" id="cardcreate-account">
                <div class="card" id="card-create">
                    <center>
                    <div class="card-body">
                        <i class="fas fa-user-plus rounded-circle"></i>
                        <h5 class="card-title mt-2">Create Associate Account</h5>
                    </div>
                    </center>
                    <div class="card-footer card-assoc">
                        Create<i class="fas fa-arrow-right" style="float: right;"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-3 offset-md-1" id="cardcreate-account">
                <div class="card">
                    <center>
                    <div class="card-body">
                        <i class="fas fa-user-plus rounded-circle"></i>
                        <h5 class="card-title mt-2">Create Client Account</h5>
                    </div>
                    </center>
                    <div class="card-footer card-clients">
                        Create<i class="fas fa-arrow-right" style="float: right;"></i>
                    </div>
                    <p></p>
                </div>
            </div>
        </div>
    </div>
</div>
@include('pages.create-associate-account')
@include('pages.create-client-account')
@stop
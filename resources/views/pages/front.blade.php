@extends('layout.master')

@section('title')
    Login
@stop

@section('content')
        <div class="row">
            <div class="col bg-white">
                    <img src="images/bulanologo.png" class="center" id="companylogo"alt="Company Logo">
            </div>
            <div class="col login">
                <form action="{{route('login')}}" id="login" method="post">
                    <center>
                        <h3>WELCOME</h3>
                    </center>
                    @csrf
                    @method('post')
                    <div class="mb-2">
                        <label for="username" class="form-label mt-2"><b>User Name</b></label>
                        <input type="text" class="form-control" name="username">
                    </div>
                    <div class="mb-2">
                        <label for="password" class="form-label"><b>Password</b></label>
                        <input type="password" class="form-control" name="password">
                    </div><br>
                    <a href=""><i>Forgot your password?</i></a>
                    <input type="submit" value="Login" class="form-control mt-1" id="btn-login">
                </form>
                <!-- @if ($errors->any()) -->
                    <div class="alert alert-warning d-flex align-items-center" role="alert" style="display:none">
                        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                        <div>
                            {{$errors->first()}}
                        </div>
                    </div>
                <!-- @endif -->
                
            </div>
        </div>
@stop

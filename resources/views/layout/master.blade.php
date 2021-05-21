<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" 
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
    <link rel="stylesheet" href="{{asset('css/admin-home.css')}}">
    <link rel="stylesheet" href="{{asset('css/header.css')}}">
    <link rel="stylesheet" href="{{asset('css/sidenav.css')}}">
    <link rel="stylesheet" href="{{asset('css/home_associates.css')}}">
    <link rel="stylesheet" href="{{asset('css/show-message.css')}}">
    <link rel="stylesheet" href="{{asset('css/create_msg_clients.css')}}">
    <link rel="stylesheet" href="{{asset('css/create_msg_associates.css')}}">
    <link rel="stylesheet" href="{{asset('css/create-client-account.css')}}">
    <link rel="stylesheet" href="{{asset('css/create-associate-account.css')}}">
    <link rel="stylesheet" href="{{asset('css/show-associates-accounts.css')}}">
    <link rel="stylesheet" href="{{asset('css/show-clients-accounts.css')}}">
    <link rel="stylesheet" href="{{asset('css/admin-sidenav.css')}}">
    <link rel="stylesheet" href="{{asset('css/admin-header.css')}}">

</head>
<body>

    @yield('content')
    
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('js/login.js')}}"></script>
    <script src="{{asset('js/sidenav.js')}}"></script>
    <script src="{{asset('js/admin-sidenav.js')}}"></script>
    <script src="{{asset('js/create_message.js')}}"></script>
    <script src="{{asset('js/show-message.js')}}"></script>
    <script src="{{asset('js/previewFileMsg.js')}}"></script>
    <script src="{{asset('js/create-client-account.js')}}"></script>
    <script src="{{asset('js/create-associate-account.js')}}"></script>
    <script src="{{asset('js/show-associates-accounts.js')}}"></script>
    <script src="{{asset('js/show-clients-accounts.js')}}"></script>
    <!-- <script src="{{asset('js/show-associates-accounts.js')}}"></script> -->
    
</body>
</html>

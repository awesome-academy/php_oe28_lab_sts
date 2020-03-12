<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="{{ asset('bower_components/bootstrap/dist/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('bower_components/datatables.net-bs4/css/dataTables.bootstrap4.css') }}">

    <title>@yield('title')</title>
</head>
<body>

<div id="preloader">
    <div id="status"></div>
</div>

@include('client.layouts.header')

@yield('content')

<script src="{{ asset('bower_components/jQuery/dist/jquery.js') }}"></script>
<script src="{{ asset('bower_components/bootstrap/dist/js/bootstrap.js') }}"></script>
<script src="{{ asset('bower_components/datatables.net/js/jquery.dataTables.js') }}"></script>
<script src="{{ asset('bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ mix('/js/app.js') }}"></script>
<script src="{{ mix('/js/all.js') }}"></script>

</body>

</html>

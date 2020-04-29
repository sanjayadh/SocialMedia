<!DOCTYPE html>
<html lang="en">
<head>
    <title>{{ config('app.name', 'Laravel') . "- Profile" }}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">


</head>
<body>
<div id="app">
    @include('components.nav')

    <div class="container" style="margin-top:30px">
        @yield('sanjay')
    </div>

    <div class="jumbotron text-center" style="margin-bottom:0">
        <p>Footer</p>
    </div>
</div>

</body>
</html>

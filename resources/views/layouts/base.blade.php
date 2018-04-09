<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ str_replace('-', ' ', config('app.name', 'Laravel')) }} @yield('title')</title>

    <!-- Styles -->
    <link rel="stylesheet" href="/css/app.css"/>
</head>
<body>
    <div class="wrapper">
        <div class="side-navigation">
            <div class="logo-area">
            </div>
            <ul class="desktop-nav">
                <li><a href="/"><i class="fa fa-home"></i> Home</a></li>
                <li><a href="/admins"><i class="fa fa-users"></i> Admins</a></li>
                <li><a href="/foods"><i class="	fa fa-file-text"></i> Foods</a></li>
            </ul>
            <ul class="mobile-nav">
                <li><a href="/"><i class="fa fa-home"></i></a></li>
                <li><a href="/admins"><i class="fa fa-users"></i></a></li>
                <li><a href="/foods"><i class="	fa fa-file-text"></i></a></li>
            </ul>
        </div>
        <div class="content-area">
            <div class="content-header">
            </div>
            <div class="content-body">
                @yield('content')
            </div>
        </div>
    </div>

</body>
</html>

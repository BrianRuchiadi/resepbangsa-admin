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
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/admins">Admin</a></li>
                <li><a href="/foods">Foods</a></li>
            </ul>
        </div>
        <div class="content-area">
            <header>
            </header>
            <div class="content">  
                @yield('content')
            </div>
        </div>
    </div>

</body>
</html>

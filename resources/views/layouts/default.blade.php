<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <title>@yield('title', 'wuniantang app') - 无念堂</title>
</head>
<body>
    @include('layouts._header')
    @include('shared._messages')
    <div class="container">
        @yield('content')
    </div>
    @include('layouts._footer')
</body>
</html>
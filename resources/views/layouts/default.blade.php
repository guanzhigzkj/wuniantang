<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <title>@yield('title', 'wuniantang app') - 无念堂</title>
</head>
<body>
@include('layouts._header')

    <div class="container">
        <div class="offset-md-1 col-md-10">
            @include('shared._messages')
            @yield('content')
        </div>
    </div>
    @include('layouts._footer')
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
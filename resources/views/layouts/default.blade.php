<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <title>@yield('title', 'wuniantang app') - 宋安琪</title>
</head>
<body>
    @include('layouts._header')

    <div class="container">
        @yield('content')
    </div>
    @include('layouts._footer')
</body>
</html>
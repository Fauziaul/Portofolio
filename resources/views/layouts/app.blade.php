<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
</head>
<body>
    @yield('header')

    <div class="content">
        @yield('content')
    </div>

    @yield('footer')
</body>
</html>
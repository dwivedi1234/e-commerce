<!DOCTYPE html>
<html lang="en">
<head>
    @include('front.supportive.head')
</head>
<body >
    @include('front.supportive.nav')
        @yield('content')
    @include('front.supportive.footer')
    @include('front.supportive.script')
</body>
</html>
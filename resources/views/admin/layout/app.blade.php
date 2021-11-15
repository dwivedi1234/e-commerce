<!DOCTYPE html>
<html lang="en">
<head>
   
    @include('admin.layout.head')

</head>
<body>
    @include('admin.layout.nav')
        @yield('content')
    @include('admin.layout.footer')
    @include('admin.layout.script')
</body>
</html>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
@include('partials._head')
<!-- CSS Files -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
</head>
<body class="login-page sidebar-collapse">
<!-- Navbar -->
@include('partials._navbar')
<!-- Content -->
@yield('content')
<!-- Footer -->
@include('partials._footer')
<!-- Core JS Files -->
<script src="{{ asset('js/vendor.js') }}" type="text/javascript"></script>

</body>
</html>

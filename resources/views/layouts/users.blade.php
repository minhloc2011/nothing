<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
@include('partials._head')
<!-- CSS Files -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
</head>
<body class="profile-page sidebar-collapse">

<!-- Content -->
@yield('content')

<!-- Core JS Files -->
<script src="{{ asset('js/vendor.js') }}" type="text/javascript"></script>

</body>
</html>

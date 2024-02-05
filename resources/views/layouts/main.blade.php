<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- css --}}
    @include('components.css')
    <title>Alohomora | {{ $title }}</title>
</head>

<body class="bg-dark">
    @include('partials.navbar')

    <div>
        @yield('container')
    </div>

    @if (!Request::is('login') && !Request::is('register'))
        @include('partials.footer')
    @endif

    @include('components.js')
</body>

</html>

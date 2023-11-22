<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Tatra Light')</title>
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
</head>

<body class="relative overflow-x-hidden bg-beige">
    <!--NAVIGATION -->
    <x-navigation.topBar />


    {{ $slot }}
    <!--FOOTER -->
    <x-footer />
</body>

</html>

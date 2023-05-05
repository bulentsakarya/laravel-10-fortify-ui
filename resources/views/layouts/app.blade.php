<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fortify Panel</title>
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
</head>
<body class="app">
    <div class="wrapper">
        @include('user.partials.sidebar')
        <div class="main">
            <div class="container-fluid g-5">
                @include('user.partials.header')
                @yield('content')
            </div>
        </div>
    </div>
    @include('user.partials.footer')
</body>
</html>

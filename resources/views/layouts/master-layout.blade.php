<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MyCount</title>
    @include('layouts.styles')
</head>

<body>
    <header>
        @include('layouts.navbar')
    </header>
    <div class="container">
        @yield('content')
        @yield('modal')
    </div>
    @include('layouts.scripts')
</body>

</html>

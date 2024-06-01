<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    <title>{{ env('APP_NAME') }}</title>
    @yield('extra-css')
</head>
<body class="bg-blue-50">
    <div class="container">
        @include('navbar')

        @yield('content')

        @include('footer')
    </div>
    @yield('extra-js')
</body>
</html>
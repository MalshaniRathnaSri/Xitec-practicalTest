<!DOCTYPE html>
<!DOCTYPE html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
  <title>{{env ('APP_ADMIN_NAME')}}</title>
  <title>Pusher Test</title>
  <script src="https://js.pusher.com/8.2.0/pusher.min.js"></script>
  <script>

    Pusher.logToConsole = true;

    var pusher = new Pusher('05a116262a68fbc199fc', {
      cluster: 'ap2'
    });

    var channel = pusher.subscribe('my-channel');
    channel.bind('my-event', function(data) {
      alert(JSON.stringify(data));
    });
  </script>
</head>
<body">
  <div class="container">
    <div class="bg-gray-300 min-h-screen">
      @include('_admin.admin_navbar')

      @yield('content')
  </div>
  </div>
</body>


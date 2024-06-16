<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    <script src="https://js.pusher.com/7.0/pusher.min.js"></script>
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

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var pusher = new Pusher('{{ config('broadcasting.connections.pusher.key') }}', {
                cluster: '{{ config('broadcasting.connections.pusher.options.cluster') }}'
            });

            var channel = pusher.subscribe('my-channel');

            channel.bind('my-event', function(data) {
                alert("Are You Sure to submit data" + data.patientName);
            });

            document.getElementById('submitBtn').addEventListener('click', function() {
                var form = document.getElementById('uploadForm');
                var formData = new FormData(form);

                fetch(form.action, {
                    method: form.method,
                    body: formData,
                    headers: {
                        'X-CSRF-Token': '{{ csrf_token() }}'
                    }
                })
                .then(response => response.json())
                .then(data => {
                    // Trigger Pusher event with the new post data
                    channel.trigger('my-event', {
                        patientName: data.patientName
                    });
                })
                .catch(error => console.error('Error:', error));
            });
        });
    </script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    <title>{{env ('APP_ADMIN_NAME')}}</title>
</head>
<body>
    <div class="flex flex-col mt-10 items-center justify-center">
        <div class="max-w-lg w-full border-2 border-black rounded-lg shadow-lg flex justify-center items-center flex-col">
        <h1 class="text-2xl font-bold mb-4">Login Form</h1>
        <form action="{{route ('admin.login') }}" method="POST">
            @csrf
            <div class="mb-4"> 
                <label for="username" class="block text-sm font-medium text-gray-700">User Name:</label>
                <input type="text" name="adminEmail" class="@error('adminEmail') ring-red-500 @enderror ring-2 ring-gray-300 w-full p-2 rounded-md">
                @error('adminEmail')
                    <p class="error">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <input type="password" name="adminPassword" autocomplete="new-password" class="@error('adminPassword')ring-red-500 @enderror ring-2 ring-gray-300 w-full p-2 rounded-md">
                @error('adminPassword')
                    <p class="error">{{$message}}</p>
                @enderror
            </div>

            <div class="flex justify-end">
                <button type="submit" class="w-20 bg-black text-white p-2 rounded-md hover:bg-blue-600">Login</button>
            </div>
        </form>
        <div>
            <a href="{{route ('admin.registration')}}"><div class="font-bold">If you are s New Admin User Click Here....</div></a>
        </div>
        </div>
    </div>
</body>
</html>
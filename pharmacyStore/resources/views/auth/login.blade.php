@extends('layout')

@section('content')
<div class="mb-4 bg-gradient-to-br from-blue-700 via-blue-600 to-blue-800 p-4 rounded-xl mt-5">
    
    <form method="POST" action="{{route ('login')}}">
        @csrf
        <div class="font-bold text-2xl">Already a Customer?</div>
        <div class="text-lg whitespace-nowrap">If you have an account with us, log in using your email address.</div>

        @error('failed')
            <p class="error">{{$message}}</p>
        @enderror

        <div class="sm:col-span-4">
            <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email address</label>
            <div class="mt-2">
                <input name="email" type="email" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>
        </div>
        <div class="sm:col-span-4">
            <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
            <div class="mt-2">
                <input id="password" name="password" type="password" autocomplete="new-password" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>
        </div>

        <div>
            <input type="checkbox" name="remember" id="remember">
            <label for="remember" class=" text-sm font-medium leading-6 text-gray-900">Remember Me</label>
        </div>

        <div class="mt-4">
            <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Login</button>
        </div> 
        </form>
</div>
@endsection
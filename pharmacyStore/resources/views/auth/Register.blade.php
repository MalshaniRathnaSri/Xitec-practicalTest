@extends('layout')

@section('content')
<div class="sm:mt-10 lg:mt-0 bg-gradient-to-br from-blue-700 via-blue-600 to-blue-800 p-4 rounded-xl">
    <div class="font-bold text-white text-2xl">Is this your First time?</div>
    <div class="text-white text-lg whitespace-nowrap">Fill in the following information to upload Prescription</div>
    <form method="POST" action="{{route ('register')}}" id="registrationForm">
        @csrf
        <div class="border-b border-gray-900/10 pb-12 text-white">
            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                <div class="sm:col-span-4">
                    <label for="first-name" class="block text-sm font-medium leading-6">First name</label>
                    <div class="mt-2">
                        <input type="text" name="firstName" value="{{old ('firstName')}}" autocomplete="off" class="@error('firstName') ring-red-700 @enderror block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        @error('firstName')
                            <p class="error">{{$message}}</p>
                        @enderror
                    </div>
                </div>

                <div class="sm:col-span-4">
                    <label for="last-name" class="block text-sm font-medium leading-6">Last name</label>
                    <div class="mt-2">
                        <input type="text" name="lastName" value="{{old ('lastName')}}" autocomplete="off" class="@error('lastName') ring-red-700 @enderror w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        @error('lastName')
                            <p class="error">{{$message}}</p>
                        @enderror
                    </div>
                </div>

                <div class="sm:col-span-4">
                    <label for="email" class="block text-sm font-medium leading-6">Email address</label>
                    <div class="mt-2">
                        <input id="email" name="email" type="email" value="{{old ('email')}}" autocomplete="off" class="@error('email') ring-red-700 @enderror w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        @error('email')
                            <p class="error">{{$message}}</p>
                        @enderror
                    </div>
                </div>

                <div class="sm:col-span-4">
                    <label for="contact" class="block text-sm font-medium leading-6">Contact Number</label>
                    <div class="mt-2">
                        <input id="contact" name="contact" type="text" value="{{old ('contact')}}" class="@error('contact') ring-red-700 @enderror w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        @error('contact')
                            <p class="error">{{$message}}</p>
                        @enderror
                    </div>
                </div>

                <div class="sm:col-span-4">
                    <label for="dob" class="block text-sm font-medium leading-6">Date of Birth</label>
                    <div class="mt-2">
                        <input name="dob" type="date" value="{{old ('dob')}}" class="@error('dob') ring-red-700 @enderror block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        @error('dob')
                            <p class="error">{{$message}}</p>
                        @enderror
                    </div>
                </div>

                <div class="sm:col-span-4">
                    <label for="street-address" class="block text-sm font-medium leading-6">Permanent Address</label>
                    <div class="mt-2">
                        <textarea id="street-address" name="address" value="{{old ('address')}}" class="@error('address') ring-red-700 @enderror block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Enter your permanent address"></textarea>
                        @error('address')
                            <p class="error">{{$message}}</p>
                        @enderror
                    </div>
                </div>

                <div class="sm:col-span-4">
                    <label for="password" class="block text-sm font-medium leading-6">Password</label>
                    <div class="mt-2">
                        <input id="password" name="password" type="password" autocomplete="new-password" class="@error('password') ring-red-700 @enderror block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            @error('password')
                                <p class="error">{{$message}}</p>
                            @enderror
                    </div>
                </div>

                <div class="sm:col-span-4">
                    <label for="conPassword" class="block text-sm font-medium leading-6">Confirm Password</label>
                    <div class="mt-2">
                        <input name="password_confirmation" type="password" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>

                <div class="mt-6 flex items-center sm:col-span-4 justify-end gap-x-6">
                    <a type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</a>
                    <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Sign Up</button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
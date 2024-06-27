@extends('_admin.admin_layout')

@section('content')
<div class="flex flex-col justify-center items-center min-h-screen">
    <div class="w-full max-w-lg p-6 bg-white rounded-lg shadow-md border-2 border-black">
        <form action="{{route ('admin.registration')}}" method="POST">
            @csrf
            <h1 class="text-2xl font-bold mb-4">Registration Form</h1>
            <div class="mb-4">
                <label for="adminId" class="block text-sm font-medium text-gray-700">Admin ID Number:</label>
                <div class="mt-1">
                    <input type="text" value="{{old ('adminId')}}" name="adminId" class="@error('adminId') ring-red-700 @enderror ring-2 ring-gray-300 w-full p-2 rounded-md">
                    @error('adminId')
                        <p class="error">{{$message}}</p>
                    @enderror
                </div>
            </div>
            <div class="mb-4">
                <label for="adminName" class="block text-sm font-medium text-gray-700">Admin Name:</label>
                <div class="mt-1">
                    <input type="text" name="adminName" value="{{old ('adminName')}}" class="@error('adminName') ring-red-700 @enderror ring-2 ring-gray-300 w-full p-2 rounded-md">
                    @error('adminName')
                        <p class="error">{{$message}}</p>
                    @enderror
                </div>
            </div>
            <div class="mb-4">
                <label for="adminContactNumber" class="block text-sm font-medium text-gray-700">Admin Contact Number:</label>
                <div class="mt-1">
                    <input type="text" name="adminContactNumber" value="{{old ('adminContactNumber')}}" class="@error('adminContactNumber') ring-red-700 @enderror ring-2 ring-gray-300 w-full p-2 rounded-md">
                    @error('adminContactNumber')
                        <p class="error">{{$message}}</p>
                    @enderror
                </div>
            </div>
            <div class="mb-4">
                <label for="adminEmail" class="block text-sm font-medium text-gray-700">Admin Email Address:</label>
                <div class="mt-1">
                    <input type="email" name="adminEmail" value="{{old ('adminEmail')}}" class="@error('adminEmail') ring-red-700 @enderror ring-2 ring-gray-300 w-full p-2 rounded-md">
                    @error('adminEmail')
                        <p class="error">{{$message}}</p>
                    @enderror
                </div>
            </div>
            <div class="mb-4">
                <label for="adminPassword" class="block text-sm font-medium text-gray-700">Admin Password:</label>
                <div class="mt-1">
                    <input type="password" autocomplete="new-password" name="adminPassword" class="@error('adminPassword') ring-red-700 @enderror ring-2 ring-gray-300 w-full p-2 rounded-md">
                    @error('adminPassword')
                        <p class="error">{{$message}}</p>
                    @enderror
                </div>
            </div>
            <div class="mb-4">
                <label for="adminConPassword" class="block text-sm font-medium text-gray-700">Confirm Your Password:</label>
                <div class="mt-1">
                    <input type="password" name="confirm-password" class="ring-2 ring-gray-300 w-full p-2 rounded-md">
                </div>
            </div>
            <div>
                <button type="submit" class="w-full bg-black text-white p-2 rounded-md hover:bg-blue-600">Register</button>
            </div>
        </form>
    </div>
</div>
@endsection

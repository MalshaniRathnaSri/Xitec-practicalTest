@extends('layout')

@section('content')
@include('pages.customer_sidebar')

<div class="custom_container">
    <div class="flex justify-center items-center ml-10">
        <div class="border-2 border-blue-500 p-4 rounded-lg h-96">
            <div>
                <div class="font-bold text-4xl justify-center">My Account</div>
                <div class="mt-3">Account Information</div>
            </div>
            <hr class="border-t-2 border-blue-500 my-4 w-96">
            <div>
                <div class="font-bold text-xl py-3">Contact Information</div>
                    <div class="text-lg">
                        <div class="py-4">
                            Name: {{auth()->user()->firstName}}
                        </div>
                        <div class="py-4">
                            Email: {{auth()->user()->email}}
                        </div>
                        <div class="py-4">
                            Contact Number:{{auth()->user()->contact}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
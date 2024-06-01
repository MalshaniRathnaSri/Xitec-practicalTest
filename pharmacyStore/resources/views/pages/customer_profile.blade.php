@extends('layout')

@section('content')
<div>
    <div class="ml-8">
        <div>
            <div class="font-bold text-2xl">My Account</div>
            <div class="mt-3">Account Information</div>
        </div>
        <hr class="border-t-2 border-blue-500 my-4 w-96">
        <div>
            <div class="font-bold text-xl">Contact Information</div>
                <div>
                    Name: {{auth()->user()->firstName}}
                </div>
                <div>
                    Email: {{auth()->user()->email}}
                </div>
                <div>
                    Contact Number:{{auth()->user()->contact}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
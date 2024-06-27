@extends('_admin.admin_layout')

@section('content')

@include('_admin.admin_sidebar') 
<div class="custom_container">
    <div>
        <div class="font-bold text-4xl justify-center">Admin Account</div>
        <div>
            Admin Id: {{ Auth::guard('admin')->user()->adminId }}
        </div>
        <div>
            Admin Name: {{ Auth::guard('admin')->user()->adminName }}
        </div>
    </div>
    <h1>Pusher Test</h1>
  <p>
    Try publishing an event to channel <code>my-channel</code>
    with event name <code>my-event</code>.
  </p>
</div>
@endsection
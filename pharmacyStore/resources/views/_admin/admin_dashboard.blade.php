@extends('_admin.admin_layout')

@section('content')
<div>
    <div class="flex justify-center mt-4">
      <h2 class="lg:text-4xl md:text-2xl text-lg font-black">New Pharmacy Store Admin Panel</h2>
    </div>

    <div class="">
      @include('auth.admin_login')
    </div>
</div>

@endsection
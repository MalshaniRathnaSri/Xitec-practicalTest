@extends('_admin.admin_layout')

@section('content')
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
</div>
@endsection
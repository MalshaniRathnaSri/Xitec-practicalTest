@extends('_admin.admin_layout')

@section('content')

@include('_admin.admin_sidebar')
<div class="admin-container py-6"> 
    <div>
        <div class="justify-center">
            <table class="table-auto border-collapse border border-gray-300">
                <thead>
                    <tr class="bg-gray-100">
                        <th class="border border-gray-300 px-4 py-2">Patient Id</th>
                        <th class="border border-gray-300 px-4 py-2">Patient Name</th>
                        <th class="border border-gray-300 px-4 py-2">Status</th>
                        <th class="border border-gray-300 px-4 py-2 w-60">Select</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($prescriptions as $prescription)
                        <tr class="text-sm">
                            <td class="py-2 border border-gray-300 px-4">{{ $prescription->id }}</td>
                            <td class="border border-gray-300 px-4">{{ $prescription->patientName }}</td>
                            <td class="border border-gray-300 px-4" id="status-{{ $prescription->id }}"></td>
                            <td class="border border-gray-300 px-4">
                                <div class="flex justify-center space-x-2">
                                    <button class="bg-blue-400 text-white px-2 py-1 w-32 rounded" onclick="updateStatus({{ $prescription->id }}, 'Mark As Done')">Mark As Done</button>
                                    <button class="bg-green-400 text-white px-2 py-1 rounded" onclick="updateStatus({{ $prescription->id }}, 'Pending')">Pending</button>
                                    <button class="bg-red-500 text-white px-2 py-1 rounded" onclick="updateStatus({{ $prescription->id }}, 'Cancel')">Cancel</button>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div> 
</div>

<script>
function updateStatus(prescriptionId, status) {
    document.getElementById('status-' + prescriptionId).innerText = status;
}
</script>

@endsection

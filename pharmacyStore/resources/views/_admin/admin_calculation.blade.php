@extends('_admin.admin_layout')

@section('content')

@include('_admin.admin_sidebar')
<div class="admin-container"> 
    <div class="justify-center">
        <div class="justify-center w-full">
            <div class="border border-blue-500 border-solid border-2 p-1 w-96 h-96">
                <div>
                    <img src="{{ asset('upload/' . $prescription->imagePath) }}" alt="Preview Image" class="w-full h-full object-cover">
                </div>
                <div class="flex justify-center items-center mt-8 space-x-4">
                    <div class="border border-blue-500 border-solid border-2 p-1 w-16 h-16"></div>
                    <div class="border border-blue-500 border-solid border-2 p-1 w-16 h-16"></div>
                    <div class="border border-blue-500 border-solid border-2 p-1 w-16 h-16"></div>
                    <div class="border border-blue-500 border-solid border-2 p-1 w-16 h-16"></div>
                </div>
            </div>

            <div class="border border-blue-500 border-solid border-2 p-1 w-96 mt-8">
                <table id="quotationTable" class="w-full">
                    <thead>
                        <tr>
                            <th>Drug</th>
                            <th>Quantity</th>
                            <th>Amount</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th colspan="2" class="text-right font-bold">Total</th>
                            <td id="totalAmount"></td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
        <div>
            <div class="flex justify-end mt-5 space-x-8">
                <label for="drug" class="font-bold">Drug</label>
                <input type="text" id="drug" class="px-3 py-2 border border-gray-300 block w-40 h-10">
            </div>
            <div class="flex justify-end mt-1 space-x-8">
                <label for="quantity" class="font-bold">Quantity</label>
                <input type="text" id="quantity" class="px-3 py-2 border border-gray-300 block w-40 h-10">
            </div>
            <div class="flex justify-end mt-3 space-x-8">
                <button type="button" id="addRowBtn" class="bg-red-500 px-3 py-2 border border-gray-300 block w-28 h-10">Add</button>
            </div>
            <div class="border-t border-blue-500 my-4"></div>
            <div class="flex justify-end mt-3 space-x-8">
                <button onclick="calculateTotalAmount()" type="button" id="sendQuotationBtn" class="px-3 py-2 border border-gray-300 block w-36 h-10 whitespace-nowrap">Send Quotation</button>
            </div>
        </div>
    </div> 
    <script>
        function calculateTotalAmount() {
            var totalAmount = 0;
            document.querySelectorAll('#quotationTable tbody tr').forEach(function(row) {
                var amount = parseFloat(row.cells[2].textContent) || 0; 
                totalAmount += amount;
            });
    
            return totalAmount;
        }

        document.getElementById('addRowBtn').addEventListener('click', function() {
            var drug = document.getElementById('drug').value;
            var quantity = parseFloat(document.getElementById('quantity').value) || 0;
            var amount = drug * quantity || 0;
            var newRow = `
                <tr>
                    <td>${drug}</td>
                    <td>${quantity}</td>
                    <td>${amount.toFixed(2)}</td>
                </tr>
            `;
            document.querySelector('#quotationTable tbody').insertAdjacentHTML('beforeend', newRow);
            document.getElementById('drug').value = '';
            document.getElementById('quantity').value = '';
            document.getElementById('totalAmount').textContent = calculateTotalAmount().toFixed(2);
        });

        document.getElementById('sendQuotationBtn').addEventListener('click', function() {
            alert('Quotation sent successfully!');
        });
    </script>
</div>

@endsection

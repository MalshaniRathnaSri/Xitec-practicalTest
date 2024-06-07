@extends('layout')

@section('content')
<div>
  @include('pages.customer_sidebar')
  <div class="custom_container">

  <div class="max-w-xl mx-auto bg-white shadow-md rounded-md p-6 mb-8">

    <h2 class="text-xl font-semibold mb-4">Prescription Upload Form</h2>

    <form id="uploadForm" method="POST" action="{{route ('prescription.upload')}}" enctype="multipart/form-data">
    @csrf
      <div class="mb-4">
        <label class="block text-sm font-medium text-gray-700">Patient Name:</label>
        <input type="text" name="patientName" rows="3" class="mt-1 px-3 py-2 border border-gray-300 rounded-md block w-full"></input>
      </div>

      <div class="mb-4">
        <label class="block text-sm font-medium text-gray-700">Upload Prescription:</label>
        <input type="file" name="prescription" id="prescription" multiple accept="image/*" class="mt-1 px-3 py-2 border border-gray-300 rounded-md block w-full">
        <div id="imagePreview" class="mt-2 flex flex-wrap gap-4"></div>
      </div>

      <div class="mb-4">
        <label class="block text-sm font-medium text-gray-700">Additional Notes:</label>
        <textarea name="notes" rows="3" class="mt-1 px-3 py-2 border border-gray-300 rounded-md block w-full"></textarea>
      </div>

      <div class="mb-4">
        <label class="block text-sm font-medium text-gray-700">Delivery Address:</label>
        <input type="text" name="deliveryAddress" class="mt-1 px-3 py-2 border border-gray-300 rounded-md block w-full">
      </div>

      <div class="mb-4">
        <label class="block text-sm font-medium text-gray-700">Delivery Time:</label>
        <select name="deliveryTime" class="mt-1 px-3 py-2 border border-gray-300 rounded-md block w-full">
          <option>Select a time slot</option>
          <option>6:00 AM - 8:00 AM</option>
          <option>8:00 AM - 10:00 AM</option>
          <option>10:00 AM - 12:00 PM</option>
          <option>12:00 PM - 2:00 PM</option>
          <option>2:00 PM - 4:00 PM</option>
          <option>4:00 PM - 6:00 PM</option>
          <option>6:00 PM - 8:00 PM</option>
          <option>8:00 PM - 10:00 PM</option>
          <option>10:00 PM - 12:00 AM</option>
          <option>12:00 AM - 2:00 AM</option>
          <option>2:00 AM - 4:00 AM</option>
          <option>4:00 AM - 6:00 AM</option>
        </select>
      </div>

      <button type="submit" id="submitBtn" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">Submit</button>

    </form>

  </div>

  <div id="successModal" class="modal">
    <div class="modal-content">
      <span class="close">&times;</span>
      <p>Prescription uploaded successfully</p>
    </div>
  </div>

  <div id="errorModal" class="modal">
    <div class="modal-content">
      <span class="close">&times;</span>
      <p>Please fill all fields</p>
    </div>
  </div>

  <style>
    .modal {
      display: none; 
      position: fixed; 
      z-index: 1; 
      left: 0;
      top: 0;
      width: 100%; 
      height: 100%; 
      overflow: auto; 
      background-color: rgba(0, 0, 0, 0.4);
    }

    .modal-content {
      background-color: #fefefe;
      margin: 15% auto; 
      padding: 20px;
      border: 1px solid #888;
      width: 30%; 
      height: 20%;
      border-radius: 5px;
    }

    .close {
      color: #aaa;
      float: right;
      font-size: 28px;
      font-weight: bold;
    }

    .close:hover,
    .close:focus {
      color: black;
      text-decoration: none;
      cursor: pointer;
    }
  </style>

  <script>
    function openModal(modalId) {
      var modal = document.getElementById(modalId);
      modal.style.display = "block";
    }

    function closeModal(modalId) {
      var modal = document.getElementById(modalId);
      modal.style.display = "none";
    }

    document.getElementById('prescription').addEventListener('change', function(event) {
      var files = event.target.files;
      var previewContainer = document.getElementById('imagePreview');
      var maxFiles = 5;
      var currentFilesCount = previewContainer.childElementCount;

      if (currentFilesCount + files.length > maxFiles) {
        alert('You can upload a maximum of 5 images.');
        event.target.value = ''; 
        return;
      }

      for (var i = 0; i < files.length; i++) {
        var file = files[i];
        var reader = new FileReader();

        reader.onload = function(e) {
          var image = document.createElement('img');
          image.src = e.target.result;
          image.classList.add('w-24', 'h-24', 'object-cover', 'rounded-md', 'mr-2', 'mb-2');
          previewContainer.appendChild(image);
        };

        reader.readAsDataURL(file);
      }
    });

    document.getElementById('uploadForm').addEventListener('submit', function(event) {
      var fileInput = document.getElementById('prescription');
      if (fileInput.files.length > 5) {
        alert('You can upload a maximum of 5 images.');
        event.preventDefault();
      } else {
        if (validateForm()) {
          openModal('successModal');
        } else {
          openModal('errorModal');
          event.preventDefault();
        }
      }
    });

    document.querySelectorAll(".close").forEach(function(closeButton) {
      closeButton.onclick = function() {
        closeModal(this.dataset.modalId);
      }
    });

    window.onclick = function(event) {
      var modals = document.querySelectorAll(".modal");
      modals.forEach(function(modal) {
        if (event.target == modal) {
          closeModal(modal.id);
        }
      });
    }

    function validateForm() {
      var patientName = document.getElementsByName("patientName")[0].value;
      var prescription = document.getElementById("prescription").files.length;
      var notes = document.getElementsByName("notes")[0].value;
      var deliveryAddress = document.getElementsByName("deliveryAddress")[0].value;
      var deliveryTime = document.getElementsByName("deliveryTime")[0].value;

      if (patientName === '' || prescription === 0 || notes === '' || deliveryAddress === '' || deliveryTime === 'Select a time slot') {
        return false;
      } else {
        return true;
      }
    }
  </script>
  </div>
</div>
@endsection

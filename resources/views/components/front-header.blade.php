<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Pharmacy College of Jhansi</title>
    <!-- Include Bootstrap CSS -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@400;700&family=Roboto:wght@400;500&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('styles.css') }}">


<style> 
/*model css start*/

.modal {
  display: none;
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%; 
  background-color: rgba(0, 0, 0, 0.5);
  justify-content: center;
  align-items: center;
}

.modal-content {
  background-color: #00204a;
  color: #fff;
  width: 500px;
  border-radius: 8px;
  padding: 20px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}

.modal-content h2 {
  margin-top: 0;
  text-align: center;
}

.modal-content form {
  display: flex;
  flex-direction: column;
  gap: 15px;
}

.modal-content input,
.modal-content select {
  padding: 10px;
  border-radius: 5px;
  border: none;
  font-size: 16px;
}

.modal-content input[type="submit"] {
  background-color: #d32f2f;
  color: #fff;
  font-weight: bold;
  cursor: pointer;
}

.modal-content input[type="submit"]:hover {
  background-color: #b71c1c;
}

.close-btn {
  background: none;
  border: none;
  color: #fff;
  font-size: 20px;
  position: absolute;
  top: 10px;
  right: 15px;
  cursor: pointer;
}

.open-modal-btn {
  padding: 10px 20px;
  background: linear-gradient(135deg, #8B4513, #003366);
  color: white;
  font-size: 16px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

.open-modal-btn:hover {
  background-color: #b71c1c;
}
.submit {
  width: 50%;
  text-align: center;
  display: block; /* Ensures the element behaves as a block-level element */
  margin: 0 auto; /* Centers the element horizontally */
}

/* Mobile view adjustments */
@media (max-width: 768px) {
  .modal-content {
    width: 95%; /* Ensure modal is responsive */
    padding: 15px;
    margin-top: 10px; /* Add margin-top for better alignment */
  }

  /* Input and Select styling */
  .modal-content input,
  .modal-content select {
    width: 100%; /* Make them full width on mobile */
    font-size: 14px; /* Adjust font size for mobile */
    padding: 12px; /* Add padding for better touch support */
    margin-bottom: 15px; /* Space between elements */
    border-radius: 5px; /* Maintain rounded corners */
    border: 1px solid #ccc; /* Add border to input/select for better visibility */
  }

  /* Open Modal Button adjustments */
  .open-modal-btn {
    display: block; /* Make the button visible on mobile */
    width: 50%; /* Set to 50% width */
    font-size: 14px; /* Adjust font size */
    text-align: center;
    height: 40px; /* Set height */
    margin: 0 auto; /* Center the button horizontally */
    padding: 10px; /* Add padding for better appearance */
  }

  .open-modal-btn:hover {
    background-color: #b71c1c;
  }

  /* Submit button styling */
  .submit {
    width: 50%; /* Set width to 50% */
    text-align: center;
    display: block; /* Block-level element */
    margin: 0 auto; /* Center horizontally */
    padding: 10px; /* Add padding */
    font-size: 16px; /* Adjust font size */
  }
}


</style>
</head>
<body>

<!-- Top Bar (Logo Section) -->
<div class="header">
    <div class="menu">
        <!-- Home icon only -->
    <a href="/" style="color: white; text-decoration: none;">
        <i class="fas fa-home"></i> <!-- Home icon -->
    </a>

        <a href="#" style="color: white; text-decoration: none;">Alumni</a>
        <a href="/career" style="color: white; text-decoration: none;">Career @ OGI</a>
        <a href="#" style="color: white; text-decoration: none;">Login</a>
        <a href="/eventhome" style="color: white; text-decoration: none;">Events</a>
        <a href="/contact" style="color: white; text-decoration: none;">Contact</a>
    </div>
</div>

<!-- Navigation Bar -->
<div class="navbar">
    <!-- Logo on the left -->
    <div class="logo">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRytcyCeHYnAg9l4JHzQipkIYIfI-AtV1NUVw&s" alt="SR College Logo">
    </div>


<!-- Nav items centered -->
<div class="nav-items">
    <div class="dropdown">
<a href="#" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
    ABOUT US
    <i class="bi bi-caret-down-fill"></i> <!-- Bootstrap dropdown icon -->
</a>

        <div class="dropdown-menu">
            <a href="/about">Introduction</a>
            <a href="/chairman">Chairman's Message</a>
            <a href="/director">Director's Message</a>
        </div>
    </div>
    <div class="dropdown">
      <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
    ACADEMICS
    <i class="bi bi-caret-down-fill"></i> <!-- Bootstrap dropdown icon -->
</a>

        <div class="dropdown-menu">
            <a href="/Infrastructure">Infrastructure & Facilities</a>
            <a href="/faculties">Faculties</a>
            <a href="/disciplines">Discipline</a>
            <a href="/homecourse">Courses</a>
            <a href="/Activities">Activities</a>
            <a href="/result">Result Analysis</a>

        </div>
    </div>
    <div class="dropdown">
<a href="#" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
    DEPARTMENTS
    <i class="bi bi-caret-down-fill"></i> <!-- Bootstrap dropdown icon -->
</a>
        <div class="dropdown-menu">
            <a href="/Pharmaceutical ">Pharmaceutical Chemistry</a>
            <a href="/Pharmaceutics">Pharmaceutics</a>
            <a href="/Pharmacognosy">Pharamacognosy</a>
            <a href="/Pharmacology">Pharamacology</a>               

        </div>
    </div>
    <a href="/traning">TRAINING & PLACEMENT</a>
    <a href="/admissionhome">ADMISSION</a>
    <div class="dropdown">
  <!-- MEDIA with Dropdown -->
<a href="#" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
    MEDIA
    <i class="bi bi-caret-down-fill"></i> <!-- Bootstrap dropdown icon -->
</a>
        <div class="dropdown-menu">
            <a href="/image-gallery">Image Gallery</a>
            <a href="/video-gallery">Video Gallery</a>
            <a href="/news-letters">Newsletter</a>

        </div>
    </div>
    @php

use App\Models\Course;
use App\Models\NaacCategory;

$course = Course::all();
$naacCategories = NaacCategory::all();



$jsonData = file_get_contents(storage_path('data/states_districts.json'));
        $statesData = json_decode($jsonData, true); 
        
@endphp

    <div class="dropdown">
<a href="#" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
    NAAC
    <i class="bi bi-caret-down-fill"></i> <!-- Bootstrap dropdown icon -->
</a>
        <div class="dropdown-menu">
            @foreach ($naacCategories as $category)
            <a href="{{ route('naachome', $category->id) }}">{{ $category->category_name }}</a>


            
            @endforeach  
            
        </div>
        
    </div>
</div>



      <button class="open-modal-btn">Enquiry Now</button>
  <div class="modal" id="enquiryModal">   
    <div class="modal-content">
      <button class="close-btn" id="closeModal">&times;</button>
      <h2>Enquiry Form</h2>
      <form id="enquiryForm">
    @csrf
    <input type="text" id="name" name="name" placeholder="Enter Name *" />
    <span class="error" id="name_error"></span>

    <input type="email" id="email" name="email" placeholder="Enter Email Address *" />
    <span class="error" id="email_error"></span>

    <input type="tel" id="mobile" name="mobile" placeholder="Enter Mobile Number *" />
    <span class="error" id="mobile_error"></span>

    <!-- ✅ State & District Row -->
    <div style="display: flex; gap: 15px; width: 100%;">
        <div style="flex: 1;">
            <select class="form-control" id="state" name="state">
                <option value="">Select State</option>
                @foreach($statesData['states'] as $state)
                    <option value="{{ $state['state'] }}">{{ $state['state'] }}</option>
                @endforeach
            </select>
            <span class="error" id="state_error"></span>
        </div>

        <div style="flex: 1;">
            <select class="form-control" id="district" name="district">
                <option value="">Select District</option>
            </select>
            <span class="error" id="district_error"></span>
        </div>
    </div>

    <!-- ✅ Program & Course Row -->
    <div style="display: flex; gap: 15px; width: 100%;">
        <div style="flex: 1; width: 100%;">
            <select id="program" name="program" style="width: 100%;">
                <option value="">Select Program Applying*</option>
                <option value="B.Pharm">Pharmacy</option>
            </select>
            <span class="error" id="program_error"></span>
        </div>

        <div style="flex: 1;  width: 100%;">
            <select id="course" name="course" style="width: 100%;">
                <option value="">Select Course *</option>
                @foreach($course as $coursename)
                    <option value="{{ $coursename->course_name }}">{{ $coursename->course_name }}</option>
                @endforeach
            </select>
            <span class="error" id="course_error"></span>
        </div>
    </div>

  <!-- ✅ Specialization & JEE Mains Row -->
<div style="display: flex; gap: 15px; width: 100%;">
    <div style="flex: 1; width: 100%;">
        <select id="specialization" name="specialization" style="width: 100%;">
            <option value="">Select Specialization</option>
            <option value="Pharmacology">Pharmacology</option>
            <option value="Pharmaceutics">Pharmaceutics</option>
            <option value="Pharmaceutical Chemistry">Pharmaceutical Chemistry</option>
            <option value="Pharmaceutical Analysis">Pharmaceutical Analysis</option>
            <option value="Pharmaceutical Biotechnology">Pharmaceutical Biotechnology</option>
            <option value="Pharmaceutical Regulatory Affairs">Pharmaceutical Regulatory Affairs</option>
            <option value="Pharmaceutical Quality Assurance">Pharmaceutical Quality Assurance</option>
            <option value="Pharmaceutical Technology">Pharmaceutical Technology</option>
        </select>
        <span class="error" id="specialization_error"></span>
    </div>

    <div style="flex: 1; width: 100%;">
        <select id="jee_mains" name="jee_mains" style="width: 100%;">
            <option value="">Select JEE Mains *</option>
            <option value="Yes">Yes</option>
            <option value="No">No</option>
        </select>
        <span class="error" id="jee_mains_error"></span>
    </div>
</div>

   
    <label>
        <input type="checkbox" id="agree" name="agree" value="1" />
        I agree to receive information regarding my submitted enquiry on Pharmacy College of Jhansi.
    </label>
    <span class="error" id="agree_error"></span>

    <input type="submit" class="submit" value="Submit" />
</form>


    </div>
  </div>
    <div class="mobile-menu">
        <i class="fas fa-bars" onclick="toggleSidebar()"></i>
    </div>
</div>
  
</div>




<!-- Sidebar for mobile view -->
<div class="sidebar" id="sidebar">

  <ul style="margin-left:-60px">
    <li class="nav-item">
      <a href="#" style="color:#fff">ABOUT US
          <i class="bi bi-caret-down-fill"></i> <!-- Bootstrap dropdown icon -->
      
      </a>
      <ul class="dropdown">
        <li><a href="/about">INTRODUCTION</a></li>
        <li><a href="/chairman">Chairman's Message</a></li>
        <li><a href="/director">Director's Message</a></li>
      </ul>
    </li>
    <li class="nav-item">
      <a href="#" style="color:#fff" >Academics</a>
      <ul class="dropdown">
     <a href="/Infrastructure">Infrastructure & Facilities</a>
            <a href="/faculties">Faculties</a>
            <a href="/discipline">Discipline</a>
            <a href="/courses">Courses</a>
            <a href="/Activities">Activities</a>
            <a href="/result">Result Analysis</a>
      </ul>
    </li>
    <li class="nav-item">
      <a href="#" style="color:#fff">Departments </a>
      <ul class="dropdown">
        <li><a href="/Pharmaceutical ">Pharmaceutical </a></li>
        <li><a href="/Pharmaceutical">Pharmaceutical </a></li>
        <li><a href="/Pharmacognosy">Pharmacognosy</a></li>
        <li><a href="/Pharmacology">Pharmacology</a></li>
      </ul>
    </li>
      <li class="nav-item"><a href="/traning"  style="color:#fff">Training & Placement</a></li>
    <li class="nav-item"><a href="/admissionhome"  style="color:#fff">Admission</a></li>
    <li class="nav-item">
      <a href="#"  style="color:#fff">Media </a>
      <ul class="dropdown">
  <a href="/image-gallery"  style="color:#fff">Image Gallery</a>
            <a href="/video-gallery">Video Gallery</a>
            <a href="/news-letters">Newsletter</a>
      </ul>
    </li>
    <li class="nav-item">
      <a href="#"  style="color:#fff">Naac</a>
      <ul class="dropdown">
          
            @foreach ($naacCategories as $category)
           <a href="{{ route('naachome', $category->id) }}">{{ $category->category_name }}</a> 
            @endforeach
      </ul>
    </li>
  
  </ul>



</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
  @if(session('success'))
    <script>
        Swal.fire({
            title: "Success!",
            text: "{{ session('success') }}",
            icon: "success",
            confirmButtonColor: "#3085d6",
            confirmButtonText: "OK"
        });
    </script>
@endif
</script>

   <script>
    $(document).ready(function () {
       
        function loadDistricts(selectedDistrict = null) {
            var state = $('#state').val();
            if (state) {
                var statesData = @json($statesData['states']); // Blade directive to pass data
                var selectedState = statesData.find(item => item.state === state);
                var districtDropdown = $('#district');

                districtDropdown.empty().append('<option value="">Select District</option>');

                if (selectedState) {
                    selectedState.districts.forEach(district => {
                        districtDropdown.append(
                            $('<option>', { 
                                value: district, 
                                text: district, 
                                selected: district === selectedDistrict // Retain the old value
                            })
                        );
                    });
                }
            }
        }

        // Trigger district load when state changes
        $('#state').change(function () {
            loadDistricts();
        });

        // Set the old state and district values
        var oldState = @json(old('state'));
        var oldDistrict = @json(old('district'));

        if (oldState) {
            $('#state').val(oldState).trigger('change'); // Set old state and trigger district load
            loadDistricts(oldDistrict); // Load districts with old district selected
        } else {
            loadDistricts(); // Load districts without old values
        }
    });
</script>
<script>
$(document).ready(function () {
    $("#enquiryForm").submit(function (e) {
        e.preventDefault();
        $(".error").text(""); // Reset previous errors

        $.ajax({
            url: "{{ route('submit.form') }}",
            method: "POST",
            data: $(this).serialize(),
            dataType: "json",
            success: function (response) {
    Swal.fire({
        icon: 'success',
        title: 'Success!',
        text: response.success,
        confirmButtonColor: '#3085d6',
        
    }).then(() => {
      document.getElementById("enquiryModal").style.display = "none";

    });
},


            error: function (xhr) {
                if (xhr.status === 422) {
                    var errors = xhr.responseJSON.errors;
                    $.each(errors, function (key, value) {
                      $("#" + key + "_error").text(value[0]).css("color", "red");
                    });
                }
            }
        });
    });
});
</script>

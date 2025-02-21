<!--footer start-->
<footer class="site-footer">
  <div class="footer-wrapper">
<div class="logo-section">

@php

use App\Models\Address;

$address = Address::find(1);

@endphp
  <p>PHARMACY COLLEGE</p>
        <li style=" list-style: none;" class="details-footer">Address: {{  $address->address }}  {{ $address->pin_no }}</li>
        <li style=" list-style: none;">Email: {{ $address->email }}</li>
        <li style=" list-style: none;">Phone: +91 {{ $address->contact_no }}</li>

</div>

    <div class="links-section">
      <div class="link-group">
        <h3>About</h3>
        <ul>
          <li><a href="#">Our Story</a></li>
          <li><a href="#">Mission &amp; Vision</a></li>
          <li><a href="#">Our Campus</a></li>
          <li><a href="#">Accreditations</a></li>
        </ul>
      </div>
      <div class="link-group">
        <h3>Quick Links</h3> 
        <ul>
          <li><a href="{{ route('admissionhome')  }}">Admissions</a></li>
          <li><a href="{{ route('homecourse') }}">Courses</a></li>
          <li><a href="{{ route('faculties') }}">Faculty</a></li>
          <li><a href="{{ route('eventhome') }}">Events</a></li>
        </ul>
      </div>
      <div class="link-group">
        <h3>Contact</h3>
        <ul>
          <li><a href="">Support</a></li>
          <li><a href="{{ route('admissionhome') }}">FAQ</a></li>
          <li><a href="{{ url('career') }}">Careers</a></li>
          <li><a href="{{ url('contact') }}">Contact Us</a></li>
        </ul>
      </div>
      <div class="link-group">
        <h3>Stay Connected</h3>
        <ul>
          <li><a href="{{ url('news-letters')  }}">Newsletter</a></li>  
          <li><a href="{{ url('image-gallery') }}">Blog</a></li>
          <li><a href="{{ url('video-gallery') }}">Social Media</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="credits-section">
    <div class="social-links">
      <a href="#" class="social-icon"><i class="fab fa-facebook"></i></a>  
      <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
      <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
      <a href="#" class="social-icon"><i class="fab fa-linkedin"></i></a>
    </div>
    <p>
    &copy; 2025 Pharmacy College. All Rights Reserved. 
    Powered by ACT T Connect
  </p>

  </div>
</footer>
<!--footer end-->


<!-- Include Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

<script>
   // ✅ SIDEBAR TOGGLE FUNCTIONALITY
   function toggleSidebar() {
        const sidebar = document.getElementById('sidebar');
        sidebar.classList.toggle('active');
    }
// model js 

    const openModalBtn = document.querySelector(".open-modal-btn");
    const modal = document.querySelector("#enquiryModal");
    const closeModalBtn = document.querySelector("#closeModal");

    openModalBtn.addEventListener("click", () => {
      modal.style.display = "flex";
    });

    closeModalBtn.addEventListener("click", () => {
      modal.style.display = "none";
    });

    window.addEventListener("click", (e) => {
      if (e.target === modal) {
        modal.style.display = "none";
      }
    });
    
    // sidebar js

  const navItems = document.querySelectorAll('.nav-item');

  navItems.forEach(item => {
    item.addEventListener('click', function () {
      const dropdown = this.querySelector('.dropdown');
      if (dropdown) {
        dropdown.style.display = dropdown.style.display === 'block' ? 'none' : 'block';
      }
    });
  });


    
</script>

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

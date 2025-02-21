<x-front-header/>
<body>

<!-- Carousel -->
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        @foreach($BannerImage as $index => $image)
            <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                <img src="{{ asset($image->image) }}" class="d-block w-100" alt="Banner Image">
            </div>
        @endforeach
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<!-- Carousel -->

<!--notificaton section start-->
    <div class="main-container">
    

        <div class="right-container">
            <div class="heading">Exciting News and Updates</div>
            <div class="para">We bring you the latest updates and news to keep you informed about the important events happening around us. Stay tuned for more exciting content as we continuously update this section with fresh news and events from various domains.We bring you the latest updates and news to keep you informed about the important events happening around us. Stay tuned for more exciting content as we continuously update this section with fresh news and events from various domains.</div>
            <img src="https://media.istockphoto.com/id/1165053718/photo/laboratory-research-medical-and-scientific-chemical-glass-flasks-for-background.webp?a=1&b=1&s=612x612&w=0&k=20&c=uyhaTgTiWlPtYd8kInoUJsQrB8e1VMKJ5lOOo03SkuA=" alt="Image Description">
        </div>
@php
    $newsEvents = $NoticeBoard->where('category', 'News & Event');
    $notices = $NoticeBoard->where('category', 'Notice & Announcement');
@endphp
@if($newsEvents->count() > 0)
            <div class="news-container">
<div class="news-events">
  <div class="headernew">NEWS & EVENTS 2025</div>
  <div class="scroll-container">
  <ul>
                @foreach($newsEvents as $news)
                    <li>{{ $news->title }} : 
                        <a href="{{ asset(''.$news->upload_pdf) }}" target="_blank">Click on link</a>
                    </li>
                @endforeach
            </ul>
  </div>
  <div class="buttons">
    <button id="scroll-up">⬆</button>
    <button id="scroll-down">⬇</button>
  </div>
</div>

@endif
      
                
                
@if($notices->count() > 0)       
<div class="news-events">
  <div class="headernew">NOTICE & ANNOUNCEMENTS</div>
  <div class="scroll-container">
  <ul>
            @foreach($notices as $notice)
                <li>{{ $notice->title }} : 
                    <a href="{{ asset(''.$notice->upload_pdf) }}" target="_blank">Click on link</a>
                </li>
            @endforeach
        </ul>
  </div>
  <div class="buttons">
    <button id="scroll-up">⬆</button>
    <button id="scroll-down">⬇</button>
  </div>
</div>
@endif

     </div>
    </div>
<!--notification section end-->



<!--why section start-->
 <div class="container" style="margin-top:5px;">
    <h1>Why PCJ?</h1>
    <p>
      As the No. 1 Pharmacy College in Jhanshi, it's the top choice for pharmacy scholars seeking admission through state university counseling. The institute boasts state-of-the-art infrastructure, a welcoming atmosphere, and a student-friendly environment, making it the ideal place for your academic journey.
    </p>
    <div class="content">
      <div class="recruiters">

        <div class="logos">
          <!-- Add images or placeholder logos here -->
          <img src="https://pharmacy.svpm.org.in/uploads/achievements/17319944741.jpg" alt="Company 1">

          <!-- Repeat for other logos -->
        </div>
      </div>
<div class="features">
  <div class="feature">
    <div class="icon spin"><i class="fas fa-flask fa-3x"></i></div>
    <p>Integration of practical experiences, including lab work, simulations, and clinical rotations.</p>
  </div>
  <div class="feature">
    <div class="icon spin"><i class="fas fa-briefcase fa-3x"></i></div>
    <p>High employment rates and successful job placements for graduates.</p>
  </div>
  <div class="feature">
    <div class="icon spin"><i class="fas fa-hands-helping fa-3x"></i></div>
    <p>Comprehensive support services, including academic advising, counseling, and extracurricular activities.</p>
  </div>
  <div class="feature">
    <div class="icon spin"><i class="fas fa-stethoscope fa-3x"></i></div>
    <p>Collaborations with healthcare institutions for practical training.</p>
  </div>
  <div class="feature">
    <div class="icon spin"><i class="fas fa-building fa-3x"></i></div>
    <p>Relationships with pharmaceutical companies and healthcare organizations for internships and jobs.</p>
  </div>
  <div class="feature">
    <div class="icon spin"><i class="fas fa-heartbeat fa-3x"></i></div>
    <p>Involvement in community health initiatives and public health outreach programs.</p>
  </div>
</div>
</div>
  </div>
<!--why section start-->
<!--Department start-->
        <div class="container-fluid department-section">
        <!-- First Row: Left Heading & Paragraph, Right Card -->
        <div class="row mb-4">
            <div class="col-md-9 text-content" style="margin-top:20px">
                <div>
                    <h1>Departments</h1>
                    <p>The vision of the institute is to provide quality education to the youngsters so that they can contribute to the development of the nation The vision of the the institute is to provide quality education to the youngsters so that they can contribute to the development of the nation. We not only aim at the theoretical knowledge but also provide students, the exposure to the developing society so that they can build their future better.The vision of the the institute is to provide quality education to the youngsters so that they can contribute to the development of the nation. We not only aim at the theoretical knowledge but also provide students, the exposure to the developing society so that they can build their future better.The vision of the the institute is to provide quality education to the youngsters so that they can contribute to the development of the nation. We not only aim at the theoretical knowledge but also provide students, the exposure to the developing society so that they can build their future better....</p>
                </div>
            </div>
            <div class="col-md-3" style="margin-top:20px">
                <div class="card department-card">
                    <img src="https://images.unsplash.com/photo-1562243061-204550d8a2c9?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Nnx8cGhhcm1hY3l8ZW58MHx8MHx8fDA%3D" class="card-img-top" alt="Pharmaceutics">
                    <div class="card-body">
                        <h5 class="department-card-title">Pharmaceutics</h5>
                        <a href="#" class="arrow-btn">&rarr;</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Second Row: 4 Cards -->
        <div class="row">
            <div class="col-md-3 mb-4">
                <div class="card department-card">
                    <img src="https://plus.unsplash.com/premium_photo-1732319199786-33a2eaed7b7c?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NXx8UGhhcm1hY29nbm9zeXxlbnwwfHwwfHx8MA%3D%3D" class="card-img-top" alt="Pharmacognosy">
                    <div class="card-body">
                        <h5 class="department-card-title">Pharmacognosy</h5>
                        <a href="#" class="arrow-btn">&rarr;</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card department-card">
                    <img src="https://media.istockphoto.com/id/2149711865/photo/artificial-intelligence-in-healthcare-ai-health-digital-healthcare-provider-telemedicine.webp?a=1&b=1&s=612x612&w=0&k=20&c=cOBwKKPhUbBFtbEe6suYxDLnEbe8pnzmLSQiRe_9w4I=" class="card-img-top" alt="Pharmacology">
                    <div class="card-body">
                        <h5 class="department-card-title">Pharmacology</h5>
                        <a href="#" class="arrow-btn">&rarr;</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card department-card">
                    <img src="https://media.istockphoto.com/id/1270536518/photo/pollution-college-background-conceptual-medical-3d-illustration-test-tubes-and-microscope-in.webp?a=1&b=1&s=612x612&w=0&k=20&c=ZzkRvMnjwkX0A-3vR-vqOWvEkJgzd65M_UFy7tfYyA4=" class="card-img-top" alt="Pharmaceutical Chemistry">
                    <div class="card-body">
                        <h5 class="department-card-title">Pharmaceutical</h5>
                        <a href="#" class="arrow-btn">&rarr;</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card department-card">
                    <img src="https://media.istockphoto.com/id/1320260118/photo/standard-quality-control-certification-assurance-guarantee-check-mark-sign-3d-and-copy-space.webp?a=1&b=1&s=612x612&w=0&k=20&c=C3ZQrDC2S4Px6S1z5HHW-L5UcUe90hJlzS0fSkEdDp0=" class="card-img-top" alt="Quality Assurance">
                    <div class="card-body">
                        <h5 class="department-card-title">Quality Assurance</h5>
                        <a href="#" class="arrow-btn">&rarr;</a>
                    </div>
                </div>
            </div>
        </div>
    </div>





<!--Deoartment end -->

<!--testimonal start-->
  <div class="testinomal">
<div class="container">
	
	<div class="contents-wraper">
		
	   <div class="head">
      <h3>Ratings & Reviews</h3>

     </div>

     <!-- <section class="testRow"> -->
		<section class="testRow" id="test" >
		
			<div class="testItem active">
			  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRuNhTZJTtkR6b-ADMhmzPvVwaLuLdz273wvQ&s" alt="">
				<h3>Jane Doe</h3>
				<h4>San Francisco, USA</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
			</div>

	<div class="testItem active">
			  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRuNhTZJTtkR6b-ADMhmzPvVwaLuLdz273wvQ&s" alt="">
				<h3>Jane Doe</h3>
				<h4>San Francisco, USA</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
			</div>

			<div class="testItem active">
			  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRuNhTZJTtkR6b-ADMhmzPvVwaLuLdz273wvQ&s" alt="">
				<h3>Jane Doe</h3>
				<h4>San Francisco, USA</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
			</div>

			<div class="testItem active">
			  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRuNhTZJTtkR6b-ADMhmzPvVwaLuLdz273wvQ&s" alt="">
				<h3>Jane Doe</h3>
				<h4>San Francisco, USA</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
			</div>

	<div class="testItem active">
			  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRuNhTZJTtkR6b-ADMhmzPvVwaLuLdz273wvQ&s" alt="">
				<h3>Jane Doe</h3>
				<h4>San Francisco, USA</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
			</div>

		</section>

		<section class="indicators">
			<div class="dot active" attr='0' onclick="switchTest(this)"></div>
			<div class="dot" attr='1' onclick="switchTest(this)"></div>
			<div class="dot" attr='2' onclick="switchTest(this)"></div>
			<div class="dot" attr='3' onclick="switchTest(this)"></div>
			<div class="dot" attr='4' onclick="switchTest(this)"></div>
		</section>
    
  <div class="button">
    <div class="button1">SUBMIT REVIEW</div>
    <div class="button2">VIEW ALL</div>

  </div>
	</div>
</div>
  </div>
  <script>
    function toggleSidebar() {
    const sidebar = document.getElementById('sidebar');
    sidebar.classList.toggle('active');
}

// ✅ TESTIMONIAL SLIDER FUNCTIONALITY
let testSlide = document.querySelectorAll('.testinomal .testItem');
let dots = document.querySelectorAll('.testinomal .dot');
let counter = 0;
let deleteInterval;

// Add click event to indicators
function switchTest(currentTest) {
    currentTest.classList.add('active');
    let testId = currentTest.getAttribute('attr');

    if (testId > counter) {
        testSlide[counter].style.animation = 'next1 0.5s ease-in forwards';
        counter = testId;
        testSlide[counter].style.animation = 'next2 0.5s ease-in forwards';
    } else if (testId == counter) {
        return;
    } else {
        testSlide[counter].style.animation = 'prev1 0.5s ease-in forwards';
        counter = testId;
        testSlide[counter].style.animation = 'prev2 0.5s ease-in forwards';
    }
    indicators();
}

// Update active indicator
function indicators() {
    dots.forEach(dot => dot.classList.remove('active'));
    dots[counter].classList.add('active');
}

// Slide testimonials automatically
function slideNext() {
    testSlide[counter].style.animation = 'next1 0.5s ease-in forwards';
    counter = (counter >= testSlide.length - 1) ? 0 : counter + 1;
    testSlide[counter].style.animation = 'next2 0.5s ease-in forwards';
    indicators();
}

// Auto slide function
function autoSliding() {
    deleteInterval = setInterval(slideNext, 2000);
}
autoSliding();

// Stop auto-slide when mouse enters indicators
document.querySelector('.testinomal .indicators').addEventListener("mouseover", () => {
    clearInterval(deleteInterval);
});

document.querySelector('.testinomal .indicators').addEventListener("mouseout", autoSliding);


// ✅ NEWS SCROLL FUNCTIONALITY (Fully Fixed)
const scrollContainer = document.querySelector(".scroll-container ul");
const upButton = document.getElementById("scroll-up");
const downButton = document.getElementById("scroll-down");
const links = document.querySelectorAll(".scroll-container ul li a");

let scrollPosition = 0;
const itemHeight = 40;
let autoScroll = true;
let newsScrollInterval;

// Function to update scrolling
function updateScroll() {
    scrollContainer.style.transform = `translateY(${scrollPosition}px)`;
}

// Manual scroll up
upButton.addEventListener("click", () => {
    stopNewsAutoScroll();
    scrollPosition += itemHeight;
    if (scrollPosition > 0) scrollPosition = 0;
    updateScroll();
});

// Manual scroll down
downButton.addEventListener("click", () => {
    stopNewsAutoScroll();
    scrollPosition -= itemHeight;
    const maxScroll = -scrollContainer.scrollHeight + 150;
    if (scrollPosition < maxScroll) scrollPosition = maxScroll;
    updateScroll();
});

// Auto-scroll function
function startNewsAutoScroll() {
    stopNewsAutoScroll(); // Stop any previous interval before starting a new one
    autoScroll = true;
    newsScrollInterval = setInterval(() => {
        if (autoScroll) {
            scrollPosition -= 1;
            const maxScroll = -scrollContainer.scrollHeight + 150;
            if (scrollPosition < maxScroll) scrollPosition = 0;
            updateScroll();
        }
    }, 50);
}

// Stop auto-scroll completely
function stopNewsAutoScroll() {
    autoScroll = false;
    clearInterval(newsScrollInterval);
}

function restartNewsAutoScroll() {
    if (!autoScroll) {
        startNewsAutoScroll();
    }
}

scrollContainer.addEventListener("mouseenter", stopNewsAutoScroll);
scrollContainer.addEventListener("mouseleave", restartNewsAutoScroll);

// **Stop auto-scroll when clicking on any link**
links.forEach(link => {
    link.addEventListener("click", (event) => {
        stopNewsAutoScroll(); // Stop scrolling
        event.stopPropagation(); // Stop event bubbling
    });
});

startNewsAutoScroll();



// 
    // Function to toggle the dropdown menu visibility
    function toggleDropdown(event) {
        event.preventDefault(); // Prevent the default link action
        const dropdownMenu = event.target.nextElementSibling;

        if (dropdownMenu.style.display === "none" || dropdownMenu.style.display === "") {
            // Close all other open dropdowns
            document.querySelectorAll('.dropdown-menu').forEach(menu => menu.style.display = "none");
            // Open the current dropdown
            dropdownMenu.style.display = "block";
        } else {
            // Close the dropdown if it's already open
            dropdownMenu.style.display = "none";
        }
    }

    // Close the dropdown if clicked outside
    document.addEventListener("click", function (event) {
        const dropdowns = document.querySelectorAll('.dropdown');
        dropdowns.forEach(dropdown => {
            if (!dropdown.contains(event.target)) {
                const dropdownMenu = dropdown.querySelector('.dropdown-menu');
                if (dropdownMenu) dropdownMenu.style.display = "none";
            }
        });
    });
  </script>
<!--testimonol end-->

</body>

<x-front-footer/>

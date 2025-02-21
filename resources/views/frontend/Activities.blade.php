<x-front-header/>
<style>
    /* Your existing CSS... */

    .pharma-container {
        max-width: 1460px;
        margin: 0 auto;
        padding: 20px;
    }

    .pharma-header-section {
        background-color: #800000;
        color: white;
        padding: 1px;
        text-align: left;
        display: flex;
        align-items: center;
    }

    .pharma-header-section i {
        margin-left: 30px;
        font-size: 1rem;


    }

    .pharma-header-section p {
        margin: 0;
        font-size: 1rem;
        margin-left: 5px;
        text-shadow: none;
            font-family: 'Poppins', sans-serif;

    }

    /* Content Layout */
    .content-wrapper {
        display: flex;
        margin: 20px;
    }

    .sidebar-menu {
        width: 350px;
        padding: 5px;
        color: white;
    }

    .sidebar-menu ul {
        list-style: none;
        padding: 0;
            font-family: 'Poppins', sans-serif;

        margin: 0;
    }

    .menu-option {
        padding:5px;
        cursor: pointer;
        transition: background 0.3s;
        background-color: navy; /* Default button color */
        color: white;
        text-align: center;
        margin-bottom: 5px;
         font-family: 'Poppins', sans-serif;


    }

    .menu-option:hover,
    .menu-option.active {
        background-color: #800000; /* Active button color */
    }

.photo-gallery {
    display: grid;
    grid-template-columns: repeat(3, 1fr); /* 3 images per row */
    gap: 20px;
    border: 1px solid #ddd;
    height:400px;
    width:1100px;
        padding:20px 20px;
}

.photo-card {
    border: 1px solid #ddd;
    padding:20px 20px;
    background: white;
    text-align: center;

    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 10px; /* Space between image and heading */
    justify-content: center;
    height:300px;
}

.photo-card img {
    width: 110%;
    height: 300px; /* Slightly reduced to maintain padding */
    object-fit: cover; /* Crop images to fit uniformly */
    max-width: 400px; /* Ensure spacing inside the card */
    margin-bottom: 10px; /* Space below image */
    padding:20px 20px;
}

.photo-card p {
    font-size: 16px; /* Adjust text size */
    font-weight: bold; /* Make it more visible */
    color: #333; /* Darker text for better readability */
    margin: 0; /* Remove default margin */
        font-family: 'Poppins', sans-serif;

}



    .hidden {
        display: none;
    }
    
    /**/
    
.content-box {
    width: 100%;
    max-width: 1440px;
    background-color: lightblue;
    padding: 20px;
    box-sizing: border-box;
    bottom:20px;
}

.heading {
    font-size: 24px;
    margin-bottom: 10px;
 font-family: 'Poppins', sans-serif;

}

.para {
    font-size: 16px;
    margin-bottom: 20px;
        font-family: 'Poppins', sans-serif;

}

.content-row {
    display: flex;
    justify-content: space-between;
    gap: 20px; /* Adds 20px gap between the list and the image */
}

.list-left {
    list-style-type: none;
    padding: 0;
    width: 48%; /* Adjusted width to fit in one row */
                font-family: 'Poppins', sans-serif;
}

.list-left li {
    margin: 5px 0;


}

.image-right {
    width: 48%; /* Adjusted width to fit in one row */
    height: auto;
}


.activities-heading {
    margin-left:120px;
  font-family: 'Poppins', sans-serif;

}

.activities-heading h1 {
    font-size: 32px;
    font-weight: bold;
    font-family:;
    margin: 10px;
       font-family: 'Poppins', sans-serif;


}

/**/
/* Conference Box Styling */
.conference-box {
    background-color: #d6eaf8;
    padding: 20px 20px; /* 20px padding on all sides */
    max-width:1460px;
    margin-left:20px;
 font-family: 'Poppins', sans-serif;
 margin-bottom:20px;
} 

.conference-title {
    font-size: 24px;
    font-weight: bold;
    color: #2c3e50;
    margin-bottom: 15px;
                font-family: 'Poppins', sans-serif;
}

.conference-description {
    font-size: 14px;
    line-height: 1.6;
    color: #34495e;
    margin-bottom: 20px;
     font-family: 'Poppins', sans-serif;
}

.btn-abstract {
    background-color:navy;
    color: #fff;
    padding: 10px 20px;
    border-radius: 4px;
    text-decoration: none;
    font-weight: bold;
    display: inline-block;
    margin-bottom: 20px;
}

.btn-abstract:hover {
    background-color: #2980b9;
}

.speaker-listing {
    list-style: none;
    padding-left: 0;
}
.speaker-item {
    font-size: 14px;
    color: #34495e;
    margin-bottom: 10px;
    padding-left: 20px; /* Adds space to the left of the text */
    list-style-type: square; /* Changes list item decoration to a square */           
    font-family: 'Poppins', sans-serif;
}


.conference-img {
    max-width: 100%;
    height: auto;
    border-radius: 8px;
}

/* Mobile Responsiveness */
@media only screen and (max-width: 768px) {
    
    .activities-heading{
        margin-left:70px;
    }
    .pharma-container {
        padding: 10px;
    }

    .pharma-header-section {
        padding: 10px;
        flex-direction: column;
        text-align: center;
    }

    .pharma-header-section i {
        margin-left: 0;
        font-size: 1.5rem;
    }

    .pharma-header-section p {
        font-size: 1.2rem;
        margin-left: 0;
    }

    /* Content Layout */
    .content-wrapper {
        flex-direction: column;
        margin: 10px;
    }

    .sidebar-menu {
        width: 100%;
        padding: 10px;
        margin-bottom: 20px;
    }

    .sidebar-menu ul {
        font-size: 1rem;
    }

    .menu-option {
        padding: 10px;
        font-size: 1rem;
    }

    .photo-gallery {
        grid-template-columns: 1fr; /* Stack photos vertically */
        width: 100%;
        padding: 10px;
        height: auto;
    }

    .photo-card img {
        width: 100%;
        height: auto; /* Adjust height to maintain aspect ratio */
        padding: 0;
    }

    .photo-card p {
        font-size: 14px;
    }

    .content-box {
        padding: 10px;
    }

    .content-row {
        flex-direction: column;
        gap: 10px;
    }

    .list-left, .image-right {
        width: 100%;
    }

    .conference-box {
        padding: 10px;
    }

    .conference-title {
        font-size: 20px;
    }

    .conference-description {
        font-size: 12px;
    }

    .btn-abstract {
        padding: 8px 16px;
    }

    .speaker-item {
        font-size: 12px;
    }
}

@media only screen and (max-width: 480px) {
    .pharma-header-section i {
        font-size: 1.2rem;
    }

    .pharma-header-section p {
        font-size: 1rem;
    }

    .menu-option {
        font-size: 0.9rem;
        padding: 8px;
    }

    .photo-gallery {
        grid-template-columns: 1fr; /* Stack photos vertically */
    }

    .photo-card img {
        height: 200px; /* Adjust height to maintain card balance */
    }

    .content-row {
        gap: 5px;
    }

    .list-left, .image-right {
        width: 100%;
    }

    .conference-title {
        font-size: 18px;
    }

    .conference-description {
        font-size: 12px;
    }

    .btn-abstract {
        font-size: 0.9rem;
        padding: 6px 12px;
    }

    .speaker-item {
        font-size: 10px;
    }
}


</style>

@php


use App\Models\ActivityCategory;
use App\Models\Activity;
$ActivityCategory= ActivityCategory::all();
$Activity = Activity::all();
$firstCategory = $ActivityCategory->first();


@endphp
<body>
    <div class="pharma-header-section">
        <a href="/" style="color: white; text-decoration: none;">
            <i class="fas fa-home"></i> <!-- Home icon -->
        </a>
        <p><a href="/" style="color: white; text-decoration: none;" onmouseover="this.style.textDecoration='none'" onmouseout="this.style.textDecoration='none'"> </a></p> / Activities
    </div>
    <div class="activities-heading">
        <h1>Activities</h1>
    </div>

    <div class="content-wrapper">
    
        <aside class="sidebar-menu">
            <ul id="menu">
            @foreach ($ActivityCategory as $category)
            <li class="menu-option" onclick="fetchActivities({{ $category->id }})">
                {{ $category->category_name }}
            </li>
        @endforeach
                
            </ul>
        </aside>

        <section class="gallery-section">
    <div class="photo-gallery" id="gallery-section">

    </div>
</section>


    </div>
            
<div class="conference-box">
    <h2 class="conference-title">AICTE Sponsored National E-Conference-2022</h2>
    <p class="conference-description">
        Oriental College of Pharmacy, Bhopal successfully organised AICTE sponsored 2-Day National E-Conference on “Herbal Era- Role of Indian Herbal Medicine for Combating Covid 19: Scientific and medical Aspects” under GOC Scheme from 27th -28th Jan 2022. Programme was graced by Chief Guest Dr.V.K. Dixit (Ex-Prof. & Head, Dept. of Pharmaceutical Sciences, Dr. H.S.Gour Central University, Sagar, M.P.) and Special Guest Dr. M.L. Kori (Member M.P. State PCI, New Delhi). During the 2 days National E-Conference, the following keynote speakers gave their valuable talk and shared their scientific experiences.
    </p>
    <a href="#" class="btn-abstract"><i class="fas fa-book"></i> Abstract Book</a>

    <div class="row align-items-center">
        <div class="col-md-8">
            <ul class="speaker-listing">
                <li class="speaker-item">Dr. Vimal Kumari (IC Provost, ITM(SLS) Baroda University & Dean School of Pharmacy, ITM(SLS) Baroda University, Baroda, Gujarat) discussed about the Herbal Drugs in the Management of Lifestyle Disorder & Combating Covid-19.</li>
                <li class="speaker-item">Dr. N.P. Yadav (Principal Scientist, CSIR-CIMAP, Lucknow, UP) addressed about the Role of Indian Herbal Medicine for Combating Covid-19.</li>
                <li class="speaker-item">Dr. Vinod D Rangari (Professor & Head, Guru Ghasidas Vishwavidyalaya Bilaspur, C.G.) explained about the Old molecule-New potential, Bioavailability Studies of Antiretroviral Drugs.</li>
                <li class="speaker-item">Dr. Gautam Prakash (Principal, Smt. Sharadchandrika Suresh Patil College of Pharmacy, Jalgaon, M.H.) talked about the challenges and opportunities in drug discovery from natural sources.</li>
                <li class="speaker-item">Dr. Millind Pande (Professor and Head, Dept. of Pharmacognosy, Teerthanker Mahaveer College of Pharmacy, Teerthanker Mahaveer University, Moradabad, U.P.) elaborated about the Potential Traditional Indian / AYUSH Formulation for the Management of COVID-19.</li>
            </ul>
        </div>
        <div class="col-md-4 text-center">
            <img src="https://cdn.dribbble.com/users/8421911/screenshots/16086558/media/86b82853bb35a710a2f55d7ddd0c123e.jpg" alt="Conference Banner" class="conference-img">
        </div>
    </div>
</div>



</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    function fetchActivities(categoryId) {
        $.ajax({
            url: "{{ url('get-activities') }}/" + categoryId,
            type: "GET",
            success: function (response) {
                $("#gallery-section").html(""); // Clear old data
                if (response.activities.length > 0) {
                    $.each(response.activities, function (index, activity) {
                        $("#gallery-section").append(`
                            <div class="photo-card">
                                <img src="${activity.image}" alt="${activity.activity_name}">
                                <p>${activity.title}</p>
                            </div>
                        `);
                    });
                } else {
                    $("#gallery-section").html("<p>No activities found.</p>");
                }
            }
        });
    }
    $(document).ready(function () {
        @if ($firstCategory)
            fetchActivities({{ $firstCategory->id }});
        @endif
    });
</script>
<script>
    function toggleSidebar() {
        const sidebar = document.getElementById('sidebar');
        sidebar.classList.toggle('active');
    }
    function changeActive(element, sectionId) {
        // Remove active class from all menu options
        document.querySelectorAll('#menu .menu-option').forEach(li => li.classList.remove('active'));

        // Add active class to the clicked element
        element.classList.add('active');

        // Hide all gallery sections
        document.querySelectorAll('.photo-card').forEach(card => card.classList.add('hidden'));

        // Show the selected gallery section
        document.querySelectorAll(`#${sectionId}`).forEach(card => card.classList.remove('hidden'));
    }
    
    // 
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

</script>
<x-front-footer/>

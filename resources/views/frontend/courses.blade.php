<x-front-header/>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
        }
        h2 {
    font-size: 2em;
    color: #800000;
    font-weight: 500;
}

        .header-section {
            background-color: #800000;
            color: white;
            padding: 1px;
            text-align: left;
            display: flex;
            align-items: center;
            padding-left: 20px;
            padding-right: 20px;
        }

        .header-section i {
            margin-left: 10px;
            font-size: 1rem;
        }

        .header-section p {
            margin: 0;
            font-size: 1rem;
            margin-left: 5px;
        }

        .courses-container {
            margin: 20px auto;
            width: calc(100% - 40px);
            max-width: 1460px;
        }

        .course-card {
            border: 1px solid #ddd;
            margin-bottom: 20px;
            background: #fff;
        }
        .course-header {
            background: #800000;
            color: #fff;
            font-weight: bold;
            padding: 8px 15px;
            font-size: 18px;
        }
        .course-body {
            padding: 15px;
        }
        .course-info {
            background: #f8f9fa;
            padding: 10px;
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            font-weight: bold;
            font-size: 14px;
        }
        .course-description {
            font-size: 14px;
            margin-top: 10px;
        }
        .eligibility {
            font-weight: bold;
            font-size: 14px;
        }
        .light-blue {
            background: #e9f2fb;
        }
    </style>

<body>
<div class="header-section">
    <a href="/" style="color: white; text-decoration: none;">
        <i class="fas fa-home"></i>
    </a>
    <p><a href="/" style="color: white; text-decoration: none;" onmouseover="this.style.textDecoration='none'" onmouseout="this.style.textDecoration='none'">/ Courses</a></p>
</div>

<div class="courses-container">
    <h2>Courses</h2>

    @foreach($courses as $course)
           
                <div class="course-card">
                    <div class="course-header">{{ $course->course_name }}</div>
                    <div class="course-info">
                        <span>Mode - {{ $course->mode }}</span>
                        <span>Duration - {{ $course->duration }}</span>
                        <span>Seats - {{ $course->seats }}</span>
                        <span>Entrance Test - {{ $course->entrance_test }}</span>
                    </div>
                    <div class="course-body">
                        <p class="course-description">
                            {{ $course->description }}
                        </p>
                        <p class="eligibility">
                            <strong>Eligibility Criteria:</strong> {{ $course->eligibility }}
                        </p>
                    </div>
                </div>
            
        @endforeach
</div>

<script>
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
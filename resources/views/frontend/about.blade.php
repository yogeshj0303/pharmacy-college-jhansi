<x-front-header/>

<style>
        .header-section {
            background-color: #800000;
            color: white;
            padding: 1px;
            text-align: left;
            display: flex;
            align-items: center;
        }

      .header-section i {
            margin-left:30px;
            font-size: 1rem;
        }

        .header-section p {
            margin: 0;  
            font-size: 1rem;
            margin-left: 5px;
                font-family: 'Poppins', sans-serif;

        }
    /* Typography and General Styles */
     .tablehead {

        font-weight: 500;
        text-align: left;
        color: #800000;
        margin-bottom: 20px;
            font-family: 'Poppins', sans-serif;

    }

    .abouthead {
        font-size: 36px;
            font-family: 'Poppins', sans-serif;
        font-weight: 500;
                color: #800000;

    }

     .tablepara {
        font-size: 14px;
        line-height: 1.5;
        color: #333;
       
        text-align: left;
            font-family: 'Poppins', sans-serif;

    }

   .aboutpara {
        font-size: 14px;
        line-height: 1.5;
        font-weight:400;
        color: #333;
       
        text-align: left;
            font-family: 'Poppins', sans-serif;

    }

    .tablehead {
        font-size: 36px;
            font-family: 'Poppins', sans-serif;

    }

    /* Container Styles */
    .new-container {
        display: flex;
        justify-content: space-between;
        gap: 30px;
        width: 100%;
        margin: 0 auto;
        margin-top:30px;
        
    }

    .new-left-column, .new-right-column {
        width: 50%;
        padding: 20px;
    }

    .new-right-column img {
        width: 100%;
        height: auto;
    }

    /* Card Section */
    .new-main-container {
        margin-top: 40px;
        display: flex;
        flex-direction: column;
        gap: 20px;
        margin-bottom: 20px;
            padding: 20px 20px; /* Add 20px padding on the left and right */

    }

    .new-card-row {
        display: flex;
        gap: 30px;
    }

    .new-info-card {
        border: 1px solid #e2e6ea;
        padding: 30px 20px;
        background-color: #ffffff;
        border-radius: 10px;
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.05);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        display: flex;
        align-items: flex-start;
            padding: 0 20px; /* Add 20px padding on the left and right */

        gap: 15px;
    }

    .new-info-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    }

 .new-info-card i {
    font-size: 30px;
    color: #8B4513;
    margin-top:10px;

}

.new-info-card h3 {
    margin-top: 10px; /* Added space above the heading */
        font-family: 'Poppins', sans-serif;

}


    h3 {
        margin-top: 0;
    font-family: 'Poppins', sans-serif;

        color: #2c3e50;
        font-size: 22px;
        font-weight: 700;
    }

    ul {
        list-style-type: none;
        padding-left: 0;
            font-family: 'Poppins', sans-serif;

    }

    ul li {
        margin: 10px 0;
        font-size: 14px;
        color: #555;
        line-height: 1.6;
            font-family: 'Poppins', sans-serif;

    }

    /* Table Styles */
    .new-table-wrapper {
        width: 100%;
        overflow-x: auto;
    padding: 0 20px; /* Add 20px padding on the left and right */

        margin-top: 30px;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        font-family: 'Roboto', sans-serif;
        border-radius: 10px;
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
            font-family: 'Poppins', sans-serif;

    }

    th, td {
        padding: 12px 15px;
        text-align: left;
        font-size: 16px;
        color: #555;
        border: 1px solid #ddd;
            font-family: 'Poppins', sans-serif;

    }

    th {
        background-color: #3498db;
        color: #fff;
        font-weight: 600;
        font-size: 18px;
        cursor: pointer;
            font-family: 'Poppins', sans-serif;

    }

    th.new-sorted-asc::after {
        content: "\2191";
        padding-left: 10px;
    }

    th.new-sorted-desc::after {
        content: "\2193";
        padding-left: 10px;
    }
/* Mobile View (max-width: 767px) */
/* Mobile View (max-width: 767px) */
@media (max-width: 767px) {
    /* General Typography and Layout Adjustments */
    .abouthead {
        font-size: 28px;
        text-align: left;
        margin-bottom: 20px;
        color: #2c3e50;
        line-height: 1.4;
    }

    .aboutpara {
        font-size: 14px;
        color: #555;
        text-align: left;
        padding: 0 px;
        line-height: 1.6;
        margin-bottom: 20px;
    }

    /* Container and Columns */
    .new-container {
        flex-direction: column;
        align-items: center;
        padding: 20px;
    }

    .new-left-column, .new-right-column {
        width: 100%;
        padding: 0;
        text-align: center;
    }

    .new-right-column img {
        width: 80%;
        max-width: 300px;
        margin-top: 15px;
    }

    /* Card Section */
    .new-card-row {
        flex-direction: column;
        gap: 20px;
    }

    .new-info-card {
        padding: 20px 20px;
        width: 100%;
        box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
        margin: 10px 0;
        border-radius: 8px;
        background-color: #ffffff;
        border: 1px solid #e2e6ea;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .new-info-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
    }

    /* Table Adjustments for Mobile */
    table {
        font-size: 14px;
    }

    th, td {
        padding: 10px 12px;
        font-size: 14px;
    }

    th {
        font-size: 16px;
    }

    /* Adjust the table for better readability */
    .new-table-wrapper {
        margin-top: 30px;
        overflow-x: auto;
        -webkit-overflow-scrolling: touch; /* Enable smooth scrolling on iOS */
        display: block;
        max-width: 100%;
    }

    /* Card Icons */
    .new-info-card i {
        font-size: 30px;
        color: #8B4513;
        margin-bottom: 10px;
    }

    h3 {
        font-size: 20px;
        font-weight: 700;
        margin-top: 10px;
        color: #2c3e50;
    }

    ul {
        list-style-type: none;
        padding-left: 0;
    }

    ul li {
        margin: 8px 0;
        font-size: 14px;
        color: #555;
    }
}





</style>

<body>
    <div class="header-section">
    <a href="/" style="color: white; text-decoration: none;">
        <i class="fas fa-home"></i> <!-- Home icon -->
    </a>
    <p><a href="/" style="color: white; text-decoration: none;" onmouseover="this.style.textDecoration='none'" onmouseout="this.style.textDecoration='none'">/ About Us </a></p>
</div>

    <div class="new-container">
        <div class="new-left-column">
            <h2 class="abouthead">About Us</h2>
            <p class="aboutpara">Our pharmacy college is dedicated to providing high-quality education and training to aspiring pharmacists, equipping them with the knowledge and skills needed to excel in the pharmaceutical industry. We focus on a holistic approach that integrates theoretical learning with practical applications, ensuring that students gain hands-on experience in state-of-the-art laboratories equipped with the latest technology. Our experienced faculty members are committed to delivering industry-oriented education, fostering a deep understanding of pharmaceutical sciences, and promoting critical thinking and problem-solving abilities. We emphasize the importance of ethics, professionalism, and innovation in the field.

Furthermore, our college encourages continuous learning and development, offering various workshops, seminars, and internships to enhance students’ skills and knowledge. With a strong network of industry partnerships, we ensure that our students are well-prepared for successful careers in the pharmaceutical industry.

  

.</p>
        </div>
        <div class="new-right-column">
            <img src="https://media.getmyuni.com/azure/college-images-test/loyola-college-chennai/918dbc5a7bcb4fff918721cd03aec27c.png" alt="XYZ Pharmacy College">
        </div>
    </div>


    <div class="new-main-container">
        <div class="new-card-row">
            <div class="new-info-card">
                <i class="fas fa-eye"></i>
                <div>
                    <h3>Our Vision</h3>
                    <ul>
                        <li>To produce industry and health sector ready leaders and professionals.</li>
                        <li>To provide a favorable environment facilities to create competent pharmacists and researchers.</li>
                        <li>To instill ethical learning to create law-abiding citizens of India.</li>
                    </ul>
                </div>
            </div>
            <div class="new-info-card">
                <i class="fas fa-bullseye"></i>
                <div>
                    <h3>Our Mission</h3>
                    <ul>
                        <li>To produce industry and health sector ready leaders and professionals.</li>
                        <li>To provide a favorable environment and state-of-the-art facilities to create competent pharmacists and researchers.</li>
                        <li>To instill ethical learning to create law-abiding citizens of India.</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="new-full-width-row">
            <div class="new-info-card">
                <i class="fas fa-cogs"></i>
                <div>
                    <h3>Program Educational Objectives (PEOs)</h3>
                    <ul>
                        <li>To produce pharmacy graduates with strong fundamental and technical concepts.</li>
                        <li>To generate skilled pharma professionals to serve the community.</li>
                        <li>To create well-qualified pharmacists to participate in research and development.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    <script>
        function toggleSidebar() {
        const sidebar = document.getElementById('sidebar');
        sidebar.classList.toggle('active');
    }
        $(document).ready(function() {
            $('th.new-sortable-header').on('click', function() {
                var index = $(this).index();
                var rows = $('#myTable tbody tr').get();
                var isAscending = $(this).hasClass('new-sorted-asc');
                var order = isAscending ? 1 : -1;

                rows.sort(function(a, b) {
                    var cellA = $(a).children('td').eq(index).text().toLowerCase();
                    var cellB = $(b).children('td').eq(index).text().toLowerCase();
                    if (cellA < cellB) return -order;
                    if (cellA > cellB) return order;
                    return 0;
                });

                $.each(rows, function(index, row) {
                    $('#myTable').children('tbody').append(row);
                });

                $('th').removeClass('new-sorted-asc new-sorted-desc');
                if (isAscending) {
                    $(this).addClass('new-sorted-desc');
                } else {
                    $(this).addClass('new-sorted-asc');
                }
            });
        });
        
        // 

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
</body>

<x-front-footer/>

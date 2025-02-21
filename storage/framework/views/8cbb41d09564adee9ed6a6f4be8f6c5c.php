<?php if (isset($component)) { $__componentOriginal24ce07ad6f0be157d2c41b653dca36ba = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal24ce07ad6f0be157d2c41b653dca36ba = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.front-header','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('front-header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal24ce07ad6f0be157d2c41b653dca36ba)): ?>
<?php $attributes = $__attributesOriginal24ce07ad6f0be157d2c41b653dca36ba; ?>
<?php unset($__attributesOriginal24ce07ad6f0be157d2c41b653dca36ba); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal24ce07ad6f0be157d2c41b653dca36ba)): ?>
<?php $component = $__componentOriginal24ce07ad6f0be157d2c41b653dca36ba; ?>
<?php unset($__componentOriginal24ce07ad6f0be157d2c41b653dca36ba); ?>
<?php endif; ?>
<style>
    .main-container {
        max-width: 1460px;
        margin: 0 auto;
        padding: 20px;
        height: auto;
    }

    .header-section {
        background-color: #800000;
        color: white;
        padding: 1px;
        text-align: left;
        display: flex;
        align-items: center;
    }

    .header-section i {
        margin-left: 30px;
        font-size: 1rem;
    }

    .header-section p {
        margin: 0;
        font-size: 1rem;
        margin-left: 5px;
        font-family: 'Poppins', sans-serif;
    }

.admissin-container {
    width: 100%;
    max-width: 1460px;
    margin: 30px auto 0; /* Added margin-top: 30px */
    padding: 10px;
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
}


    .admissin-left, .admissin-right {
        width: 48%;
    }

    .admissin-title {
        font-size: 36px;
        font-weight: 600;
        color: #2c3e50;
        margin-bottom: 10px;
        font-family: 'Poppins', sans-serif;
    }

    .admissin-description {
        font-size: 13px;
        color:#555;
        line-height: 1.6;
        font-family: 'Poppins', sans-serif;
    }

    .admissin-box {
        background: #002147;
        color: white;
        padding: 20px;
        margin: 15px 0;
        border-radius: 5px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        transition: background 0.3s ease;
    }

    .admissin-box:hover {
        background: #001530;
    }

    .admissin-box-title {
        font-size: 20px;
        margin: 0;
        font-family: 'Poppins', sans-serif;
    }

    .admissin-box-text {
        margin: 5px 0 0;
        font-size: 14px;
        font-family: 'Poppins', sans-serif;
    }

    .admissin-icon {
        font-size: 30px;
    }

    /* Eligibility Section */
    .eligibility-section {
        background-color: #ADD8E6; /* Light Blue Background */
        padding: 20px;
        border-radius: 5px;
    }

    .eligibility-title {
        color: #800000;
        font-size: 18px;
        font-family: 'Poppins', sans-serif;
    }

    .eligibility-list {
        list-style: none;
        padding: 0;
        font-family: 'Poppins', sans-serif;
        font-size:13px;
    }

    .eligibility-item {
        padding: 8px 0;
        display: flex;
        align-items: center;
    }

    .eligibility-item::before {
        content: '\2022';
        color: #002147;
        font-weight: bold;
        display: inline-block;
        width: 1em;
        margin-right: 10px;
    }

    /* Separate download box below eligibility section */
    .eligibility-download-box {
        background: #002147;
        color: white;
        padding: 20px;
        margin-top: 15px;
        border-radius: 5px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        transition: background 0.3s ease;
    }

    .eligibility-download-box:hover {
        background: #001530;
    }

/**/
.container-box {
    border: 1px solid #ddd;
    padding: 20px;
    width: 100%;
    max-width: 1460px;
    margin: 0 auto; /* Center align */
    font-family: 'Poppins', sans-serif;
    background: #f9f9f9; /* Light grey background for better contrast */
    border-radius: 10px; /* Rounded corners for a modern look */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Soft shadow for depth */
    margin-bottom:20px;
}

.section-title {
    font-weight: 550;
    font-size: 20px;
    margin-bottom: 15px;
    color: #333;

}

.list-unstyled {
    padding-left: 0;
    list-style: none;
}
.list-unstyled li {
    color: #444;
    font-size: 13px;
    font-weight: 500;
    line-height: 1.8; /* Achha readability aur spacing */
    position: relative;
    padding-left: 25px; /* Bullet aur content ka gap maintain */
    display: flex;
    align-items: center; /* Bullet aur text ko perfect align karne ke liye */
}

.list-unstyled li::before {
    content: '\2022'; /* Unicode bullet */
    color: #e63946; /* Soft red for modern look */
    font-weight: bold;
    font-size: 18px;
    position: absolute;
    left: 0;
    top: 50%; /* Vertical centering */
    transform: translateY(-50%); /* Proper alignment with first text line */
}



/* Extra spacing around content */
.container-box p, 
.container-box h2, 
.container-box h3, 
.container-box li {
    font-family: 'Poppins', sans-serif;
    margin-bottom: 10px;
}
/**/

/**/

.enquiry-box {
    background-color: #f8f9fa;
    padding: 25px 30px;
    border-radius: 10px;
    box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.15);
    font-family: 'Poppins', sans-serif;
    text-align: left; /* */
    width:100%;
    max-width:1460px;
    margin-left:10px;
}

.enquiry-title {
    color: #800000;
    font-weight: 600;
    font-size: 20px;
    margin-bottom: 10px;
    font-family: 'Poppins', sans-serif;
        text-align: left; /* */
}

.enquiry-text {
    font-size: 14px; /* पहले 184x था, अब इसे सही कर दिया */
    color: #444;
    font-weight: 400;
    line-height: 1.6;
    font-family: 'Poppins', sans-serif;
        text-align: left; /* */
}

.contact-item {
    font-size: 14px;
    color: #555;
    font-weight: 400;
    display: flex;
    align-items: flex-start; /* अब सही तरीके से लेफ्ट अलाइन होगा */
    justify-content: flex-start; /* कंटेंट को लेफ्ट से अलाइन किया */
    gap: 8px;
    margin-top: 8px;
    font-family: 'Poppins', sans-serif;
    text-align: left;
}


.enquiry-box i {
    color: #d9534f;
    font-size: 18px;
        text-align: left; /* */
}



.image-container img {
    width: 85%;
    border-radius: 10px;
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
    transition: 0.3s ease-in-out;
    margin-bottom:20px;

}

.image-container img:hover {
    transform: scale(1.05);
}

/**/
/**/

        .faq-container {
            width: 1460px; /* Set the width to 1460px */
            width:100%;
            margin: auto;
            padding: 20px 20px;
    background-color: #f0f6ff; /* Light blue background */

            
        }
.faq-title {
    font-size: 24px;
    font-weight: bold;
    color: #2c3e50;
    margin-bottom: 15px;
    text-align: left;
            font-family: 'Poppins', sans-serif;
    padding: 20px 10px; /* Added 15px padding on left and right */
}

.faq-box {
    background-color: #002f6c; /* Dark blue */
    color: #ffffff;
    margin-bottom: 10px;
    padding: 20px 15px; /* Added 15px padding on left and right */
    cursor: pointer;
    border-radius: 5px;
    display: flex;
            font-family: 'Poppins', sans-serif;
    justify-content: space-between;
    align-items: center;
    font-size: 16px;
}

.faq-box i {
    transition: transform 0.3s ease;
            font-family: 'Poppins', sans-serif;
}

.faq-answer {
    display: none;
    background: #ffffff; /* White background for answers */
    padding: 10px 15px; /* Added 15px padding on left and right */
    border-left: 4px solid #002f6c;
    font-size: 14px;
    margin-bottom: 10px;
    border-radius: 5px;
            font-family: 'Poppins', sans-serif;
}

.faq-box.active i {
    transform: rotate(180deg);
            font-family: 'Poppins', sans-serif;
}


/**/
/* Mobile responsiveness */
@media screen and (max-width: 768px) {
    .main-container {
        padding: 10px;
    }

    .header-section {
        flex-direction: column; /* Stack the content vertically */
        align-items: flex-start;
        padding: 10px;
    }

    .header-section i {
        margin-left: 0;
        font-size: 1.2rem;
    }

    .header-section p {
        font-size: 0.9rem;
        margin-left: 0;
    }

    .admissin-container {
        flex-direction: column; /* Stack left and right sections vertically */
        margin-top: 20px;
    }

    .admissin-left, .admissin-right {
        width: 100%; /* Make both sections full width */
        margin-bottom: 20px;
    }

    .admissin-title {
        font-size: 28px;
    }

    .admissin-description {
        font-size: 14px;
    }

    .eligibility-section {
        padding: 15px;
    }

    .eligibility-title {
        font-size: 16px;
    }

    .eligibility-list {
        font-size: 12px;
    }

    .eligibility-item {
        padding: 6px 0;
    }

    .eligibility-download-box {
        padding: 15px;
    }

    .container-box {
        padding: 15px;
    }

    .section-title {
        font-size: 18px;
    }

    .list-unstyled li {
        font-size: 12px;
    }

    .enquiry-box {
        padding: 20px 25px;
        margin-left:0px;
    }

    .enquiry-title {
        font-size: 18px;
    }

    .enquiry-text {
        font-size: 13px;
    }

    .image-container img {
        width: 100%; /* Full width on smaller screens */
        border-radius: 8px; /* Slightly smaller radius for mobile */
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1); /* Soft shadow */
        margin-bottom: 15px; /* Reduced bottom margin */
    }

    .image-container img:hover {
        transform: scale(1.02); /* Smaller scale effect on hover for mobile */
    }

    .contact-item {
        font-size: 13px;
    }

    .faq-container {
        padding: 15px;
    }

    .faq-title {
        font-size: 20px;
        padding: 15px 5px;
    }

    .faq-box {
        padding: 15px;
    }

    .faq-answer {
        font-size: 12px;
        padding: 10px;
    }
}

/* Very small mobile devices */
@media screen and (max-width: 480px) {
    .header-section i {
        font-size: 1.1rem;
    }

    .admissin-title {
        font-size: 24px;
    }

    .admissin-description {
        font-size: 12px;
    }

    .eligibility-title {
        font-size: 14px;
    }

    .eligibility-list {
        font-size: 10px;
    }

    .eligibility-item {
        padding: 4px 0;
    }

    .container-box {
        padding: 10px;
    }

    .section-title {
        font-size: 16px;
    }

    .faq-title {
        font-size: 18px;
    }

    .faq-box {
        font-size: 14px;
    }

    .faq-answer {
        font-size: 11px;
    }
        .image-container img {
        width: 100%; /* Full width on small screens */
        border-radius: 5px; /* Smaller radius for very small screens */
        box-shadow: 0px 2px 6px rgba(0, 0, 0, 0.1); /* Even softer shadow */
        margin-top:20px;
    }

    .image-container img:hover {
        transform: scale(1.01); /* Subtle scaling on very small screens */
    }

}


</style>

<body>
<div class="header-section">
    <a href="/" style="color: white; text-decoration: none;">
        <i class="fas fa-home"></i> <!-- Home icon -->
    </a>
    <p><a href="/" style="color: white; text-decoration: none;" onmouseover="this.style.textDecoration='none'" onmouseout="this.style.textDecoration='none'">/ Admission </a></p>
</div>

<section class="admissin-container">
    <div class="admissin-left">
        <h1 class="admissin-title">Admission</h1>
        <p class="admissin-description">
            Counseling for admission to technical colleges of M.P. is carried out by Directorate of Technical Education (DTE), Bhopal (M.P. Government Body).
            A press note, with all the details of counseling programme and ranking for purpose of admission is issued by DTE, Bhopal in all leading newspapers of the State.
            Admission to the Institute is carried out as per the rules laid down by the Government of Madhya Pradesh.
        </p>
        <?php $__currentLoopData = $AdmissionPdf; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pdf): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="admissin-box">

            <div>
                <h2 class="admissin-box-title">Download</h2>
                <p class="admissin-box-text">Click to download the <?php echo e($pdf->title); ?></p>
            </div>
            <a href="<?php echo e(asset('' . $pdf->document)); ?>"  class="admission-link" style="text-decoration:none"  target="_blank">

            <span class="admissin-icon">📄⬇️</span>
            </a>

        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        
        
    </div>
    
    
</section>
<!---->
 <div class="container-box">
            <div class="row">
                <div class="col-md-6">
                    <h5 class="section-title">Documents Required:</h5>
                    <ul class="list-unstyled">
                        <li>High School Marksheet/Certificate</li>
                        <li>Higher Secondary Marksheet/Certificate</li>
                        <li>Caste Certificate issued by competent authority (for M.P domicile candidates)</li>
                        <li>Domicile issued by competent authority (for M.P domicile candidates)</li>
                        <li>Original T.C</li>
                        <li>Original Migration</li>
                        <li>06 recent colored passport size photograph</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <h5 class="section-title">Fee Details:</h5>
                    <ul class="list-unstyled">
                        <li>First Semester Fee: Fee to be charged as per AFRC, Govt. of Madhya Pradesh.</li>
                        <li>Caution money is to be paid to the institute only once at the time of admission. It will be refunded at the time of leaving the Institute.</li>
                        <li>College miscellaneous expenses are to be paid every year.</li>
                        <li>University Examination fee shall be charged for every semester examination as prescribed by the RGTU Bhopal.</li>
                        <li>Hostel/Mess/Bus Charges are to be paid, if the facilities are availed.</li>
                    </ul>
                </div>
            </div>
    
  </div>
  
  
          <div class="row">
            <div class="col-md-6">
                <div class="enquiry-box">
                    <h5 class="enquiry-title"><i class="bi bi-telephone"></i> Call for Admission Enquiries:</h5>
                    <p class="enquiry-text">We are delighted that you are considering joining our esteemed institution, renowned for its commitment to quality education and holistic development. Feel free to connect with us.</p>
                    <p class="contact-item"><i class="bi bi-telephone"></i> <strong>Reception:</strong> 0755-2529026/57/58/59, 2529015/16, 2529086</p>
                    <p class="contact-item"><i class="bi bi-envelope"></i> <strong>Email:</strong> oistbpl@oriental.ac.in</p>
                    <p class="contact-item"><i class="bi bi-telephone"></i> <strong>For Admission:</strong> +91 7225026861/62/63/64</p>
                    <p class="contact-item"><i class="bi bi-envelope"></i> <strong>Email:</strong> admission@oriental.ac.in</p>
                    <p class="contact-item"><i class="bi bi-whatsapp"></i> <strong>WhatsApp:</strong> +91 764986698</p>
                    <p class="contact-item"><i class="bi bi-briefcase"></i> <strong>Training & Placement:</strong> +91 7471123792</p>
                    <p class="contact-item"><i class="bi bi-envelope"></i> <strong>Email:</strong> tpo@oriental.ac.in</p>
                </div>
<!-- Separate Apply Now Box (No Background Color) -->
<div class="eligibility-download-box">
    <div>
        <h2 class="admissin-box-title">Apply Now</h2>
        <p class="admissin-box-text">Click to start your application process</p>
    </div>
    <span class="admission-icon" style="font-size:40px"><i class="fas fa-graduation-cap" ></i></span>
    </div>

            </div>
            <div class="col-md-6 image-container">
                <img src="https://synques-dyn-cdn.s3.ap-south-1.amazonaws.com/oriental/ocp-bhopal/images/pharmacy-admission.webp" alt="Admission Image">
            </div>
        </div>

<!---->
<div class="faq-container">
    <h2 class="faq-title">FAQs For Pharmacy Admission</h2>

    <?php $__currentLoopData = $faq; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="faq-box">
            <?php echo e($item->faq_question); ?>

            <i class="fas fa-plus"></i>
        </div>
        <div class="faq-answer">
            <?php echo e($item->faq_answer); ?>

        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>


<!---->


</body>

<script>
    function toggleSidebar() {
        const sidebar = document.getElementById('sidebar');
        sidebar.classList.toggle('active');
    }
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
    // faq
        const faqBoxes = document.querySelectorAll('.faq-box');

    faqBoxes.forEach(box => {
        box.addEventListener('click', function () {
            this.classList.toggle('active');
            let answer = this.nextElementSibling;
            if (answer.style.display === "block") {
                answer.style.display = "none";
            } else {
                answer.style.display = "block";
            }
        });
    });

    
</script>

<?php if (isset($component)) { $__componentOriginala156de34241dd39c660517a1b8b69244 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala156de34241dd39c660517a1b8b69244 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.front-footer','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('front-footer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala156de34241dd39c660517a1b8b69244)): ?>
<?php $attributes = $__attributesOriginala156de34241dd39c660517a1b8b69244; ?>
<?php unset($__attributesOriginala156de34241dd39c660517a1b8b69244); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala156de34241dd39c660517a1b8b69244)): ?>
<?php $component = $__componentOriginala156de34241dd39c660517a1b8b69244; ?>
<?php unset($__componentOriginala156de34241dd39c660517a1b8b69244); ?>
<?php endif; ?>
<?php /**PATH C:\Users\DELL\OneDrive\Desktop\xampp1\PharmacyCollege\resources\views/frontend/admission.blade.php ENDPATH**/ ?>
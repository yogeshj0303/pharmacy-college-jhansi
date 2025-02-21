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
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap');

/* Keep desktop view the same */
.faculties-container {
        padding: 20px;
        font-family: 'Poppins', sans-serif;
    }
    .download-container {
        display: flex;
        flex-direction: column;
    }
    .download-row {
        display: flex;
        gap: 20px; /* Adjust spacing between items */
        margin-bottom: 10px;
    }
    .download-section {
        flex: 1; /* Make sections take equal width */
        text-align: center;
       
        padding: 10px;
      
    }
    .file-icon {
        color: red;
    }
    .file-link {
        background: #fff;
        padding: 10px;
        display: flex;
        align-items: center;
        gap: 10px;
        font-weight: bold;
        cursor: pointer;
        width: 100%; /* Ensures equal width */
        justify-content: left;
        text-decoration: none;
        color: #333;
        border: 1px solid #ddd;
        border-radius: 5px;
        transition: 0.3s;
    }

    .file-link:hover {
        background: navy;
        color: white;
    }

    .file-icon {
        color: #a00;
        padding: 5px;
        font-size: 1.2rem;
    }

    /* Space below downloads */
    .download-section:last-of-type {
        margin-bottom: 0px;
    }

     /* Download Section */
     .download-section {
        display: flex;
        gap: 10px;
        margin-top: 20px;
        width: 100%;
    }
.box {
    max-width: 1460px;
    margin: 0 auto;
    padding: 20px;
}

.nav {
    background-color: #800000;
    color: white;
    padding: 5px 15px;
    display: flex;
    align-items: center;
}

.nav a {
    color: white;
    text-decoration: none;
    display: flex;
    align-items: center;
}

.nav i {
    margin-right: 10px;
    font-size: 1rem;
}

.heading {
    font-size: 34px;
    color: #333;
    font-weight: 600;
    margin: 0;
}

.txt-box {
    border-bottom: 1px solid #ddd;
    padding-bottom: 20px;
    margin-bottom: 20px;
}

.txt-box p {
    line-height: 1.6;
    color: #555;
    font-size: 14px;
    text-align: justify;
    font-weight: 300;
}

.txt-box h2 {
    margin-top: 20px;
    font-size: 30px;
    color: #333;
    font-weight: 600;
}

.wrapper {
    max-width: 1460px;
    margin: 0 auto;
    text-align: left;
    background: #f0f8ff;
    padding: 20px;
    margin-bottom: 20px;
}

.heading2 {
    font-size: 18px;
    font-weight: bold;
    margin-bottom: 15px;
    text-align: left;
}

.logo-grid {
    display: grid;
    grid-template-columns: repeat(6, 1fr);
    gap: 10px;
}

.logo-grid img {
    width: 100%;
    height: auto;
    display: block;
    object-fit: contain;
    background: white;
    padding: 10px;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

.gallery {
    display: flex;
    flex-direction: column;
    gap: 20px;
    padding: 20px;
    background: #f0f8ff;
}

h2 {
    font-size: 28px;
    font-weight: bold;
    color: #2c3e50;
    margin: 0;
    text-align: left;
}

select {
    padding: 10px 15px;
    font-size: 16px;
    background-color: #ffffff;
    border: 2px solid #ccc;
    border-radius: 5px;
    color: #333;
    cursor: pointer;
    transition: border-color 0.3s ease;
    width: 10%;
}

.images {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 10px;
}

.images img {
    width: 100%;
    height: auto;
    cursor: pointer;
    transition: transform 0.2s;
}

.lightbox {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.5);
    justify-content: center;
    align-items: center;
    z-index: 9999;
}

.lightbox img {
    max-width: 90%;
    max-height: 90%;
}

.close {
    position: absolute;
    top: 20px;
    right: 30px;
    font-size: 40px;
    color: white;
    cursor: pointer;
    z-index: 10000;
}

/* Mobile-specific styles */
@media (max-width: 768px) {
    /* Box padding adjustment for mobile */
    .box {
        padding: 15px; /* Reduce padding on smaller screens */
        width: 100%;
    }

    /* Navigation adjustment */
    .nav {
        flex-direction: column; /* Stack navbar items vertically on mobile */
        padding: 10px;
    }

    .nav a {
        margin-bottom: 10px; /* Add some spacing between links */
    }

    .nav i {
        margin-right: 8px; /* Slightly reduce icon spacing */
    }

    /* Heading font size adjustment */
    .heading {
        font-size: 28px; /* Slightly smaller heading on mobile */
    }

    /* Text box padding and margin adjustment */
    .txt-box {
        padding-bottom: 15px; /* Adjust bottom padding */
        margin-bottom: 15px; /* Adjust margin for better spacing */
    }

    .txt-box p {
        font-size: 16px; /* Increase font size for readability */
    }

    .txt-box h2 {
        font-size: 24px; /* Smaller h2 heading for mobile */
        margin-top: 15px; /* Adjust top margin */
    }
}

@media (max-width: 480px) {
    /* Further reduce padding and margin on very small screens */
    .box {
        padding: 10px;
    }

    /* Navbar links stack more compactly */
    .nav {
        padding: 8px; /* Reduced padding for a more compact navbar */
    }

    /* Heading adjustments for small screens */
    .heading {
        font-size: 24px; /* Smaller font size for small screens */
    }

    .txt-box h2 {
        font-size: 22px; /* Further reduce h2 heading font size */
    }

    /* Adjust paragraph font size for smaller screens */
    .txt-box p {
        font-size: 14px; /* Smaller font size for better fitting */
    }

    .txt-box {
        padding-bottom: 10px; /* More compact padding */
        margin-bottom: 10px; /* More compact margin */
    }
    .faculties-container {
        padding: 20px;
        font-family: 'Poppins', sans-serif;
    }
    .download-container {
        display: flex;
        flex-direction: column;
    }
    .download-row {
        display: flex;
        gap: 20px; /* Adjust spacing between items */
        margin-bottom: 10px;
    }
    .download-section {
        flex: 1; /* Make sections take equal width */
        text-align: center;
       
        padding: 10px;
      
    }
    .file-icon {
        color: red;
    }
    .file-link {
        background: #fff;
        padding: 10px;
        display: flex;
        align-items: center;
        gap: 10px;
        font-weight: bold;
        cursor: pointer;
        width: 100%; /* Ensures equal width */
        justify-content: left;
        text-decoration: none;
        color: #333;
        border: 1px solid #ddd;
        border-radius: 5px;
        transition: 0.3s;
    }

    .file-link:hover {
        background: navy;
        color: white;
    }

    .file-icon {
        color: #a00;
        padding: 5px;
        font-size: 1.2rem;
    }

    /* Space below downloads */
    .download-section:last-of-type {
        margin-bottom: 0px;
    }

     /* Download Section */
     .download-section {
        display: flex;
        gap: 10px;
        margin-top: 20px;
        width: 100%;
    }
}


/* Mobile-specific adjustments for full page and view */
@media (max-width: 768px) {
    /* Ensure the wrapper takes full width on mobile */
    .wrapper, .box {
        width: 100%;
        padding: 15px;
    }

    .nav {
        flex-direction: column; /* Stack navbar items on top of each other */
        padding: 10px;
    }

    .logo-grid {
        grid-template-columns: repeat(3, 1fr); /* 3 columns for medium screens */
    }

    .images {
        grid-template-columns: repeat(2, 1fr); /* 2 columns on medium screens */
    }

    .gallery {
        padding: 10px;
    }

    select {
        width: 100%; /* Full width for select dropdown on mobile */
    }

    /* Make images and elements stretch to fit full page on mobile */
    .gallery, .images, .txt-box {
        width: 100%;
    }

    h2 {
        font-size: 24px; /* Adjust heading font size for mobile */
        text-align: center; /* Center-align heading for mobile */
    }

    /* Adjust spacing between sections for a mobile-friendly layout */
    .txt-box, .wrapper, .gallery {
        margin-bottom: 15px;
    }

    .txt-box p {
        font-size: 16px;
    }
    .faculties-container {
        padding: 20px;
        font-family: 'Poppins', sans-serif;
    }
    .download-container {
        display: flex;
        flex-direction: column;
    }
    .download-row {
        display: flex;
        gap: 20px; /* Adjust spacing between items */
        margin-bottom: 10px;
    }
    .download-section {
        flex: 1; /* Make sections take equal width */
        text-align: center;
       
        padding: 10px;
      
    }
    .file-icon {
        color: red;
    }
    .file-link {
        background: #fff;
        padding: 10px;
        display: flex;
        align-items: center;
        gap: 10px;
        font-weight: bold;
        cursor: pointer;
        width: 100%; /* Ensures equal width */
        justify-content: left;
        text-decoration: none;
        color: #333;
        border: 1px solid #ddd;
        border-radius: 5px;
        transition: 0.3s;
    }

    .file-link:hover {
        background: navy;
        color: white;
    }

    .file-icon {
        color: #a00;
        padding: 5px;
        font-size: 1.2rem;
    }

    /* Space below downloads */
    .download-section:last-of-type {
        margin-bottom: 0px;
    }

     /* Download Section */
     .download-section {
        display: flex;
        gap: 10px;
        margin-top: 20px;
        width: 100%;
    }
}

@media (max-width: 480px) {
    /* Full page layout on very small devices */
    .wrapper, .box {
        padding: 10px;
    }

    .logo-grid {
        grid-template-columns: repeat(2, 1fr); /* 2 columns on small screens */
    }

    .images {
        grid-template-columns: 1fr; /* 1 column on small screens */
    }

    select {
        width: 100%; /* Full width for select dropdown */
    }

    .nav {
        padding: 8px; /* Reduce padding on small screens */
    }

    .gallery, .txt-box, .wrapper {
        margin-bottom: 20px; /* Ensure spacing between sections */
    }
    .faculties-container {
        padding: 20px;
        font-family: 'Poppins', sans-serif;
    }
    .download-container {
        display: flex;
        flex-direction: column;
    }
    .download-row {
        display: flex;
        gap: 20px; /* Adjust spacing between items */
        margin-bottom: 10px;
    }
    .download-section {
        flex: 1; /* Make sections take equal width */
        text-align: center;
       
        padding: 10px;
      
    }
    .file-icon {
        color: red;
    }
    .file-link {
        background: #fff;
        padding: 10px;
        display: flex;
        align-items: center;
        gap: 10px;
        font-weight: bold;
        cursor: pointer;
        width: 100%; /* Ensures equal width */
        justify-content: left;
        text-decoration: none;
        color: #333;
        border: 1px solid #ddd;
        border-radius: 5px;
        transition: 0.3s;
    }

    .file-link:hover {
        background: navy;
        color: white;
    }

    .file-icon {
        color: #a00;
        padding: 5px;
        font-size: 1.2rem;
    }

    /* Space below downloads */
    .download-section:last-of-type {
        margin-bottom: 0px;
    }

     /* Download Section */
     .download-section {
        display: flex;
        gap: 10px;
        margin-top: 20px;
        width: 100%;
    }
}



    </style>

<body>
    <div class="nav">
        <a href="/">
            <i class="fas fa-home"></i> 
            <span>/ Training & Placement</span>
        </a>
    </div>


    
    <div class="box">
        <h1 class="heading">Training & Placement</h1>
        <div class="txt-box">
            <p class="para">Pharmaceutical Chemistry is an integral part of the pharmacy education program. It covers several aspects of new drug discovery and development in collaboration with the other four specialty domains in the program. The Department of Pharmaceutical Chemistry has two postgraduate and three undergraduate laboratories. The laboratories are designed and equipped with several state-of-the-art technologies, including sophisticated fume hoods attached with nitrogen and water supply.</p>
            <p class="para">The department is extensively involved in undergraduate and postgraduate teaching with research-oriented subjects such as Organic Chemistry, Pharmaceutical Chemistry, Medicinal Chemistry, and Interpretation of Spectral Data. The postgraduate program mainly focuses on basic approaches to drug discovery, computational chemistry, molecular modeling, drug designing, and development. The use of computer-assisted drug design and molecular modeling software helps the students to learn the intricacies of the process related to the binding of the drug with the receptor.</p>
        </div>
    </div>

    
    <div class="faculties-container">

        <div class="download-container">
    <?php $__currentLoopData = $TrainingDocument; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $Faculty): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($index % 2 == 0): ?>
            <div class="download-row"> <!-- Start a new row every 2 items -->
        <?php endif; ?>
        
        <div class="download-section">
            <a href="<?php echo e(asset($Faculty->document)); ?>" target="_blank" class="file-link">
                <i class="fas fa-file-pdf file-icon"></i> <?php echo e($Faculty->title); ?>

            </a>
        </div>

        <?php if(($index + 1) % 2 == 0 || $loop->last): ?>
            </div> <!-- Close row after 2 items or last item -->
        <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>

               
    </div>

    <div class="wrapper">
        <div class="heading2">Our Major Recruiters</div>
        <div class="logo-grid">
    <?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <img src="<?php echo e(asset('' . $image->image)); ?>" alt="<?php echo e($image->name); ?>">
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>

    </div>
    
    <!---->
    <div class="gallery">
    <h2 class="heading2">Student Placement</h2>
    
    <select id="yearFilter" onchange="filterImages()">
        <option value="">Select Year</option>
        <?php $__currentLoopData = $PlacedStudentimages->unique('year'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($image->year); ?>"><?php echo e($image->year); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>   
    </select>

    <div class="images">
        <?php $__currentLoopData = $PlacedStudentimages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <img src="<?php echo e(asset($image->image)); ?>" 
                 alt="<?php echo e($image->name); ?>" 
                 class="student-image" 
                 data-year="<?php echo e($image->year); ?>" 
                 onclick="openLightbox(this)">
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>   
    </div>
</div>

<script>
    function filterImages() {
        var selectedYear = document.getElementById("yearFilter").value;
        var images = document.querySelectorAll(".student-image");

        images.forEach(function(image) {
            if (selectedYear === "" || image.getAttribute("data-year") === selectedYear) {
                image.style.display = "inline-block";
            } else {
                image.style.display = "none";
            }
        });
    }
</script>


    
<div id="lightbox" class="lightbox" onclick="closeLightbox()">
    <span class="close">&times;</span>
    <img id="lightbox-img" src="https://synques-dyn-cdn.s3.ap-south-1.amazonaws.com/oriental/ocp-bhopal/images/student-placed2020-1.jpg" alt="Large view">
</div>

    <!---->
 <script>   
function openLightbox(imageElement) {
    var lightbox = document.getElementById('lightbox');
    var lightboxImage = document.getElementById('lightbox-img');
    lightbox.style.display = 'flex'; // Show the lightbox
    lightboxImage.src = imageElement.src; // Set the clicked image as the lightbox image
}

function closeLightbox() {
    var lightbox = document.getElementById('lightbox');
    lightbox.style.display = 'none'; // Hide the lightbox
}

</script>
</body>
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
<?php /**PATH C:\Users\DELL\OneDrive\Desktop\xampp1\PharmacyCollege\resources\views/frontend/traning.blade.php ENDPATH**/ ?>
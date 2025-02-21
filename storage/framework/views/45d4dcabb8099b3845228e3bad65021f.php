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
    /* Default styles for desktop */

    /* Header Styling */
    .career-header-section {
        background-color: #800000;
        color: white;
        padding: 5px 30px;
        display: flex;
        align-items: center;
        font-family: 'Poppins', sans-serif; /* Apply Poppins font globally */
    }

    .career-header-section i {
        font-size: 1rem;
    }

    .career-header-section p {
        margin: 0;
        font-size: 1rem;
    }

    .career-header-section a {
        color: white;
        text-decoration: none;
        font-weight: 400;
    }

    .containercareer {
        max-width: 1460px;
        margin: 20px;
        padding: 0px;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
    }

    .title {
        color: #800000;
        font-size: 2em;
        font-weight: 500;
        margin-bottom: 20px;
    }

    .description {
        font-size: 14px;
        color: #444;
        margin-bottom: 20px;
    }
.eligibility-box-container {
    display: flex;
    justify-content: ; /* Ensure there's a gap between the elements */
    align-items: center;
    margin-bottom: 20px;
}

.eligibility-box {
    background-color: #eef3ff;
    padding: 20px;

    border-left: 5px solid #800000;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    width: 80%; /* Occupy 40% of the container width */
}

.eligibility-box h3 {
    font-weight: bold;
    font-size: 2em;
    margin-bottom: 15px;
    color: #800000;
}

.eligibility-box p {
    margin-bottom: 10px;
}

.highlight {
    font-weight: bold;
    color: #800000;
}

.highlight-red {
    font-weight: bold;
    color: red;
}

.img-fluid {

    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    max-width: 1200px; /* Occupy 50% of the container width */
    height: 400px;
    object-fit: cover; /* Keeps image proportions intact */
}



/* Mobile responsiveness */
@media (max-width: 768px) {
    .eligibility-box-container {
        flex-direction: column;
        align-items: center; /* Stack vertically on small screens */
    }

    .eligibility-box {
        width: 100%; /* Take full width of container on small screens */
        margin-bottom: 20px; /* Add margin to separate from image */
    }

    .img-fluid {
        width: 100%; /* Make image take full width on small screens */
        height: auto; /* Auto height for responsiveness */
    }
}

   .join-container {
        background-color: #e9f2fc;Light blue color */
    width: 100%;  /* Full width */
    margin-left: 0;
    margin-right: 0;
    padding: 30px;  /* Remove any padding if there's unwanted spacing */
}

    .join-info {
        background-color: #e9f2fc;
        padding: 20px 20px;

        font-family: 'Poppins', sans-serif;
        font-size: 14px;
        color: #333;

    }
    .join-info h2 {
        color: #800000;
        font-weight: bold;
    }
    .join-info p {
        font-size: 14px;
        line-height: 1.6;
        margin-bottom: 15px;
    }
    .join-form {
        background-color: white;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    .btn-primary-custom {
        background-color: #002147;
        color: white;
    }
      /* Form Box Styling */
.form-box {
    background-color: white;
    padding: 15px;
    
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
    max-width: 600px;
    margin: 0 auto; /* Center the form-box */
    transition: all 0.3s ease-in-out; /* Smooth transition on hover/focus */
}

/* Form Box Hover Effect */
.form-box:hover {
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.3); /* Darker shadow on hover */
    transform: translateY(-5px); /* Lift effect */
}

/* Custom Button Styling */
.btn-custom {
    background-color: #002147;
    color: white;
    font-size: 16px;
    padding: 12px 20px;

    border: none;
    cursor: pointer;
    transition: background-color 0.3s, transform 0.2s;
    width: 30%; /* Full width button for smaller screens */
}

/* Button Hover Effect */
.btn-custom:hover {
    background-color: #00457c; /* Lighter blue on hover */
    transform: translateY(-3px); /* Slightly lift the button */
}

/* Button Focus Effect */
.btn-custom:focus {
    outline: none;
    box-shadow: 0 0 5px 2px rgba(0, 33, 71, 0.5); /* Focus effect */
}

/* Mobile Responsive */
@media (max-width: 768px) {
    .form-box {
        padding: 5px; /* Small padding to limit gap on sides */
        max-width: 100%; /* Form takes more width on smaller screens */
        margin: 0 auto; /* Centering the form */
        border-radius: 8px; /* Rounded corners for the form */
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); /* Subtle shadow for depth */
        background-color: #fff; /* Light background color */
        margin-top:20px;
        margin-bottom:20px;
    }

    .form-box input, .form-box textarea, .form-box select {
        margin-bottom: 10px; /* Gap between form fields */
        width: 100%; /* Full width input fields */
        padding: 10px;
        border-radius: 4px;
        border: 1px solid #ccc;
    }

    .btn-custom {
        font-size: 16px; /* Slightly larger text for readability */
        padding: 12px 20px; /* More padding for a more clickable button */
        width: 100%; /* Full width button on smaller screens */
        background-color: #007bff; /* Button color */
        color: white; /* Button text color */
        border: none;
        border-radius: 6px; /* Rounded corners for the button */
        transition: background-color 0.3s ease-in-out; /* Smooth transition for hover effect */
    }

    .btn-custom:hover {
        background-color: #0056b3; /* Darker blue on hover */
    }
}

@media (max-width: 480px) {
    .form-box {
        padding: 5px; /* Smaller padding to limit gap on sides */
        max-width: 100%; /* Form box gets slightly larger on very small screens */
        border-radius: 10px; /* Rounded corners for smaller screens */
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1); /* Slightly stronger shadow */
    }

    .form-box input, .form-box textarea, .form-box select {
        margin-bottom: 8px; /* Smaller gap between fields on smaller screens */
        padding: 8px; /* Adjust padding for smaller screens */
    }

    .btn-custom {
        font-size: 14px;
        padding: 12px 18px;
        border-radius: 5px; /* Rounded button on very small screens */
    }
}



/* Mobile Responsive */
@media (max-width: 768px) {
    .career-header-section {
        flex-direction: column;
        align-items: center;
        padding: 10px;
    }

    .career-header-section i {
        margin-bottom: 5px;
    }

    .career-header-section p {
        font-size: 1.1rem;
        text-align: center;
    }

    .containercareer {
        margin: 10px;
        padding: 0;
    }

    .title {
        font-size: 1.8em;
    }

    .description {
        font-size: 13px;
    }

    .join-container {
        margin-top: 40px;
    }

    .join-info {
        padding: 15px;
    }

    .join-info h2 {
        font-size: 1.6em;
    }

    .join-info p {
        font-size: 13px;
    }

    .img-fluid {
        width: 100%;
        height: auto;
    }
}

@media (max-width: 480px) {
    .career-header-section {
        padding: 8px;
    }

    .career-header-section p {
        font-size: 1rem;
    }

    .career-header-section i {
        font-size: 0.9rem;
    }

    .containercareer {
        margin: 5px;
    }

    .title {
        font-size: 1.5em;
    }

    .description {
        font-size: 12px;
    }

    .join-container {
        margin-top: 30px;
    }

    .join-info {
        padding: 10px;
    }

    .join-info h2 {
        font-size: 1.4em;
    }

    .join-info p {
        font-size: 12px;
    }

    .img-fluid {
        width: 100%;
        height: auto;
    }

    .form-box {
        padding: 15px;
    }
}

</style>


<div class="career-header-section">
    <a href="/">
        <i class="fas fa-home"></i>
    </a>
    <p><a href="/">/ Career</a></p>
</div>

<div class="containercareer">
    <h1 class="title">Career with us</h1>

    <p class="description">
Pharmacy College of Jhansi is committed to excellence in pharmaceutical education and research. We provide a dynamic learning environment that nurtures innovation and practical skills. Our institution empowers students to become future leaders in the healthcare industry.
    </p>

    <p class="description">
We are looking for passionate educators and professionals to join our esteemed faculty. If you have a strong academic background and a dedication to teaching and research, this is the place for you. Be a part of our mission to shape the future of pharmacy and healthcare.
    </p>

    <div class="row mt-4">
        <div class="col-md-8">
            <div class="eligibility-box">
                <h3>Eligibility Criteria</h3>
                <p>Please refer UGC/AICTE norms for eligibility criteria</p>
                <p><span class="highlight">Director:</span> Minimum 10 years experience in teaching/research or industry and at least 3 years as professor.</p>
                <p><span class="highlight">HOD:</span> Various engineering disciplines, Pharmacy, MCA</p>
                <p><span class="highlight">Dean:</span> Academics, Student Welfare, Planning and Development</p>
                <p><span class="highlight-red">Assistant professor:</span> Engineering, MCA, Management, Pharmacy</p>
            </div>
        </div>
        <div class="col-md-4">
            <img src="https://synques-dyn-cdn.s3.ap-south-1.amazonaws.com/oriental/images/career-1.webp" alt="Teamwork" class="img-fluid">
        </div>
    </div>
    

</div>
    <div class="join-container">
        <div class="row">
            <div class="col-md-6">
                <div class="join-info">
                    <h2><b>Want to join us?</b></h2>
                    <p>Opportunities don’t happen, you create them! Pharmacy College of Jhansi is a team of passionate, committed, and talented professionals who believe that every student will graduate prepared for success in career and life.</p>
                    <p>If you have the potential to make an impact with your talent, then you are at the right place. We welcome you to our growing academic family. Send us your resume at <b>pcj12@gmail.com</b></p>
                   
                </div>
            </div>
             <div class="col-md-6">
             <form action="<?php echo e(route('career.store')); ?>" method="POST" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <div class="form-box">
        <h5><b>📌 Personal Information</b></h5>
        <div class="row mb-3">
            <div class="col-md-6">
                <input type="text" class="form-control <?php $__errorArgs = ['first_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
                       name="first_name" placeholder="First Name" value="<?php echo e(old('first_name')); ?>" >
                <?php $__errorArgs = ['first_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="invalid-feedback"><?php echo e($message); ?></div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <div class="col-md-6">
                <input type="text" class="form-control <?php $__errorArgs = ['last_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
                       name="last_name" placeholder="Last Name" value="<?php echo e(old('last_name')); ?>" >
                <?php $__errorArgs = ['last_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="invalid-feedback"><?php echo e($message); ?></div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-6">
                <input type="text" class="form-control <?php $__errorArgs = ['contact_no'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
                       name="contact_no" placeholder="Contact No." value="<?php echo e(old('contact_no')); ?>" >
                <?php $__errorArgs = ['contact_no'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="invalid-feedback"><?php echo e($message); ?></div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <div class="col-md-6">
                <input type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
                       name="email" placeholder="Email-id" value="<?php echo e(old('email')); ?>" >
                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="invalid-feedback"><?php echo e($message); ?></div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
        </div>
        <div class="mb-3">
            <input type="text" class="form-control <?php $__errorArgs = ['qualification'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
                   name="qualification" placeholder="Educational Qualifications" 
                   value="<?php echo e(old('qualification')); ?>" style="width: 97%; margin-left:10px" >
            <?php $__errorArgs = ['qualification'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="invalid-feedback"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <h5><b>📌 Professional Information</b></h5>
        <div class="row mb-3">
            <div class="col-md-6">
                <input type="text" class="form-control <?php $__errorArgs = ['experience'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
                       name="experience" placeholder="Years Of Experience" value="<?php echo e(old('experience')); ?>" >
                <?php $__errorArgs = ['experience'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="invalid-feedback"><?php echo e($message); ?></div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <div class="col-md-6">
                <input type="text" class="form-control <?php $__errorArgs = ['applied_for'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
                       name="applied_for" placeholder="Applied for the post of" 
                       value="<?php echo e(old('applied_for')); ?>" >
                <?php $__errorArgs = ['applied_for'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="invalid-feedback"><?php echo e($message); ?></div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
        </div>
        <div class="mb-3" style="width: 97%; margin-left:10px">
    <select class="form-control <?php $__errorArgs = ['specialization'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="specialization" >
        <option value="">-- Subject Specialization --</option>
        <option value="B. Pharm" <?php echo e(old('specialization') == 'B. Pharm' ? 'selected' : ''); ?>>B. Pharm</option>
        <option value="D. Pharm" <?php echo e(old('specialization') == 'D. Pharm' ? 'selected' : ''); ?>>D. Pharm</option>
        <option value="M. Pharm" <?php echo e(old('specialization') == 'M. Pharm' ? 'selected' : ''); ?>>M. Pharm</option>
        <option value="Pharm D" <?php echo e(old('specialization') == 'Pharm D' ? 'selected' : ''); ?>>Pharm D</option>
    </select>
    <?php $__errorArgs = ['specialization'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <div class="invalid-feedback"><?php echo e($message); ?></div>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
</div>

        <div class="mb-3" style="width: 97%; margin-left:10px">
            <label><b>Resume/CV</b></label>
            <input type="file" class="form-control <?php $__errorArgs = ['resume'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="resume" >
            <?php $__errorArgs = ['resume'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="invalid-feedback"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-custom me-2">Submit</button>
        </div>
    </div>
</form>

            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
   
  <?php if(session('success')): ?>
    <script>
        Swal.fire({
            title: "Success!",
            text: "<?php echo e(session('success')); ?>",
            icon: "success",
            confirmButtonColor: "#3085d6",
            confirmButtonText: "OK"
        });
    </script>
<?php endif; ?>
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
<?php /**PATH C:\Users\DELL\OneDrive\Desktop\xampp1\PharmacyCollege\resources\views/frontend/career.blade.php ENDPATH**/ ?>
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
    /* Header Styling */
    .Faculties-header-section {
        background-color: #800000;
        color: white;
        padding: 10px;
        display: flex;
        align-items: center;
    }

    .Faculties-header-section i {
        margin-left: 30px;
        font-size: 1rem;
    }

    .Faculties-header-section p {
        margin: 0;
        font-size: 1rem;
        font-family: 'Poppins', sans-serif;
        margin-left: 5px;
    }

    /* Faculties Container */
    .faculties-container {
        padding: 20px;
        font-family: 'Poppins', sans-serif;
    }

    /* Download Section */
    .download-section {
        display: flex;
        gap: 10px;
        margin-top: 20px;
        width: 100%;
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

    /* Table Styling */
        .Faculty-List-Title {
        font-family: 'Poppins', sans-serif;
        font-size: 1.2rem; /* You can adjust the size as needed */
        font-weight: 400;
        color: #333; /* Set text color */
        margin-bottom: 15px; /* Add space below the heading */
        margin-top:20px;
    }

    .table-container {
        overflow-x: auto; /* Enables horizontal scroll on smaller screens */
    }

    .custom-table {
        border-collapse: collapse;
        width: 100%;
        min-width: 600px; /* Ensures it doesn't shrink too much */
    }

    .custom-table th {
        background-color: #6d071a;
        color: white;
        text-align: left;
        padding: 12px;
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

    .custom-table td {
        padding: 10px;
        border: 1px solid #ddd;
    }

    .custom-table tr:nth-child(even) {
        background-color: #f2f2f2;
    }
    .facheading {
    font-family: 'Poppins', sans-serif;
    font-size: 2rem;
    font-weight: 500;
    color: #800000;
}

    /* Responsive */
    @media (max-width: 768px) {
        .download-section {
            flex-direction: column;
            gap: 5px;
        }

        .file-link {
            width: 100%; /* Full width on small screens */
        }

        .table-container {
            overflow-x: auto;
        }
    }
</style>

<body>
    <div class="Faculties-header-section">
        <a href="/" style="color: white; text-decoration: none;">
            <i class="fas fa-home"></i>
        </a>
        <p><a href="/" style="color:white; text-decoration: none;" >/ Faculties</a></p>
    </div>

    <div class="faculties-container">
        <h2 class="facheading">Faculties</h2>

        <div class="download-container">
    <?php $__currentLoopData = $Facultypdf; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $Faculty): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($index % 2 == 0): ?>
            <div class="download-row"> <!-- Start a new row every 2 items -->
        <?php endif; ?>
        
        <div class="download-section">
            <a href="<?php echo e(asset($Faculty->upload_pdf)); ?>" target="_blank" class="file-link">
                <i class="fas fa-file-pdf file-icon"></i> <?php echo e($Faculty->title); ?>

            </a>
        </div>

        <?php if(($index + 1) % 2 == 0 || $loop->last): ?>
            </div> <!-- Close row after 2 items or last item -->
        <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php $__currentLoopData = $Faculties; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course_id => $facultyGroup): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

    <?php 
   
        $firstFaculty = $facultyGroup->first(); 
       
    ?>

    <?php if($firstFaculty && $firstFaculty->course): ?> <!-- Check if the first faculty exists -->
        <h3 class="Faculty-List-Title">Faculty List <?php echo e($firstFaculty->year); ?> (<?php echo e($firstFaculty->course->course_name); ?>)</h3>

        <!-- Table Section -->
        <div class="table-container">
            <table class="custom-table">
                <thead>
                    <tr>
                        <th>S. No</th>
                        <th>Name of the Faculty Member</th>
                        <th>Specialization</th>
                        <th>Designation</th>
                        <th>Course</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $facultyGroup; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $faculty): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($index + 1); ?></td>
                            <td><?php echo e($faculty->faculty_name); ?></td>
                            <td><?php echo e($faculty->specialization); ?></td>
                            <td><?php echo e($faculty->designation); ?></td>
                            <td><?php echo e($faculty->course ? $faculty->course->course_name : 'N/A'); ?></td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    <?php endif; ?>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


               
    </div>
</body>

<script>
    // Extract query parameter
    const params = new URLSearchParams(window.location.search);
    const file = params.get('file');

    if (file) {
        // Initiate file download
        window.location.href = "files/" + file;
    }
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
<?php /**PATH C:\Users\DELL\OneDrive\Desktop\xampp1\PharmacyCollege\resources\views/frontend/faculties.blade.php ENDPATH**/ ?>
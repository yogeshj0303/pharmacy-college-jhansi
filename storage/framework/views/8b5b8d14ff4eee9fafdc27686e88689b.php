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
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
        }

        h1 {
            margin-bottom: 20px;
            color: #333;
            text-align: left; /* Align heading to the left */
        }

        .button-container {
            margin-bottom: 20px;
            text-align: left; /* Align buttons to the left */
        }

        .button-container button {
            padding: 10px 20px;
            margin: 0 10px 10px 0;
            background-color: transparent;
            color: #333;
            border: 1px solid;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .button-container .active-button {
            background-color: #007BFF;
            color: white;
            border: 1px solid #0056b3;
        }

        .gallery-container {
            max-width: 1460px;
            width: 100%;
            margin: 20px auto; /* Center the container */
            padding: 20px;
            box-sizing: border-box;
        }

        .gallery {
            display: none;
            grid-template-columns: repeat(4, 1fr);
            gap: 15px;
        }

        .gallery img {
            width: 350px; /* Set a fixed width */
            height: 250px; /* Set a fixed height */
            object-fit: cover;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease;
        }

        .gallery img:hover {
            transform: scale(1.05);
        }

        .header-section {
            background-color: #800000;
            color: white;
            padding: 10px 20px;
            text-align: left;
            display: flex;
            align-items: center;
            width: 100%;
            box-sizing: border-box;
        }

         .header-section i {
            margin-left:30px;
            font-size: 1rem;
        }

        .header-section p {
            margin: 0;
            font-size: 1rem;
            margin-left: 5px;
        }


        /* Responsive Styles */
        @media (max-width: 1200px) {
            .gallery {
                grid-template-columns: repeat(3, 1fr);
            }
        }

        @media (max-width: 768px) {
            h1 {
                font-size: 1.5rem;
            }

            .gallery {
                grid-template-columns: repeat(2, 1fr);
            }

            .button-container {
                display: flex;
                flex-wrap: wrap;
                justify-content: flex-start; /* Align buttons to the left */
            }

            .button-container button {
                margin: 10px 5px;
            }
        }

        @media (max-width: 480px) {
            .gallery {
                grid-template-columns: 1fr; /* Single column on very small screens */
            }

            .header-section p {
                font-size: 0.9rem;
            }
        }
    </style>
</head>
<body>

<div class="header-section">
    <a href="/" style="color: white; text-decoration: none;">
        <i class="fas fa-home"></i> <!-- Home icon -->
    </a>
    <p><a href="/" style="color: white; text-decoration: none;" onmouseover="this.style.textDecoration='none'" onmouseout="this.style.textDecoration='none'">/ Image Gallery</a></p>
</div>

<div class="gallery-container">
    <h1>Image Gallery</h1>

    <!-- Dynamic Buttons -->
    <div class="button-container">
        <?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $year => $imageGroup): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <button onclick="showGallery('<?php echo e($year); ?>')"><?php echo e($year); ?></button>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

    <!-- Dynamic Image Galleries -->
    <?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $year => $imageGroup): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div id="gallery<?php echo e($year); ?>" class="gallery" style="display: none;">
            <?php $__currentLoopData = $imageGroup; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <img src="<?php echo e(asset('' . $image->image)); ?>" alt="Image">
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>

<script>
    function showGallery(year) {
        document.querySelectorAll('.gallery').forEach(gallery => {
            gallery.style.display = 'none';
        });
        document.getElementById('gallery' + year).style.display = 'block';
    }

    // Show the first gallery by default
    document.addEventListener("DOMContentLoaded", function() {
        let firstGallery = document.querySelector('.gallery');
        if (firstGallery) firstGallery.style.display = 'block';
    });
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
</html>
<?php /**PATH C:\Users\DELL\OneDrive\Desktop\xampp1\PharmacyCollege\resources\views/frontend/image-gallery.blade.php ENDPATH**/ ?>
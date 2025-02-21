<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events at Pharmacy College</title>
    <!-- Link to Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">

    <style>
        /* Default styles for desktop */
        .event-header-section {
            background-color: #800000;
            color: white;
            padding: 5px 30px;
            display: flex;
            align-items: center;
        }

        .event-header-section i {
            font-size: 1.2rem;
        }

        .event-header-section p {
            margin: 0;
            font-size: 1rem;
            font-family: 'Poppins', sans-serif;
        }

        .event-header-section a {
            color: white;
            text-decoration: none;
            font-weight: 400;
            font-family: 'Poppins', sans-serif;
        }

        .containerevent {
            max-width: 1460px;
            margin: 20px;
            padding: 20px;
            box-sizing: border-box;
        }

        .title {
            color: #800000;
            font-family: 'Poppins', sans-serif;
            font-size: 2em;
            font-weight: 500;
        }

        .description {
            font-size: 14px;
            color: #444;
            font-family: 'Poppins', sans-serif;
        }

        .nav-tabs .nav-link {
            background-color: #002f6c;
            color: #333;
            font-weight: bold;
            border-radius: 0;
        }

        .nav-tabs .nav-link.active {
            background-color: #003f8c;
            color: white;
        }

        .event-header {
            background-color: #002f6c;
            color: white;
            padding: 10px;
            font-weight: bold;
        }

        .event-description {
            margin-top: 20px;
            font-size: 16px;
        }

        .event-images img {
            width: 100%;
            height: auto;
            border-radius: 5px;
        }

        /* Mobile-specific styles */
        @media (max-width: 768px) {
            .event-header-section {
                padding: 10px 15px;
                flex-direction: column;
                align-items: flex-start;
            }

            .event-header-section i {
                font-size: 1.5rem;
                margin-bottom: 5px;
            }

            .event-header-section p {
                font-size: 1.2rem;
            }

            .containerevent {
                margin: 10px;
                padding: 10px;
            }

            .title {
                font-size: 1.5em;
            }

            .description {
                font-size: 12px;
            }

            .nav-tabs .nav-link {
                font-size: 14px;
                padding: 8px 12px;
            }

            .event-header {
                font-size: 14px;
                padding: 8px;
            }

            .event-description {
                font-size: 14px;
            }

            .event-images .col-md-4 {
                width: 100%;
                padding: 5px;
            }
        }

        /* Additional small screen adjustments */
        @media (max-width: 480px) {
            .event-header-section {
                padding: 8px 12px;
            }

            .title {
                font-size: 1.2em;
            }

            .description {
                font-size: 10px;
            }

            .nav-tabs .nav-link {
                font-size: 12px;
                padding: 6px 10px;
            }

            .event-header {
                font-size: 12px;
            }

            .event-description {
                font-size: 12px;
            }
        }
    </style>
</head>

<body>

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

    <div class="event-header-section">
        <a href="/">
            <i class="fas fa-home"></i>
        </a><p><a href="/">/ Events</a></p>
    </div>

    <div class="containerevent">
        <h1 class="title">Events</h1>

        <p class="description">
            "At Pharmacy College, Jhansi, every event is a celebration of knowledge, innovation, and community engagement. Join us as we unite to learn, grow, and build lasting memories that will guide our shared journey toward excellence."
        </p>

       
        <?php if(isset($event->name)): ?>
    <div class="event-header mt-3" id="event-header"><?php echo e($event->name); ?></div>
<?php endif; ?>

<?php if(isset($event->description)): ?>
    <div class="event-description" id="event-description">
        <p><?php echo e($event->description); ?></p>
    </div>
<?php endif; ?>

<?php if(isset($event->image)): ?>
    <div class="row event-images mt-3" id="event-images">
        <div class="col-md-4">
            <img src="<?php echo e(asset($event->image)); ?>" alt="Event Image">
        </div>
    </div>
<?php endif; ?>

    </div>

  

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

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js"></script>
</body>

</html>
<?php /**PATH C:\Users\DELL\OneDrive\Desktop\xampp1\PharmacyCollege\resources\views/frontend/event.blade.php ENDPATH**/ ?>
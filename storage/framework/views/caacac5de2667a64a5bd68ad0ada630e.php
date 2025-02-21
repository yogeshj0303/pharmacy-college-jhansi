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

  .main-containerinfra {
    max-width: 1460px;
    margin: 0 auto;
    padding: 20px;
    height: 80vh;
}

.header-section {
    background-color: #800000;
    color: white;
    padding: 10px; /* Adjusted for mobile */
    text-align: left;
    display: flex;
    align-items: center;
}

.header-section i {
    margin-left: 30px;
    font-size: 1.5rem; /* Larger icons for mobile */
}

.header-section p {
    margin: 0;
    font-size: 1.2rem; /* Slightly larger text for mobile */
    margin-left: 5px;
}

.content-sectioninfra {
    display: flex;
    flex-wrap: wrap;
    margin-top: 80px;
}

.text-sectioninfra {
    flex: 1;
    min-width: 200px;
    margin-right: 20px;
}

.infrahead {
    font-size: 32px;
    color: #333;
    font-weight: 500;
    text-shadow: none;
    font-family: 'Poppins', sans-serif;
}

.list {
    margin-top: 15px;
    font-size: 13px;
    font-family: 'Poppins', sans-serif;
    list-style-type: disc;
    
}

.image-sectioninfra {
    flex: 0 0 500px;
    text-align: center;
}

.image-sectioninfra img {
    width: 100%;
    max-width: 500px;
    height: 350px;
}
@media (max-width: 768px) {
    .main-containerinfra {
        padding: 15px; /* Reduce padding on mobile */
        height:110vh;
    }

    .header-section {
        padding: 10px;
        text-align: center; /* Center-align the text for mobile */
    }

    .header-section i {
        margin-left: 0;
        font-size: 1.2rem; /* Adjust icon size */
    }

    .header-section p {
        font-size: 1rem; /* Adjust font size for mobile */
    }

    .content-sectioninfra {
        flex-direction: column;
        align-items: center;
        margin-top: 0px; /* Reduce margin for mobile */
        padding-bottom: 30px; /* Add space below content before footer */
    }

    .text-sectioninfra {
        margin-right: 0;
        margin-bottom: 20px; /* Add space between text and image */
    }

    .image-sectioninfra {
        flex: 0 0 100%; /* Make image take full width */
        margin-bottom: 20px; /* Add margin below image to prevent overlap */
    }

    .image-sectioninfra img {
        max-width: 100%; /* Ensure image scales to mobile width */
        height: auto; /* Maintain aspect ratio */
    }

    .infrahead {
        font-size: 24px; /* Smaller heading for mobile */
    }

    .list {
        font-size: 12px; /* Smaller font size for list on mobile */
    }
}


    </style>

<body>
<div class="header-section">
    <a href="/" style="color: white; text-decoration: none;">
        <i class="fas fa-home"></i> <!-- Home icon -->
    </a>
    <p><a href="/" style="color: white; text-decoration: none;" onmouseover="this.style.textDecoration='none'" onmouseout="this.style.textDecoration='none'">/ Infrastructure</a></p>
</div>


<div class="main-containerinfra">
  

    <div class="content-sectioninfra">
        <div class="text-sectioninfra">
            <h1 class="infrahead">Infrastructure</h1>
             <li class="list">Spacious, well developed, attractive infrastructure as per AICTE & PCI norms</li>
            <li class="list">Digital class rooms with modern teaching facilities (LCD projector)</li>
             <li class="list">Book bank facilities</li>
            <li class="list">Indoor sports facilities</li>
            <li class="list" >Institute boasts of well equipped exclusively 14 labs for B.Pharm and 6 labs for M.Pharm with latest facilities & equipments as per industrial standards</li>

        </div>
        <div class="image-sectioninfra">
            <img src="https://synques-dyn-cdn.s3.ap-south-1.amazonaws.com/oriental/ocp-bhopal/images/infrastructure-1.webp" ></img>
        </div>
    </div>
</div>

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
<?php /**PATH C:\Users\DELL\OneDrive\Desktop\xampp1\PharmacyCollege\resources\views/frontend/Infrastructure.blade.php ENDPATH**/ ?>
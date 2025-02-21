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
    .result-header-section {
        background-color: #800000;
        color: white;
        padding: 5px 30px;
        display: flex;
        align-items: center;
    }

    .result-header-section i {
        /margin-right: 10px;/
        font-size: 1rem;
    }

    .result-header-section p {
        margin: 0;
        font-size: 1rem;
        font-family: 'Poppins', sans-serif; /* Apply Poppins font globally */
    }

    .result-header-section a {
        color: white;
        text-decoration: none;
        font-weight: 400;
        font-family: 'Poppins', sans-serif; /* Apply Poppins font globally */
    }

.containerres {

    max-width: 1460px;
    margin: 20px;
    padding: 20px;
    box-sizing: border-box; /* Ensures padding and margin are included in the width */
}


.title {
    color: #800000;
    font-family: 'Poppins', sans-serif;
    font-size:30px;
    font-weight:550;
}

.subtitle {
    color: #a00;
    font-size: 1.2rem;
    font-weight: bold;
}

.description {
    font-size: 14px;
    color: #444;
    font-family: 'Poppins', sans-serif;
}

.key-points {
    background: #eef3ff;
    padding: 20px;
    border-radius: 5px;
}

.key-points-title {
    margin-bottom: 10px;
    font-family: 'Poppins', sans-serif;
}

.key-points-list {
    list-style: none;
    padding: 0;
    font-family: 'Poppins', sans-serif;
}

.key-points-item {
    padding: 5px 0;
    font-family: 'Poppins', sans-serif;
    font-size: 14px;
}

.download-section {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 10px;
    margin-top: 20px;
    font-family: 'Poppins', sans-serif;
}

.file-link {
    background: #fff;
    padding: 10px;
    border-radius: 5px;
    display: flex;
    align-items: center;
    gap: 10px;
    font-weight: bold;
    cursor: pointer;
    font-family: 'Poppins', sans-serif;
}

.file-icon {
    color: #a00;
}

@media (max-width: 768px) {
    .results-header-section {
        flex-direction: column;
        align-items: center; /* Center items horizontally */
        justify-content: center; /* Center items vertically if needed */
        padding: 10px;
    }

    .results-header-section i {
        margin-left: 0;
        margin-bottom: 5px;
        text-align: center; /* Center the icon */
    }

    .results-header-section p {
        font-size: 1.1rem;
        margin-left: 0;
        text-align: center; /* Center the text */
    }
}

@media (max-width: 480px) {
    .results-header-section {
        padding: 8px;
    }

    .results-header-section p {
        font-size: 1rem; /* Adjust font size for very small screens */
    }

    .results-header-section i {
        font-size: 0.9rem; /* Slightly smaller icons */
    }
}




</style>
     <div class="result-header-section">
        <a href="/">
            <i class="fas fa-home"></i>
        </a><p><a href="/">/ Result Analysis</a></p>
    </div>

    <div class="containerres">
        <h1 class="title">Result Analysis</h1>
        <h2 class="subtitle">Comprehensive Result Analysis for Academic Excellence at Our College</h2>
        <p class="description">
            At our college, we prioritize academic excellence and comprehensive result analysis to enhance student performance. Our dedicated faculty employs innovative assessment methods and data-driven strategies to identify strengths and areas for improvement...
        </p>
        
        <div class="key-points">
            <h3 class="key-points-title">Key Points</h3>
            <ul class="key-points-list">
                <li class="key-points-item"><strong>Academic Excellence Focus:</strong> Commitment to high standards in student performance.</li>
                <li class="key-points-item"><strong>Innovative Assessment Methods:</strong> Utilization of diverse evaluation techniques.</li>
                <li class="key-points-item"><strong>Data-Driven Strategies:</strong> Analyzing examination results, attendance, and engagement metrics.</li>
                <li class="key-points-item"><strong>Tailored Support Programs:</strong> Customized assistance to address individual student needs.</li>
                <li class="key-points-item"><strong>Continuous Improvement Culture:</strong> Ongoing enhancements in teaching and learning practices.</li>
                <li class="key-points-item"><strong>Empowerment for Success:</strong> Providing resources and guidance for every student to reach their full potential.</li>
            </ul>
        </div>

        <div class="download-section">
    <?php $__currentLoopData = $documents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $document): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
       
        <a href="<?php echo e(asset($document->document)); ?>" target="_blank" class="file-link" style="text-decoration:none !important; color:black !important;">
                <i class="fas fa-file-pdf file-icon"></i> <?php echo e($document->title); ?>

            </a>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
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
<?php endif; ?><?php /**PATH C:\Users\DELL\OneDrive\Desktop\xampp1\PharmacyCollege\resources\views/frontend/result.blade.php ENDPATH**/ ?>
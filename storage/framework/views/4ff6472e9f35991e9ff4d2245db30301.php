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
            height:auto;
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
            margin-left:30px;
            font-size: 1rem;
        }

        .header-section p {
            margin: 0;
            font-size: 1rem;
            margin-left: 5px;
              font-family: 'Poppins', sans-serif;
        }

        .content-section {
            display: flex;
            flex-wrap: wrap;
            margin-top: 20px;
        }

        .text-section {
            flex: 1;
            min-width: 300px;
            margin-right: 20px;
        }

        .text-section h1 {
            font-size: 2rem;
            color: #800000;
              font-family: 'Poppins', sans-serif;
        }

        .text-section p {
            margin-bottom: 15px;
              font-family: 'Poppins', sans-serif;
              font-size:14px;
        }

        .image-section {
            flex: 0 0 400px;
            text-align: center;
        }

        .image-section img {
            width: 100%;
            max-width: 400px;
            border-radius: 5px;
        }
      

        @media (max-width: 768px) {
            .content-section {
                flex-direction: column;
                align-items: center;
            }

            .text-section {
                margin-right: 0;
            }
        }
    </style>
</head>
<body>
<div class="header-section">
    <a href="/" style="color: white; text-decoration: none;">
        <i class="fas fa-home"></i> <!-- Home icon -->
    </a>
    <p><a href="/" style="color: white; text-decoration: none;" onmouseover="this.style.textDecoration='none'" onmouseout="this.style.textDecoration='none'">/ Chairman Message</a></p>
</div>

<div class="main-container">


    <div class="content-section">
        <div class="text-section">
            <h1>Director's Message</h1>
            <p>Pharmacy college of Jhansi believes in continuous improvement of quality education in Pharmacy. The institute, therefore, has evolved a system to inculcate the traits of ingenuity, innovation & social responsibility among Pharmacy students along with the usual course curriculum. Oriental is known for its world-class infrastructure and thereby promoting research climate in the educational institutes and it’s my personal passion to give the best facilities for advancement of knowledge and innovations.</p>
            <p>Our students are provided with ample opportunities during their studies that act like a springboard for career selection. The campus experience helps the students to continuously learn from the faculty and thereby develop into better Pharma professionals.</p>
            <p>It is indeed a matter of pride that the students of the previous batches are enjoying good positions in various national and multinational organizations of repute. You are invited to join this ever-growing fraternity of "Oriental Group of Institutes".</p>
            <p><strong>Praveen Thakral</strong><br>
               (Director, Pharmacy college of Jhansi )</p>
        </div>
    </div>
</div>

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

<?php /**PATH C:\Users\DELL\OneDrive\Desktop\xampp1\PharmacyCollege\resources\views/frontend/director.blade.php ENDPATH**/ ?>
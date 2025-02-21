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
  

        .cont {
            max-width: 1460px;
            margin: 0 auto;
            padding: 20px;
        }

        .hdr {
            background-color: #800000;
            color: white;
            padding: 10px;
            text-align: left;
            display: flex;
            align-items: center;
        }

        .hdr i {
            margin-left: 10px;
            font-size: 1rem;
        }

        .hdr p {
            margin: 0;
            font-size: 1rem;
            margin-left: 5px;
        }

        .hdr p a {
            color: white;
            text-decoration: none;
        }

        .hdr p a:hover {
            text-decoration: underline;
        }

        .intro {
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 8px;
        }

        .intro h1 {
            margin: 0;
            font-size: 36px;
            color: #333;
            font-weight: bold;
        }
      #p-head{
             margin: 0;
            font-size: 2em;
            color: #800000;
            font-weight: 500;
      }
        .intro p {
            color: #555;
            line-height: 1.6;
        }

        .row {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            flex-wrap: wrap;
            gap: 20px;
            padding: 20px;
            border-radius: 8px;
        }

        .row .rbox {
            flex: 1;
            background-color: #e6f7e6;
            padding: 15px;
            border-radius: 8px;
        }

        .row .act {
            flex: 1;
            background-color: #fef7e0;
            padding: 15px;
            border-radius: 8px;
        }

        .row .img-box {
            text-align: center;
            flex: 1;
        }

        .row .img-box img {
            max-width: 100%;
            height: 300px;
        }

        ul {
            padding-left: 20px;
            list-style-type: square;
        }

        ul li {
            margin-bottom: 10px;
            font-size: 18px;
        }

        .fac {
            background-color: #e6f7e6;
            padding: 20px;
            border-radius: 8px;
            margin-top: 20px;
        }

        .fac h2 {
            font-size: 24px;
            margin-bottom: 10px;
        }

        .fac ul {
            list-style-type: square;
            padding: 0 20px;
            columns: 3;
            column-gap: 20px;
        }

        .fac ul li {
            padding: 5px 0;
            font-size: 16px;
            color: #555;
        }

        .btn-img {
            display: block;
            background-color: navy;
            color: white;
            padding: 10px;
            text-align: center;
            text-decoration: none;
            margin-top: 20px;
            width: 150px;
            border-radius: 5px;
        }

        .btn-img:hover {
            background-color: #004080;
        }

        @media (min-width: 769px) {
            .btn-img {
                margin-left: 0;
                margin-right: auto;
            }
        }

        @media (max-width: 768px) {
            .row {
                flex-direction: column;
            }

            .fac ul {
                columns: 2;
            }

            .btn-img {
                width: 50%;
                margin: 20px auto 0;
            }
        }

        @media (max-width: 480px) {
            .fac ul {
                columns: 1;
            }

            .intro h1 {
                font-size: 28px;
            }

            ul li {
                font-size: 16px;
            }

            .btn-img {
                width: 50%;
                margin: 20px auto 0;
            }
        }
    </style>

<body>
    <div class="hdr">
        <a href="/" style="color: white; text-decoration: none;">
            <i class="fas fa-home"></i>
        </a>
        <p>/ Pharmacology
</p>
    </div>

    <div class="cont">
        <div class="intro">
            <h1 id="p-head">Pharmacology
</h1>
            <p>Pharmacology
 is a unique and dynamic branch of pharmacy, since it involves the understanding of how a drug deals with the human body and how the human body responds to the drug.</p>
        </div>

        <div class="row">
            <div class="rbox">
                <h2>Major Areas of Research</h2>
                <ul>
                    <li>Anti-Diabetic Activity</li>
                    <li>Hepatoprotective Activity</li>
                    <li>CNS Activity</li>
                    <li>Anti-Inflammatory and Analgesic Activity</li>
                </ul>
            </div>

            <div class="img-box">
                <img src="https://media.istockphoto.com/id/1832921718/photo/heap-of-medications-on-blue-background.webp?a=1&b=1&s=612x612&w=0&k=20&c=Pf0cO6x-R_rBZJHyprPzfxCUakjrtHVOZNavnuLZRRI=" alt="Research Image">
            </div>

            <div class="act">
                <h3>Recent Activities</h3>
                <ul>
                    <li>Phytochemical screening of the crude drug by using Soxhlet assembly</li>
                    <li>Ash value and Loss on drying calculation of crude drugs</li>
                    <li>Extractives value (alcoholic and aqueous) of crude drug</li>
                </ul>
            </div>
        </div>

        <div class="fac">
            <h2>Facilities</h2>
            <p><strong>Name of Instrument</strong></p>
            <ul>
                <li>Microscope with Stage Micrometer</li>
                <li>Digital Balance</li>
                <li>Autoclave</li>
                <li>Hot Air Oven</li>
                <li>B.O.D. Incubator</li>
                <li>Refrigerator</li>
                <li>Laminar Air Flow</li>
                <li>Colony Counter</li>
                <li>Zone Reader</li>
                <li>Digital Ph Meter</li>
                <li>Sterility Testing Unit</li>
                <li>Camera Lucida</li>
                <li>Eye Piece Micrometer</li>
                <li>Incinerator</li>
                <li>Moisture Balance</li>
                <li>Heating Mantle</li>
                <li>Fluorimeter</li>
                <li>Vacuum Pump</li>
                <li>Micropipettes (Single and Multi Channeled)</li>
                <li>Micro Centrifuge</li>
                <li>Projection Microscope</li>
                <li>Haemocytometer with Micropipettes</li>
                <li>Sahli’s Haemocytometer</li>
                <li>Hutchinson’s Spirometer</li>
                <li>Spygmomanometer</li>
                <li>Stethoscope</li>
                <li>Permanent Slides for Various Tissues</li>
                <li>Models for Various Organs</li>
                <li>Specimen for Various Organs and Systems</li>
                <li>Skeleton and Bones</li>
                <li>Different Contraceptive Devices and Models</li>
                <li>Muscle Electrodes</li>
                <li>Lucas Moist Chamber</li>
                <li>Myographic Lever</li>
                <li>Stimulator</li>
                <li>Centrifuge</li>
                <li>Sherrington’s Kymograph Machine / Polyrite</li>
                <li>Sherrington Drum</li>
                <li>Perspex Bath Assembly (Single Unit)</li>
                <li>Aerators</li>
                <li>Computer with LCD</li>
                <li>Software Packages For Experiment</li>
                <li>Actophotometer</li>
                <li>Rotarod</li>
                <li>Pole Climbing Apparatus</li>
                <li>Analgesiometer (Eddy’s Hot Plate And Radiant Heat Methods)</li>
                <li>Convulsiometer</li>
                <li>Plethysmograph</li>
                <li>Standard Graphs of Various Drugs</li>
            </ul>
        </div>

        <a href="#" class="btn-img">View Images</a>
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
<?php /**PATH C:\Users\DELL\OneDrive\Desktop\xampp1\PharmacyCollege\resources\views/frontend/Pharmacology.blade.php ENDPATH**/ ?>
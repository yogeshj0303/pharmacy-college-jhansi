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
    

        .pharma-container {
            max-width: 1460px;
            margin: 0 auto;
            padding: 20px;
        }

        .pharma-header-section {
            background-color: #800000;
            color: white;
            padding: 1px;
            text-align: left;
            display: flex;
            align-items: center;
        }

        .pharma-header-section i {
            margin-left: 30px;
            font-size: 1rem;
        }

        .pharma-header-section p {
            margin: 0;
            font-size: 1rem;
            margin-left: 5px;
             text-shadow:none;
        }

 
        .pharmahead{
            margin: 0;
            font-size: 30px;
            color: #800000;
            font-weight: 600;
            text-shadow: none;
            font-family: 'Poppins', sans-serif;
        }

        .pharma-content-research-container {
            display: flex;
            gap: 20px;
            justify-content: space-between;
            flex-wrap: wrap;
        }

        .pharma-content {
            line-height: 1.6;
            color: #555;
            text-align: justify;
            padding-right: 20px;
            border-right: 2px solid #ddd;
            flex: 0 0 60%;
            text-shadow:none;
        }

        .pharma-p {
            line-height: 1.6;
            color: #555;
            text-align: justify;
            font-family: 'Poppins', sans-serif;
            font-size: 14px;
            text-shadow: none;
        }

        .pharma-research {
            background-color: #cedff3;
            padding: 20px;
            flex: 0 0 30%;
        }

        .pharma-content h2, .pharma-research h2 {
            font-size: 24px;
            color: #333;
            font-weight: bold;
            text-shadow:none;
        }

        ul {
            padding-left: 20px;
            list-style-type: square;
            line-height: 1.6;
            color: #555;
            text-align: justify;
            font-family: 'Poppins', sans-serif;
            font-size: 14px;
            text-shadow: none;
        }

        ul li {
            margin-bottom: 10px;
            line-height: 1.6;
            color: #555;
            text-align: justify;
            font-family: 'Poppins', sans-serif;
            font-size: 13px;
            text-shadow: none;
        }

        .pharma-image-container {
            display: flex;
            gap: 20px;
            flex: 1;
            flex-wrap: wrap;
            justify-content: center;
        }

        .pharma-image-container img {
            max-width: 30%;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            filter: brightness(0.9);
        }

        .pharma-image-container img:hover {
            transform: scale(1.1);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.4);
            filter: brightness(1);
        }

        .pharma-image-container img:active {
            transform: scale(0.98);
        }

        .actpara {
            line-height: 1.6;
            color: #555;
            text-align: justify;
            font-family: 'Poppins', sans-serif;
            font-size: 12px;
            text-shadow: none;
        }

        @media (max-width: 768px) {
            .pharma-content-research-container {
                flex-direction: column;
            }

            .pharma-content {
                padding-right: 0;
                border-right: none;
                flex: 1;
            }

            .pharma-research {
                flex: 1;
            }

            .pharma-image-container img {
                max-width: 90%;
                margin-bottom: 20px;
            }
        }

        .pharma-recent-activities {
            display: flex;
            gap: 20px;
            margin-top: 40px;
            padding: 20px;
            background-color: #dbeff3;
            flex-wrap: wrap;
            border-radius: 10px;
            border-bottom: 1px dotted;
            margin-bottom: 20px;
        }

        .pharma-recent-activities-content {
            flex: 1;
        }

        .pharma-recent-activities-content h2 {
            font-size: 24px;
            color: #333;
            font-weight: bold;
            margin-bottom: 15px;
        }

        .pharma-recent-activities-content ul {
            padding-left: 20px;
            list-style-type: square;
        }

        .pharma-recent-activities-content ul li {
            margin-bottom: 10px;
            font-size: 12px;
            color: #555;
        }

    </style>

<body>
    <div class="pharma-header-section">
        <a href="/" style="color: white; text-decoration: none;">
            <i class="fas fa-home"></i>
        </a>
        <p><a href="/" style="color: white; text-decoration: none;" onmouseover="this.style.textDecoration='none'" onmouseout="this.style.textDecoration='none'"> </a></p> / Pharmaceutics
    </div>
    
    <div class="pharma-container">
        <div class="pharma-header">
            <h1 class="pharmahead">Pharmaceutics</h1>
        </div>
        
        <div class="pharma-content-research-container">
            <div class="pharma-content">
                <p class="pharma-p">Pharmaceutical Chemistry is an integral part of the pharmacy education program. It covers several aspects of new drug discovery and development in collaboration with the other four specialty domains in the program. The Department of Pharmaceutical Chemistry has two postgraduate and three undergraduate laboratories. The laboratories are designed and equipped with several state-of-the-art technologies, including sophisticated fume hoods attached with nitrogen and water supply.</p>

                             <p class="pharma-p">The department is extensively involved in undergraduate and postgraduate teaching with research-oriented subjects such as Organic Chemistry, Pharmaceutical Chemistry, Medicinal Chemistry, and Interpretation of Spectral Data. The postgraduate program mainly focuses on basic approaches to drug discovery, computational chemistry, molecular modeling, drug designing, and development. The use of computer-assisted drug design and molecular modeling software helps the students to learn the intricacies of the process related to the binding of the drug with the receptor.</p>

            </div>

            <div class="pharma-research">
                <h2>Major Areas of Research</h2>
                <ul>
                    <li>Drug Discovery in areas of Anticancer</li>
                    <li>Anti-inflammatory</li>
                    <li>Anti-diabetic</li>
                    <li>Anti-tubercular</li>
                    <li>Anti-convulsant Research</li>
                </ul>
            </div>
        </div>

        <div class="pharma-recent-activities">
            <div class="pharma-recent-activities-content">
                <h2>Recent Activities</h2>
                <ul>
                    <li class="actpara">Simultaneous Estimation of Moxifloxacin HCL and Prednisolone Acetate From Eye Drops</li>
                    <li class="actpara">Synthesis and Characterization of Some Calcium Channel Blockers as Thiosalicylamide Derivative as Antihypertensive Agents</li>
                    <li class="actpara">Simultaneous Estimation of Tazarotene & Hydroquinone by RP-HPLC</li>
                    <li class="actpara">Synthesis & Pharmacological Evaluation of Some Calcium Channel Blocker Thiosalicylamide Derivatives as Antihypertensive Agents</li>
                    <li class="actpara">Design and Synthesis of N-(3-(3-Alkoxy Phenyl) Acetamide for their Memory Improvement Activity</li>
                    <li class="actpara">Development and validation of RP-HPLC method for simultaneous estimation of Guaifensin and Pseudoephedrine HCl in tablet dosage form</li>
                    <li class="actpara">Design synthesis and characterization of 6-Diaryl-2-Oxo (Imino) 1,2 dihydro pyridine, 3 Carbo Nitrile based analogues as DYRK1A inhibitor</li>
                </ul>
            </div>
        </div>

        <div class="pharma-image-container">
         <img src="https://images.unsplash.com/photo-1576602975754-efdf313b9342?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTl8fHBoYXJtYWN5fGVufDB8fDB8fHww" alt="Recent Activities">
            <img src="https://images.unsplash.com/photo-1576602975754-efdf313b9342?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTl8fHBoYXJtYWN5fGVufDB8fDB8fHww" alt="Recent Activities">
            <img src="https://images.unsplash.com/photo-1576602975754-efdf313b9342?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTl8fHBoYXJtYWN5fGVufDB8fDB8fHww" alt="Recent Activities">
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
<?php /**PATH C:\Users\DELL\OneDrive\Desktop\xampp1\PharmacyCollege\resources\views/frontend/Pharmaceutics.blade.php ENDPATH**/ ?>
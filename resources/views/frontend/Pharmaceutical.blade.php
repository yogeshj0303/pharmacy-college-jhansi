<x-front-header/>
    <style>
        .box {
            max-width: 1460px;
            margin: 0 auto;
            padding: 20px;
        }
        .top-bar {
            background-color: #800000;
            color: white;
            padding: 1px;
            text-align: left;
            display: flex;
            align-items: center;
        }
        .top-bar i {
            margin-left: 30px;
            font-size: 1rem;
        }
        .top-bar p {
            margin: 0;
            font-size: 1rem;
            margin-left: 5px;
        }
        .heading .main-title {
            margin: 0;
            font-size: 30px;
            color: #800000;
            font-weight: 600;
            text-shadow: none;
            font-family: 'Poppins', sans-serif;
        }
        .text{
          border-bottom:1px solid;
          padding-bottom: 20px;
          margin-bottom: 20px;
        }
        .text .paragraph {
            line-height: 1.6;
            color: #555;
            text-align: justify;
            font-family: 'Poppins', sans-serif;
            font-size: 14px;
            text-shadow: none;
        }
        .text {
            margin-top: 20px;
            font-size: 18px;
            color: #333;
            font-weight: 600;
            text-shadow: none;
            font-family: 'Poppins', sans-serif;
        }
        .subheading1 {

            font-size: 20px;
            color: #333;
            font-weight: 500;
            text-shadow: none;
            font-family: 'Poppins', sans-serif;
        }
             .subheading2 {
            margin-top: 20px;
            font-size: 20px;
            color: #333;
            font-weight: 500;
            text-shadow: none;
            font-family: 'Poppins', sans-serif;
        }
            .subheading3 {
            margin-top: 20px;
            font-size: 20px;
            color: #333;
            font-weight: 500;
            text-shadow: none;
            font-family: 'Poppins', sans-serif;
        }
        .flex {
            display: flex;
            gap: 20px;
            align-items: flex-start;
            flex-wrap: wrap;
        }
        .img-box {
            flex: 1;
            position: relative;
            overflow: hidden;
        }
        .img-box img {
            max-width: 150%;
            transition: transform 0.3s ease;
        }
        .img-box:hover img {
            transform: scale(1.1);
        }
        .lab {
            flex: 2;
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
            margin-left: 100px;
        }
        .lab .col {
            flex: 1;
        }
        .research {
            flex: 1;
            background-color: #cedff3;
            padding: 15px;
        }
        .list {
            padding-left: 20px;
            list-style-type: square;
        }
        .list .list-item {
            margin-bottom: 10px;
            font-size: 13px;
            font-family: 'Poppins', sans-serif;
        }
        .updates {
            display: flex;
            gap: 20px;
            margin-top: 40px;
            padding: 20px;
            background-color: #dbeff3;
            flex-wrap: wrap;
            border-bottom: 1px dotted;
            margin-bottom: 20px;
        }
        .updates img {
            max-width: 100%;
            flex: 1;
            position: relative;
            transition: transform 0.3s ease;
        }
        .updates img:hover {
            transform: scale(1.1);
        }
        .updates-content {
            flex: 2;
        }
        .updates-content .subheading {
            font-size: 24px;
            color: #333;
            font-weight: bold;
            margin-bottom: 15px;
            font-family: 'Poppins', sans-serif;
        }
        @media (max-width: 768px) {
            .flex {
                flex-direction: column;
            }
            .lab {
                flex-direction: column;
                margin-left: 0px;
            }
            .updates {
                flex-direction: column;
            }
            .updates img {
                max-width: 100%;
                margin-bottom: 20px;
            }
        }
    </style>

<body>
    <div class="top-bar">
        <a href="/" style="color: white; text-decoration: none;">
            <i class="fas fa-home"></i>
        </a>
        <p><a href="/" style="color: white; text-decoration: none;"> / Pharmaceutical Chemistry</a></p>
    </div>
    
    <div class="box">
        <div class="heading">
            <h1 class="main-title">Pharmaceutical Chemistry</h1>
        </div>
        <div class="text">
            <p class="paragraph">Pharmaceutical Chemistry is an integral part of the pharmacy education program. It covers several aspects of new drug discovery and development in collaboration with the other four specialty domains in the program. The Department of Pharmaceutical Chemistry has two postgraduate and three undergraduate laboratories. The laboratories are designed and equipped with several state-of-the-art technologies, including sophisticated fume hoods attached with nitrogen and water supply.</p>
            <p class="paragraph">The department is extensively involved in undergraduate and postgraduate teaching with research-oriented subjects such as Organic Chemistry, Pharmaceutical Chemistry, Medicinal Chemistry, and Interpretation of Spectral Data. The postgraduate program mainly focuses on basic approaches to drug discovery, computational chemistry, molecular modeling, drug designing, and development. The use of computer-assisted drug design and molecular modeling software helps the students to learn the intricacies of the process related to the binding of the drug with the receptor.</p>
        </div>

        <div class="flex">
            <div class="img-box">
                <img src="https://plus.unsplash.com/premium_photo-1668487826874-ecb21f98bb19?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8UGhhcm1hY29nbm9zeXxlbnwwfHwwfHx8MA%3D%3D" alt="Laboratory">
                <div class="research">
                    <h2 class="subheading1">Major Areas of Research</h2>
                    <ul class="list">
                        <li class="list-item">Drug Discovery in areas of Anticancer</li>
                        <li class="list-item">Anti-inflammatory, Anti-diabetic, etc.</li>
                    </ul>
                </div>
            </div>
            <div class="lab">
                <div class="col">
                    <h2 class="subheading2">Facilities</h2>
                    <ul class="list">
                        <li class="list-item">Hot plates</li>
                        <li class="list-item">Oven</li>
                          <li class="list-item">Refrigerator</li>
                        <li class="list-item">Analytical Balances for demonstration</li>
                        <li class="list-item">Digital balance (10mg sensitivity)</li>
                        <li class="list-item">Digital Balance (1mg sensitivity)</li>
                    </ul>
                    
                </div>
                 <div class="col">
  <h2 class="subheading2"></h2>
                    <ul class="list">
                        <li class="list-item">Muffle Furnace</li>
                        <li class="list-item">Mechanical Stirrers</li>
                          <li class="list-item">Magnetic Stirrers with Thermostat</li>
                        <li class="list-item">Vacuum Pump</li>
                        <li class="list-item">Digital pH meter</li>
                        <li class="list-item">Microwave Oven</li>
                    </ul>
                    
                </div>
            </div>
        </div>

        <div class="updates">
            <div class="img-box">
                <img src="https://images.unsplash.com/photo-1576602975754-efdf313b9342?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTl8fHBoYXJtYWN5fGVufDB8fDB8fHww" alt="Recent Activities">
            </div>
            <div class="updates-content">
                <h2 class="subheading3">Recent Activities</h2>
                <ul class="list">
                    <li class="list-item">Simultaneous Estimation of Moxifloxacin HCL and Prednisolone Acetate From Eye Dropsli>
                    <li class="list-item">Synthesis and Characterization of Some Calcium Channel Blockers as Thiosalicylamide Derivative as Antihypertensive Agents</li>
                    <li class="list-item">Simultaneous Estimation of Tazarotene & Hydroquinone by RP-HPLC</li>
                    <li class="list-item">Synthesis & Pharmacological Evaluation of Some Calcium Channel Blocker Thiosalicylamide Derivatives as Antihypertensive Agents</li>
                    <li class="list-item">Design and Synthesis of N-(3-(3-Alkoxy Phenyl) Acetamide for their Memory Improvement Activity</li>
                     <li class="list-item">Development and validation of RP-HPLC method for simeltaneous estimation of Guaifensin and Pseudoephedrine HCl in tablet dosage form.</li>
                     <li class="list-item">Design synthesis and characteriztion of 6-Diaryl-2-Oxo (Imino) 1,2 dihydro pyridine, 3 Carbo Nitrile based analogues as DYRK1A inhibitor.
</li>
                    <li class="list-item"></li>
                    <li class="list-item"></li>
                </ul>
            </div>
        </div>
    </div>
</body>
<x-front-footer/>

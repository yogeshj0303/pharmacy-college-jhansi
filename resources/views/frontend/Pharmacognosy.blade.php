<x-front-header/>
    <style>
       .pharma-container12 {
        max-width: 1460px;
        margin: 0 auto;
        padding: 20px;
    }

    .pharma-header-section {
        background-color: #800000;
        color: white;
        padding: 10px;
        text-align: left;
        display: flex;
        align-items: center;
        font-weight: 600;
        font-family: 'Poppins', sans-serif;
    }

    .pharma-header-section i {
        margin-left: 30px;
        font-size: 1.2rem;
    }

    .pharma-header-section p {
        margin: 0;
        font-size: 1.1rem;
        margin-left: 5px;
    }

    .pharma-header22 {
        margin: 0;
        font-size: 30px;
        color:#800000;
        font-weight: 700;
        font-family: 'Poppins', sans-serif;
        letter-spacing: 1px;
    }

    .pharma-content-research-container12 {
        display: flex;
        gap: 20px;
        justify-content: space-between;
        flex-wrap: wrap;
    }

    .pharma-content12 {
        line-height: 1.8;
        color: #444;
        text-align: justify;
        padding-right: 20px;
        flex: 0 0 100%;
        font-family: 'Poppins', sans-serif;
    }

    .pharma-content12 h2, .pharma-research12 h2 {
        font-size: 26px;
        color: #800000;
        font-weight: 700;
        font-family: 'Poppins', sans-serif;
    }

    p, ul li {
        font-family: 'Poppins', sans-serif;
        font-size: 16px;
        line-height: 1.6;
        color: #333;
    }

    ul {
        padding-left: 20px;
        list-style-type: square;
    }

    .pharma-image-container12 {
        display: flex;
        gap: 20px;
        flex: 1;
        flex-wrap: wrap;
        justify-content: center;
    }

    .pharma-image-container12 img {
        max-width: 30%;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        border-radius: 8px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
        filter: brightness(0.9);
    }

    .pharma-image-container12 img:hover {
        transform: scale(1.1);
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.5);
        filter: brightness(1);
    }

    .pharma-image-container12 img:active {
        transform: scale(0.98);
    }

 

    .pharma-recent-activities12 {
        display: flex;
        gap: 20px;
        margin-top: 40px;
        padding: 20px;
        background-color: #dbeff3;
        flex-wrap: wrap;
        border-radius: 10px;
        border-bottom: 1px dotted;
        margin-bottom: 20px;
        font-family: 'Poppins', sans-serif;
    }

    .pharma-recent-activities-content12 h2 {
        font-size: 28px;
        color: #333;
        font-weight: 700;
        margin-bottom: 15px;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        font-family: 'Poppins', sans-serif;
    }

    .container12 {
        display: flex;
        padding: 20px;
    }

        .lab {
            flex: 2;
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
            /margin-left: 100px;/
        }
        .lab .col {
            flex: 1;
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
    .activities12 img {
        width: 100%;
        border-radius: 8px;
    }

    .view-images {
        display: block;
        background-color: navy;
        color: white;
        padding: 12px;
        text-align: center;
        text-decoration: none;
        margin-top: 20px;
        width: 160px;
        border-radius: 6px;
        font-weight: 600;
        font-family: 'Poppins', sans-serif;
    }

    .act, .paragraph {
        text-align: left;
    }
    
    
    @media (max-width: 768px) {
    .pharma-container12 {
        padding: 15px;
    }

    .pharma-header-section {
        flex-direction: column;
        text-align: center;
        padding: 15px;
    }

    .pharma-header-section i {
        margin-left: 0;
        margin-bottom: 5px;
    }

    .pharma-header-section p {
        font-size: 1rem;
    }

    .pharma-header22 {
        font-size: 24px;
        text-align: center;
    }

    .pharma-content-research-container12 {
        flex-direction: column;
        gap: 15px;
    }

    .pharma-content12 {
        text-align: left;
        padding: 0;
    }

    .pharma-content12 h2, .pharma-research12 h2 {
        font-size: 22px;
        text-align: center;
    }

    p, ul li {
        font-size: 14px;
        line-height: 1.5;
    }

    .pharma-image-container12 {
        flex-direction: column;
        align-items: center;
        gap: 15px;
    }

    .pharma-image-container12 img {
        max-width: 100%;
        border-radius: 12px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    .pharma-recent-activities12 {
        padding: 15px;
        margin-top: 30px;
        border-radius: 8px;
        text-align: center;
    }

    .pharma-recent-activities-content12 h2 {
        font-size: 24px;
    }

    .container12 {
        flex-direction: column;
        padding: 15px;
    }

    .lab {
        flex-direction: column;
        gap: 15px;
        text-align: center;
    }

    .list {
        padding-left: 0;
        text-align: left;
    }

    .list .list-item {
        font-size: 14px;
    }

    .view-images {
        width: 100%;
        max-width: 200px;
        padding: 14px;
        margin: 15px auto 0;
        border-radius: 8px;
        font-size: 16px;
        transition: all 0.3s ease-in-out;
    }

    .view-images:hover {
        background-color: #0055aa;
        transform: scale(1.05);
    }

    .act, .paragraph {
        text-align: center;
    }
}

    </style>

<body>
    <div class="pharma-header-section">
        <a href="/" style="color: white; text-decoration: none;">
            <i class="fas fa-home"></i>
        </a>/ Pharmacognosy
    </div>
    
    <div class="pharma-container12">

            <h1 class="pharma-header22">Pharmacognosy</h1>

        
        <div class="pharma-content-research-container12">
            <div class="pharma-content12">
                <p>Pharmaceutical Chemistry is an integral part of the pharmacy education program...</p>
                <p>The department is extensively involved in undergraduate and postgraduate teaching...</p>
            </div>
        </div>
        <div class="container12">

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
            
            
            
            
            <div class="activities12">
                <img src="https://images.unsplash.com/photo-1566710601154-5e04b1a63536?w=500" alt="Mortar and Pestle">
                <h3 class="act">Recent Activities</h3>
                <ul class="paragraph">
                    <li>Phytochemical screening of crude drug</li>
                    <li>Ash value and Loss on drying calculation</li>
                </ul>
            </div>
        </div>
        <a href="#" class="view-images">View Images</a>
    </div>
</body>
<x-front-footer/>
<x-front-header/>

<style>


    /* Header Styling */
    .discipline-discipline-header-section {
        background-color: #800000;
        color: white;
        padding: 15px 30px;
        display: flex;
        align-items: center;
    }

    .discipline-discipline-header-section i {
        /*margin-right: 10px;*/
        font-size: 1.2rem;
    }

    .discipline-discipline-header-section p {
        margin: 0;
        font-size: 1rem;
        font-family: 'Poppins', sans-serif; /* Apply Poppins font globally */
    }

    .discipline-discipline-header-section a {
        color: white;
        text-decoration: none;
        font-weight: 400;
        font-family: 'Poppins', sans-serif; /* Apply Poppins font globally */
    }

    .discipline-dis-container {
        max-width: 1460px;
        margin: 0 auto;
      

    }

    /* Section Title Styling */
    .discipline-section-title {
        font-size: 32px;
        font-weight: bold;
        color: #800000;
         font-family: 'Poppins', sans-serif; /* Apply Poppins font globally */
    }

    .discipline-highlight {
        font-weight: bold;
        color: #dc3545;
       font-family: 'Poppins', sans-serif; /* Apply Poppins font globally */
    }

    /* Content Section Styling */
        .discipline-highlight {
        font-weight: bold;
        color: #dc3545;
        font-family: 'Poppins', sans-serif; /* Poppins font applied here */
    }

    .discipline-text {
        font-family: 'Poppins', sans-serif; /* Poppins font applied here */
        font-size: 14px; /* Slightly larger font for readability */
        color: #333; /* Darker text color for better contrast */
        line-height: 1.6; /* Improved line spacing for readability */
    }
    .discipline-info-box {
        background-color: #f0f4fa;
        padding: 25px;

        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);

    }

    .discipline-red-hand {
        text-align: center;
    font-family: 'Poppins', sans-serif; /* Apply Poppins font globally */

    }

    .discipline-red-hand img {
        max-width: 100%;
        height: 300px;

        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);
    }

    .discipline-red-hand p {
        font-size: 24px;
        font-weight: bold;
        color: #dc3545;
        margin-top: 20px;
        font-family: 'Poppins', sans-serif; /* Apply Poppins font globally */
    }

    .discipline-ul {
        list-style: none;
        padding-left: 0;
        font-size: 14px;
            list-style-type: square; /* Change bullet points to square */
    }

    .discipline-ul li {
        padding: 10px 0;
        position: relative;
        font-family: 'Poppins', sans-serif; /* Apply Poppins font globally */
        font-size:14px;
        
        
    }

    .discipline-ul li::before {
        content: '\2022';
        color: #dc3545;
        font-weight: bold;
        display: inline-block;
        width: 1em;
        margin-left: -1em;
        text-align:left;
        font-family: 'Poppins', sans-serif; /* Apply Poppins font globally */
        font-size:14px;
        list-style-type: square; /* Change bullet points to square */
    }

.discipline-info-box {
    background-color: #f0f4fa;
    padding: 25px;

    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    margin-bottom: 30px;
    text-align: left; /* Ensures left alignment for the text */
}

.discipline-ul {
    list-style: none;
    padding-left: 20px; /* Adds space for list items */
    font-size: 14px;
            font-family: 'Poppins', sans-serif; /* Apply Poppins font globally */
}

.discipline-ul li {
    padding: 10px 0;
    position: relative;
    text-align: left; /* Ensures list items are left-aligned */
            font-family: 'Poppins', sans-serif; /* Apply Poppins font globally */
}

.container-discipline {
    margin-top: 20px;
    width: 100%;
    background-color: #f0f4fa;
    margin: 0; /* Removes default margins */
    padding: 0px 20px; /* Adds 20px gap to the left and right */
}

h2 {
    font-size: 1.8em;
    font-weight: 550;
    color: #333;
    margin-top:10px;
    font-family: 'Poppins', sans-serif;
    padding:10px;

}

h4 {
    font-size: 1.3em;
    font-weight: 600;
    color: #343a40;
    
    font-family: 'Poppins', sans-serif;
}
h5 {
    font-size: 1.2em;
    font-weight: bold;
    white-space: normal;
    word-wrap: break-word;
    line-height: 1.5;
    overflow: visible;
    text-overflow: clip;
    display: block;
    padding: 10px 0;
    margin-bottom: 10px;
      font-family: 'Poppins', sans-serif;
}

p {
    font-size: 14px;
    color: #333;
    font-family: 'Poppins', sans-serif;

        padding:10px;
}

ul {
    list-style-type: none;
    padding: 0;
    margin-left: 20px;
}

ul li {
    font-size: 14px;
    padding: 12px 0;
    color: #333;
    font-family: 'Poppins', sans-serif;
    transition: background-color 0.3s, transform 0.3s ease-in-out;
    cursor: pointer;
    margin-bottom: 10px; /* Adds a small gap between list items */
}

/* Updated bullet point color to #800000 (dark red) */
ul li::before {
    content: "\2022";
    color: #800000; /* Dark red color */
    font-weight: bold;
    margin-left: -1em;
    font-size: 1.4em;
}

/* Flex layout for list containers */
.list-container-discipline {
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
    gap: 20px; /* Adds space between left and right sections */
}

.list-section-discipline-left,
.list-section-discipline-right {
    flex: 0 0 48%;
    margin-bottom: 30px;
    padding-right: 20px; /* Adds right padding */
}

.list-section-discipline-right {
    border-left: 2px solid #f1f1f1;
    padding-left: 30px;
}

/* Styling for sections with padding and rounded corners */
.ragging-section {
    padding: 30px;
   
    box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.1);
    margin-bottom: 30px;
}

.punishment-section {
    padding: 30px;

    margin-bottom: 30px;
}

/* Card Layout */
.section-card {

    padding: 25px;
    box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.1);
    background-color: white;
    
    margin-bottom: 20px; /* Adds gap below each card */
}

/* Card Layout */
.section-card2 {
    
    padding: 25px;
    box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.1);

    margin-bottom: 20px; /* Adds gap below each card */
}


/**/

        .committee-card {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px;
    background-color: #002F65;

    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    margin-bottom: 10px;
    min-height: 50px; /* Reduce height */
}

.committee-card h5 {
    font-size: 20px; /* Slightly reduce font size */
    padding:10px;
        color: #fff;
}

.committee-card p {
    font-size: 14px;

        color: #fff;
}

.committee-card i {
    font-size: 25px;
    color: #fff;
}
        .committee-card a {
            text-decoration: none;
            color: white;
        }
        
        
        /* Mobile Responsive Adjustments */
@media screen and (max-width: 768px) {
    .discipline-discipline-header-section {
        flex-direction: column;
        text-align: center;
        padding: 10px;
    }

    .discipline-dis-container {
        max-width: 100%;
        padding: 0 15px;
    }

    .discipline-section-title {
        font-size: 24px;
        color: #800000;
        text-align: center;
    }

    .discipline-text {
        font-size: 12px;
        line-height: 1.4;
    }

    .discipline-red-hand img {
        height: auto;
        max-width: 80%;
    }

    .discipline-ul {
        font-size: 12px;
    }

    .list-container-discipline {
        flex-direction: column;
        gap: 15px;
    }

    .list-section-discipline-left,
    .list-section-discipline-right {
        flex: 0 0 100%;
        padding: 0;
        border-left: none;
    }

    .committee-card {
        flex-direction: column;
        text-align: center;
        padding: 15px;
    }

    .committee-card h5 {
        font-size: 18px;
    }

    .committee-card p {
        font-size: 12px;
    }

    .committee-card i {
        font-size: 20px;
    }

    .section-card,
    .section-card2,
    .ragging-section,
    .punishment-section {
        padding: 20px;
    }
}

 
</style>

<body>
    <div class="discipline-discipline-header-section">
        <a href="/">
            <i class="fas fa-home"></i>
        </a><p><a href="/">/ Discipline</a></p>
    </div>

    <div class="discipline-dis-container mt-4">
        <h2 class="discipline-section-title">Discipline</h2>
<p class="discipline-highlight">SAY NO TO RAGGING</p>
<p class="discipline-text">Ragging is neither a means of familiarization, nor an introduction with freshers, but a form of Psychopathic behavior. Ragging is a violation of Human Rights. Respect Humanitarian Values. Ragging is a heinous crime, heavily punishable under law. Ragging may spoil your career forever.</p>

        <div class="row mt-4">
            <div class="col-md-6">
                <div class="discipline-info-box">
                    <h5 class="fw-bold">FOLLOWING ACTS WITH FRESHERS SHALL AMOUNT TO RAGGING</h5>
                    <ul class="discipline-ul">
                        <li>To force to address seniors as 'Sir'.</li>
                        <li>To force to perform mass drills.</li>
                        <li>To force to copy class notes for the seniors.</li>
                        <li>To force to serve various errands.</li>
                        <li>To force to do menial jobs for the seniors.</li>
                        <li>To ask/answer vulgar questions.</li>
                        <li>To force look at pornographic pictures to shock the freshers out of their innocence.</li>
                        <li>To force to drink alcohol, scalding tea, smoking, etc.</li>
                        <li>To force to do acts which can lead to physical injury/mental torture or death.</li>
                        <li>To force to do acts with sexual overtones, including homosexual acts.</li>
                    </ul>
                </div>
            </div>

            <div class="col-md-6 text-center">
                <div class="discipline-red-hand">
                    <img src="https://synques-dyn-cdn.s3.ap-south-1.amazonaws.com/oriental/ocp-bhopal/images/no-ragging.webp" alt="Say No to Ragging">
                  
                </div>

                <div class="discipline-info-box mt-4">
                    <h5 class="fw-bold">Punishment(s) in the event of ragging any one or more of the following punishment may be awarded namely.</h5>
                    <ul class="discipline-ul">
                        <li>Cancellation of admission.</li>
                        <li>Suspension from attending classes.</li>
                        <li>Debarring from any test/examination or any other evaluation process.</li>
                        <li>Collective punishment when the individuals committing or abetting ragging are not identified.</li>
                    </ul>
                </div>
            </div>
        </div>
        <!---->
       
    </div>
      <div class="container-discipline">
        <!-- Removed the section-card class here -->
        <h2>Anti-Ragging</h2>
        <p>Oriental Institute of Science and Technology, Bhopal is a NO RAGGING ZONE with ZERO TOLERANCE towards any incident of ragging, by preventing its occurrence and having appropriate measures to curb any incident of ragging.</p>

        <!-- What is Ragging and Punishment Section in a Row -->
        <div class="row">
            <!-- Ragging Section -->
            <div class="col-md-6">
                <div class="ragging-section section-card">
                    <h4>What is Ragging?</h4>
                    <ul>
                        <li>Teasing or treating a fresher rudely in words or actions.</li>
                        <li>Causing physical or psychological harm to a fresher.</li>
                        <li>Disrupting academic activities of any student.</li>
                        <li>Financial extortion or forced expenditure.</li>
                        <li>Physical abuse, including obscene gestures, sexual or homosexual abuse.</li>
                        <li>Insulting through spoken words, emails, or posts.</li>
                        <li>Acts affecting mental health or self-confidence.</li>
                        <li>Acts mentioned in RGPV/AICTE/UGC/Regulations of Govt. of M.P.</li>
                    </ul>
                </div>
            </div>

            <!-- Punishment Section -->
            <div class="col-md-6">
                <div class="punishment-section section-card2">
                    <h4>Punishment(s) in the event of ragging:</h4>
                    <ul>
                        <li>Suspension from attending classes and academic privileges.</li>
                        <li>Withholding/withdrawing scholarship/fellowship and other benefits.</li>
                        <li>Debarring from appearing in any test/examination or other evaluation process.</li>
                        <li>Withholding results.</li>
                        <li>Debarring from representing the University in any regional, national or international meet, tournament, youth festival etc.</li>
                        <li>Suspension/Expulsion from the hostel.</li>
                        <li>Cancellation of admission.</li>
                        <li>Rustication from the University/Institution for one to four semesters.</li>
                        <li>Expulsion from the University and consequent debarring from admission to any other institution.</li>
                        <li>Collective punishment if culprits are not identified.</li>
                    </ul>
                </div>
            </div>
        </div>
        <p>Apart from inviting any disciplinary action, the erring student may also be subject to face any legal action as prescribed under the AICTE/UGC Regulations. There should be to hyperlinks and web page for ARC Committee and ARC Squad should be open by clicking on it.</p>
        
            <div class="containerdocument committee-section">
            <div class="row">
    @foreach($documents as $document)
        <div class="col-md-6">
            <div class="committee-card">
                <div>
                    <h5>{{ $document->title }}</h5>
                    <p>
                        <a href="{{ asset($document->document) }}" target="_blank">
                            Click to view {{ $document->title }}
                        </a>
                    </p>
                </div>
                <a href="{{ asset($document->document) }}" download>
                    <i class="fas fa-file-download"></i>
                </a>
            </div>
        </div>
    @endforeach
</div>

    </div>

    </div>
</body>

<x-front-footer/>

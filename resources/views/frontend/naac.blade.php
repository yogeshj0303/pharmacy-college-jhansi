<x-front-header/>


<style>
    /* Header Styling */
    .aqar-header-section {
        background-color: #800000;
        color: white;
        padding: 5px 30px;
        display: flex;
        align-items: center;
    }

    .aqar-header-section i {
        font-size: 1rem;
    }

    .aqar-header-section p {
        margin: 0;
        font-size: 1rem;
        font-family: 'Poppins', sans-serif;
    }

    .aqar-header-section a {
        color: white;
        text-decoration: none;
        font-weight: 400;
        font-family: 'Poppins', sans-serif;
    }

    .main-header {
        background: linear-gradient(135deg, #4B6A9D, #1F3B65);
        padding: 30px;
        text-align: center;
        color: #fff;
    }

    .main-header h1 {
        font-size: 3rem;
        margin: 0;
        font-weight: bold;
        letter-spacing: 1px;
    }

    .main-header p {
        font-size: 1.3rem;
        margin-top: 10px;
        font-weight: 400;
    }

    .content-container {
        max-width: 1460px;
        margin: 30px auto;
        padding: 20px;
        box-sizing: border-box;
    }

    .title {
        color: #800000;
        font-family: 'Poppins', sans-serif;
        font-size: 2.5rem;
        font-weight: 700;
        margin-bottom: 15px;
    }

    .description {
        font-size: 1.1rem;
        color: #444;
        font-family: 'Poppins', sans-serif;
        line-height: 1.8;
        margin-bottom: 25px;
    }

    /* Section Box Styling */
    .section-box-container {
        display: flex;
        gap: 20px;
        flex-wrap: wrap;
        justify-content: center;
    }

    .section-box {
        flex: 1;
        min-width: 350px;
        padding: 20px 30px;
        background-color: #f9f9f9;
        border-radius: 15px;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .section-box:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
    }

    .section-box h2 {
        font-size: 1.5rem;
        font-weight: 700;
        color: #1F3B65;
        margin: 0;
        white-space: nowrap; /* Prevents wrapping */
    }

    /* Button Styling */
    .cta-button {
        padding: 10px 20px;
        background-color: #1F3B65;
        color: #fff;
        border: none;
        border-radius: 12px;
        font-size: 1rem;
        font-weight: bold;
        text-align: center;
        display: inline-block;
        transition: all 0.3s ease;
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
        text-decoration: none;
        white-space: nowrap;
    }

    .cta-button:hover {
        background-color: #4B6A9D;
        transform: translateY(-2px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
    }

    .cta-button:active {
        transform: translateY(2px);
    }
    
    /**/
/* Mobile View Adjustments */
@media screen and (max-width: 768px) {
    /* Adjust the header section for mobile */
    .aqar-header-section {
        padding: 5px 15px;
        flex-direction: column;
        text-align: center;
    }

    .main-header h1 {
        font-size: 2.2rem;
    }

    .main-header p {
        font-size: 1.1rem;
        margin-top: 8px;
    }

    .content-container {
        padding: 15px;
    }

    .title {
        font-size: 2rem;
    }

    .description {
        font-size: 1rem;
    }

    /* Section Box Container: Stacking the boxes vertically */
    .section-box-container {
        flex-direction: column;
        align-items: center;
    }

    /* Section Box styling */
    .section-box {
        min-width: 100%;
        margin-bottom: 20px;
        text-align: center; /* Center the content inside the box */
    }

    /* Title inside each section box: Allow wrapping and adjust font size */
    .section-box h2 {
        font-size: 1.3rem;  /* Adjust title size */
        white-space: normal; /* Allow the text to wrap */
        line-height: 1.5;    /* Adjust line height for readability */
        margin-bottom: 15px; /* Space between title and button */
    }

    /* CTA Button Styling */
    .cta-button {
        font-size: 0.9rem;
        padding: 8px 16px;
    }
}


 

</style>

<body>
    <div class="aqar-header-section">
        <a href="/">
            <i class="fas fa-home"></i>
        </a>
        @php
    
    

    @endphp
        <p><a href="/">/ {{ $categories->category_name }}</a></p>
    </div>

    <!-- Header Section -->
    <div class="main-header">
        <h1>{{ $categories->category_name }}</h1>
        <p>Strengthening Academic Excellence at Pramcay College, Jhansi</p>
    </div>
   

    <!-- Main Content Section -->
    <div class="content-container">
    <h1 class="title">Naac Reports for {{ $categories->category_name }}</h1>

    <div class="section-box-container">
        @foreach ($category as $report)
            <div class="section-box">
                <h2>{{ $report->title }}</h2>
                <a href="{{ asset('' . $report->document) }}" class="cta-button" target="_blank">Download PDF</a>
            </div>
        @endforeach
    </div>
</div>

</body>

<x-front-footer/>

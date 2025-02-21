<x-front-header/>
<style>
/* Default styles for desktop */

/* Header Styling */
.contact-header-section {
    background-color: #800000;
    color: white;
    padding: 5px 30px;
    display: flex;
    align-items: center;
}

.contact-header-section i {
    font-size: 1rem;
}

.contact-header-section p {
    margin: 0;
    font-size: 1rem;
    font-family: 'Poppins', sans-serif; 
}

.contact-header-section a {
    color: white;
    text-decoration: none;
    font-weight: 400;
    font-family: 'Poppins', sans-serif; 
}

/* Contact Section Styling */
.contact-container {
    font-family: 'Poppins', sans-serif;
    margin-bottom: 20px;
}

.header-text {
    font-size: 24px;
    font-weight: bold;
    padding: 20px;
    font-family: 'Poppins', sans-serif;
}

.text-para {
    padding: 20px; /* Reduced padding for better spacing */
    font-family: 'Poppins', sans-serif;
}

.head-office {
    background: #0a0d28;
    color: white;
    padding: 10px; /* Reduced padding */
}

.quick-contacts {
    background: #eef4ff;
    padding: 10px; /* Reduced padding */
}

/* Flexbox for equal height columns */
.row {
    display: flex;
    flex-wrap: wrap;
}

.col-md-6 {
    flex: 1;
    display: flex;
    flex-direction: column;
    height: 100%; /* Make sure both columns take up full height */
}

/* Ensuring the height of map and contact sections match */
.col-md-6 iframe {
    flex-grow: 1; /* Ensure iframe takes remaining space */
    height: 50vh; /* Set height to 50% of the viewport height */
    border: 0;
}

/* Map section: Ensure the height matches the height of the contact info section */
iframe {
    height: 60vh; /* Ensure iframe fills the column at 50vh */
    max-height: 60vh; /* Remove the max-height to avoid overflow */
}

/* Make sure both sections have the same height */
.row > .col-md-6 {
    display: flex;
    flex-direction: column;
    height: 600%; /* Ensures both columns take equal height */
}

/* Adjusting content spacing within head-office and quick-contacts */
.head-office p, .quick-contacts p {
    margin-bottom: 5px; /* Reduced space between content */
}
.head-office p, .quick-contacts p {
    font-size: 14px; /* Set font size to 14px */
    font-family: 'Poppins', sans-serif; /* Ensure Poppins font is used */
    margin-bottom: 5px; /* Reduced space between content */
}

/**/


.join-container {
    background-color: #e9f2fc;
    width: 100%;
    margin-left: 0;
    margin-right: 0;
    padding: 30px;
    margin-top: 20px;
}

.join-info {
    background-color: #e9f2fc;
    padding: 20px 20px;
    font-family: 'Poppins', sans-serif;
    font-size: 14px;
    color: #333;
}

.join-info h2 {
    color: #800000;
    font-weight: bold;
}

.join-info p {
    font-size: 14px;
    line-height: 1.6;
    margin-bottom: 15px;
}

.form-box {
    background-color: white;
    padding: 15px;
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
    max-width: 600px;
    margin: 0 auto;
    transition: all 0.3s ease-in-out;
}

.form-box:hover {
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.3);
    transform: translateY(-5px);
}

.btn-custom {
    background-color: #002147;
    color: white;
    font-size: 16px;
    padding: 12px 20px;
    border: none;
    cursor: pointer;
    transition: background-color 0.3s, transform 0.2s;
    width: 30%;
}

.btn-custom:hover {
    background-color: #00457c;
    transform: translateY(-3px);
}

.btn-custom:focus {
    outline: none;
    box-shadow: 0 0 5px 2px rgba(0, 33, 71, 0.5);
}

/**/
/* Mobile view adjustments for better aesthetics */

/* Overall form-box enhancements for mobile */
@media (max-width: 768px) {
    .form-box {
        padding: 20px;
        max-width: 100%;
        margin: 20px auto;
        border-radius: 12px;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
        background-color: #fff;
        transition: box-shadow 0.3s ease, transform 0.2s ease;
    }

    .form-box input, .form-box textarea, .form-box select {
        margin-bottom: 15px;
        width: 100%;
        padding: 14px; /* Increased padding for easier interaction */
        border-radius: 8px;
        border: 1px solid #ccc;
        font-size: 16px; /* Larger font size for better readability */
        box-sizing: border-box;
    }

    .btn-custom {
        font-size: 18px;
        padding: 15px 25px;
        width: 100%;
        background-color: #00457c;
        color: white;
        border: none;
        border-radius: 6px;
        transition: background-color 0.3s ease, transform 0.2s ease;
    }

    .btn-custom:hover {
        background-color: #003459;
        transform: translateY(-4px);
    }

    .header-text {
        font-size: 24px; /* Larger text size */
        margin-bottom: 15px; /* Extra space between heading and form */
    }

    .text-para {
        font-size: 16px;
        padding: 15px 0;
        text-align: center;
    }

    /* Form heading styling */
    .form-box h5 {
        font-size: 18px;
        margin-bottom: 20px;
        font-weight: 600;
    }

    /* Adjust the padding of text and contact sections */
    .contact-container, .join-container {
        padding: 15px;
    }

    .head-office, .quick-contacts {
        padding: 12px;
    }
}

/* For screens smaller than 480px */
@media (max-width: 480px) {
    .form-box {
        padding: 15px;
        border-radius: 12px;
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.12);
        width: 100%;
    }

    .form-box input, .form-box textarea, .form-box select {
        padding: 10px;
    }

    .btn-custom {
        font-size: 16px;
        padding: 14px 22px;
        border-radius: 8px;
    }

    .header-text {
        font-size: 20px;
    }

    .text-para {
        padding: 15px;
        font-size: 16px;
    }

    /* Adjust the spacing of sections for a neat layout */
    .contact-container, .join-container {
        padding: 15px;
    }

    /* Reduce padding in certain sections for mobile */
    .head-office, .quick-contacts {
        padding: 12px;
    }
}


</style>

<div class="contact-header-section">
    <a href="/">
        <i class="fas fa-home"></i>
    </a>
    <p><a href="/">/ Contact Us</a></p>
</div>

<div class="contact-container mt-4">
    <h2 class="header-text">Say Hello!</h2>
    <p class="text-para">Thank you for your interest in Pharmacy College, Jhansi. We are eager to assist you in any way we can. We welcome visitors to our campus. Explore the way to our College.</p>
    
    <div class="row">
        <div class="col-md-6">
            <div class="head-office">
                <h4>Head Office</h4>
                <p>Pharmacy College, Jhansi, Near Railway Station, Jhansi, Uttar Pradesh 284001</p>
                <p><strong>Fax:</strong> 91 510 2529472</p>
                <p><strong>Email:</strong> info@pharmacycollegejhansi.ac.in, admission@pharmacycollegejhansi.ac.in</p>
            </div>
            <div class="quick-contacts mt-3">
                <h5>Quick Contacts</h5>
                <p><strong>&#128222; Reception:</strong> 0751-2529026/27/28</p>
                <p><strong>&#9993; Email:</strong> info@pharmacycollegejhansi.ac.in</p>
                <p><strong>&#128222; For Admission:</strong> +91 7225025861/62</p>
                <p><strong>&#9993; Email:</strong> a@pharmacycollegejhansi.ac.in</p>
                <p><strong>&#128241; WhatsApp:</strong> +91 7649869698</p>
                <p><strong>&#128222; Training & Placement:</strong> +91 7471123792</p>
                <p><strong>&#9993; Email:</strong> tpo@pharmacycollegejhansi.ac.in</p>
            </div>
        </div>
        <div class="col-md-6">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3649.2929233849495!2d-74.0060154854837!3d40.71277617933019!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzTCsDAwJzAwLjAiTiA3NMKwMDAnMDAuMCJX!5e0!3m2!1sen!2sin!4v1631218923049!5m2!1sen!2sin" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
    
    <div class="join-container">
        <div class="row">
            <div class="col-md-6">
                <div class="join-info">
                    <h2>How we can help you?</h2>
                    <p>Have a question? Need to clear doubts? Have valuable suggestions? Need help? We'd love to hear from you and are always available at your service. Please fill this form to contact with us.</p>
                </div>
            </div>
            <div class="col-md-6">
            <form action="{{ route('contact.store') }}" method="POST">
        @csrf
        <div class="row mb-3">
            <div class="col-md-6">
                <input type="text" name="name" class="form-control full-name" placeholder="Full Name" value="{{ old('name') }}">
                @error('name')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="col-md-6">
                <input type="text" name="contact_no" class="form-control contact" placeholder="Contact" value="{{ old('contact_no') }}">
                @error('contact_no')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
        </div>
        <div class="mb-3" style="width: 97%; margin-left:10px">
            <input type="email" name="email" class="form-control email" placeholder="Email" value="{{ old('email') }}">
            @error('email')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="mb-3" style="width: 97%; margin-left:10px">
            <textarea name="message" class="form-control message" placeholder="Message" rows="4">{{ old('message') }}</textarea>
            @error('message')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-custom me-2">Submit</button>
        </div>
    </form>
            </div>
        </div>
    </div>
</div>

<script>
    function toggleSidebar() {
        const sidebar = document.getElementById('sidebar');
        sidebar.classList.toggle('active');
    }
    // Modal JS
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

<x-front-footer/>

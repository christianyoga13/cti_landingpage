<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Sangfor Cyber Command</title>
    <style>
        *,
        body,
        html {
            font-family: 'Rubik', sans-serif;
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            /* Tambahkan ini */
            overflow-x: hidden;
            /* Tambahkan ini untuk menghindari overflow */
        }

        body {
            scroll-behavior: smooth;
            background-color: #F9FAFE;
        }

        .top-nav {
            background-color: #00008E;
            color: white;
            padding: 1rem 0;
        }

        .top-nav a {
            color: white;
            text-decoration: none;
        }

        .language-switcher span {
            color: white;
            font-size: 0.8rem;
            padding: 0 0.5rem;
        }

        .bottom-nav {
            background-color: white;
            padding: 1.5rem 0;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .hero-section {
            position: relative;
            min-height: 100vh;
            background: linear-gradient(to left top,
                    rgba(4, 190, 2, 0.75) 0%,
                    rgba(0, 0, 142, 0.75) 100%), url('Background1.jpeg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            display: flex;
            align-items: center;
            justify-content: flex-start;
            padding: 2rem;
        }

        .hero-content {
            position: relative;
            left: 15%;
            transform: translateX(0); 
            color: white;
            max-width: min(90%, 800px);
            margin: 0;  
            text-align: left; 
        }

        .hero-content h1 {
            font-size: clamp(28px, 5vw, 42px);
            font-weight: 700;
            line-height: 1.2;
            margin-bottom: clamp(1rem, 3vw, 1.5rem);
        }

        .hero-content p {
            font-size: clamp(16px, 2vw, 20px);
            margin-bottom: clamp(1.5rem, 4vw, 2rem);
            max-width: 600px;
            line-height: 1.5;
        }

        .free-trial-btn {
            font-size: clamp(14px, 1.5vw, 16px);
            padding: clamp(0.6rem, 2vw, 0.8rem) clamp(1.5rem, 3vw, 2rem);
        }

        .about-section {
            background-image: url('background2.jpeg');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 7rem 0;
        }

        .about-content h2 {
            color: #00008E;
            font-size: 2.5rem;
            margin-bottom: 2rem;
            margin-top: 3rem;
        }

        .about-content p {
            line-height: 1.8;
            color: #4a4a4a;
            margin-bottom: 1.5rem;
        }

        .trial-card {
            background: white;
            border: none;
            border-radius: 10px;
            padding: 2rem;
            height: auto;
            width: 100%;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .trial-form {
            width: 100%;
        }

        .trial-form .row {
            margin: 0;
            width: 100%;
        }

        .trial-form .col-md-6,
        .trial-form .col-12 {
            padding: 0.5rem;
        }

        .trial-form input,
        .trial-form select {
            width: 100%;
            padding: 0.75rem;
            margin-bottom: 0.5rem;
            font-size: 14px;
        }

        .form-check {
            padding: 0.5rem;
        }

        .form-check-label {
            font-size: 14px;
            line-height: 1.4;
        }

        .submit-button {
            background-color: #04BE02;
            border: none;
            color: white;
            padding: 0.8rem 5rem;
            font-weight: 500;
            width: auto;
            margin-top: 1rem;
            transition: background-color 0.3s;
            box-shadow: grey 0px 0px 5px;
        }

        .submit-button:hover {
            background-color: #00CC00;
        }

        .labelInput {
            color: grey !important;
        }

        input {
            border: 1px solid #ccc !important;
        }

        select {
            border: 1px solid #ccc !important;
        }

        .advantages-section {
            background-image: url('Background3.jpeg');
            padding: 5rem 0;
        }

        .icon {
            width: 175px;
        }

        .value-section {
            background-image: url('Background4.jpeg');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 5rem 0;
        }

        .checking {
            margin-left: 20%;
            width: 36rem !important;
        }

        .text-value {
            color: #6C646A;
        }

        .footer-content {
            background: linear-gradient(to left top,
                    rgba(4, 190, 2, 0.75) 0%,
                    rgba(0, 0, 142, 0.75) 100%);
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            align-items: center;
            padding: 3rem max(1rem, 5%);
        }

        .footer-info {
            flex: 1;
            min-width: 280px;
            margin-right: 2rem;
        }

        .footer-map {
            flex: 1;
            min-width: 280px;
            display: flex;
            justify-content: center;
        }

        .footer-map img {
            max-width: 100%;
            height: auto;
        }

        .social-icons {
            display: flex;
            gap: 1rem;
            flex-wrap: wrap;
            justify-content: flex-start;
        }

        .social-icons img {
            width: 24px;
            height: 24px;
            transition: transform 0.2s;
        }

        .social-icons img:hover {
            transform: translateY(-3px);
        }

        @media (max-width: 768px) {
            .hero-content {
                left: 50%;
                padding: 0 20px;
                width: 100%;
            }

            .hero-content h1 {
                font-size: 32px !important;
                text-align: center !important;
            }

            .hero-content p {
                text-align: center;
                font-size: 1rem;
            }

            .hero-content .text-start {
                text-align: center !important;
            }

            .about-section {
                padding: 3rem 0;
            }

            .mx-5 {
                margin-left: 1rem !important;
                margin-right: 1rem !important;
            }

            .checking {
                margin-left: 0;
                width: 100%;
                padding: 0 1rem;
            }

            .value-section h2 {
                width: 100% !important;
                padding: 0 1rem;
            }
            .value-section p{
                font-size: 1rem !important;
                width: 30rem !important;
            }

            .customer-section .d-flex {
                flex-wrap: wrap;
                gap: 2rem !important;
            }

            .Logo-Customer {
                width: 140px !important;
                height: auto !important;
            }

            .explore-section .d-flex {
                flex-direction: column !important;
            }

            .footer-content {
                flex-direction: column;
                padding: 2rem 1rem;
            }

            .footer-info{
                margin-right: 50px !important; ;
                justify-content: center !important;
                align-items: center !important;
                margin-bottom: 2rem;
                text-align: center;
                padding: 0 1rem;
            }

            .footer-info {
                margin-right: 0;
                margin-bottom: 2rem;
                text-align: center;
                padding: 0 1rem;
            }

            .social-icons {
                justify-content: center;
            }

            .social-icons img {
                width: 20px !important;
                height: 20px !important;
            }

            .footer-map {
                width: 100%;
            }

            .footer-content img {
                width: 100%;
                height: auto;
            }

            .hero-section {
                height: auto;
                min-height: 100vh;
                padding: 4rem 0;
            }

            .hero-content {
                position: relative;
                top: auto;
                left: auto;
                transform: none;
                padding: 2rem;
            }

            .checking {
                margin-left: 0;
                width: 100%;
            }

            .customer-section .d-flex {
                gap: 2rem !important;
                padding: 0 1rem;
            }

            .Logo-Customer {
                max-width: 120px;
                height: auto;
            }

            .explore-section .d-flex > div {
                width: 100% !important;
                margin: 0 1rem;
            }

            .footer-content {
                padding: 2rem 1rem;
            }

            .footer-info, .footer-map {
                padding: 0 1rem;
            }

            .trial-card {
                padding: 1.5rem;
                margin: 0 1rem;
            }
        }

        @media (max-width: 576px) {
            .icon {
                width: 120px;
            }

            .hero-section {
                height: 80vh;
            }

            .bottom-nav img {
                width: 100px;
            }

            .advantages-section .col-md-5 {
                padding: 0 1rem;
            }

            .trial-card {
                padding: 1rem;
                margin: 0 1rem;
            }

            .submit-button {
                padding: 0.8rem 3rem;
            }

            .social-icons img {
                width: 18px;
                height: 18px;
            }

            .hero-content h1 {
                font-size: 28px !important;
            }

            .advantages-section .col-md-5 {
                margin: 0 1rem;
            }

            .features-section .col-md-4 {
                padding: 0 1.5rem;
            }

            .value-section h2 {
                font-size: 1.5rem !important;
                padding: 0 1rem;
            }

            .value-section p {
                font-size: 1rem !important;
                width: 18rem !important;
            }

            .text-value {
                font-size: 1rem !important;
            }

            .checking img {
                width: 1.75rem;
                height: 1.75rem;
            }
        }

        @media (min-width: 1200px) {
            .container {
                max-width: 1140px;
                margin: 0 auto;
            }

            .hero-content {
                max-width: 800px;
            }
        }

        @media (max-width: 992px) {
            .hero-content {
                left: 50%;
                max-width: 90%;
            }

            .checking {
                margin-left: 10%;
                width: 80%;
            }

            .explore-section .d-flex {
                gap: 2rem !important;
            }

            .value-section h2 {
                width: 90% !important;
            }
        }

        .img-fluid-custom {
            max-width: 100%;
            height: auto;
            object-fit: contain;
        }

        .text-wrap-custom {
            word-wrap: break-word;
            overflow-wrap: break-word;
        }

        .explore-section .d-flex > div {
            min-height: 16rem;
            height: auto;
        }

        @media (min-width: 992px) {
            .trial-card {
                min-width: 600px;
            }
        }

        .container {
            padding-left: 15px;
            padding-right: 15px;
            width: 100%;
            margin: 0 auto;
        }

        .advantages-section .col-md-5 {
            padding: 1rem;
        }

        .advantages-section .bg-white {
            height: 100%;
            padding: 2rem;
            border-radius: 10px;
            transition: transform 0.3s;
        }

        .value-section h2 {
            width: min(90%, 30rem) !important;
            margin: 0 auto;
        }

        .checking {
            width: min(90%, 30rem);
            margin: 0 auto;
        }

        .customer-section .d-flex {
            flex-wrap: wrap;
            justify-content: center;
            gap: clamp(2rem, 3vw, 5rem);
            padding: 2rem 1rem;
        }

        .Logo-Customer {
            width: clamp(120px, 15vw, 170px);
            height: auto;
            object-fit: contain;
        }

        .explore-section .d-flex {
            flex-wrap: wrap;
            gap: clamp(1rem, 3vw, 3rem);
            padding: 1rem;
        }

        .explore-section .d-flex > div {
            width: clamp(280px, calc(33.333% - 2rem), 320px);
            min-height: auto;
            padding: 2rem 1rem;
        }

        @media (min-width: 992px) {
            .container {
                max-width: 960px;
            }

            .trial-card {
                padding: 2.5rem;
            }
        }

        @media (min-width: 1200px) {
            .container {
                max-width: 1140px;
            }
        }

        @media (max-width: 991px) {
            .about-section .row > div {
                padding: 0 1rem;
            }

            .trial-card {
                max-width: 100%;
                margin: 0;
                padding: 1.5rem;
            }

            .advantages-section .col-md-5 {
                width: 100%;
                max-width: 600px;
                margin: 0 auto;
            }

            .explore-section .d-flex {
                flex-direction: column;
                align-items: center;
            }

            .explore-section .d-flex > div {
                width: min(100%, 400px);
            }
        }

        @media (max-width: 768px) {
            .trial-card {
                padding: 1.25rem;
            }

            .value-section h2 {
                font-size: 1.5rem !important;
                padding: 0 1rem;
            }

            .checking {
                padding: 0 1rem;
            }

            .explore-section h3 {
                padding: 0 1rem;
            }
        }

        @media (max-width: 576px) {
            .trial-form input,
            .trial-form select {
                padding: 0.5rem;
                font-size: 14px;
            }

            .submit-button {
                width: 100%;
                padding: 0.8rem;
                font-size: 16px;
            }

            .Logo-Customer {
                width: 120px !important;
            }
        }

        h2 {
            font-size: clamp(24px, 3vw, 2.5rem);
        }

        h3 {
            font-size: clamp(20px, 2.5vw, 2rem);
        }

        h4 {
            font-size: clamp(18px, 2vw, 1.75rem);
        }

        p {
            font-size: clamp(14px, 1.5vw, 16px);
        }

        @media (max-width: 1200px) {
            .hero-content {
                left: 10%;
                transform: translateX(0);
            }
        }

        @media (max-width: 991px) {
            .hero-content {
                left: 5%;
                transform: translateX(0);
                width: 90%;
                padding: 0 1rem;
            }
        }

        @media (max-width: 768px) {
            .hero-section {
                padding: 6rem 1rem 2rem;
                min-height: 80vh;
            }

            .hero-content {
                position: relative;
                left: 0;
                width: 100%;
                padding: 2rem;
            }

            .hero-content h1,
            .hero-content p,
            .hero-content .text-start {
                text-align: left !important;
            }

            .free-trial-btn {
                display: inline-block;
            }
        }

        @media (max-width: 576px) {
            .hero-section {
                padding: 5rem 1rem 2rem;
            }
            
            .hero-content {
                padding: 1rem;
            }
            
            .free-trial-btn {
                display: inline-block;
                padding: 0.8rem 2rem;
            }
        }

        .section-padding {
            padding-top: clamp(3rem, 5vw, 7rem);
            padding-bottom: clamp(3rem, 5vw, 7rem);
        }

        .section-margin {
            margin-top: clamp(2rem, 4vw, 5rem);
            margin-bottom: clamp(2rem, 4vw, 5rem);
        }

        @media (min-width: 992px) and (max-width: 1024px) {
            .container {
                max-width: 960px;
                padding: 0 1.5rem;
            }

            .about-section .row {
                gap: 2rem !important;
            }

            .col-md-5 {
                flex: 0 0 auto;
                width: 45%;
            }

            .col-md-7 {
                flex: 0 0 auto;
                width: 50%;
            }

            .trial-card {
                padding: 1.75rem;
                min-width: auto;
            }

            .trial-form .row {
                margin: 0 -0.5rem;
            }

            .trial-form .col-md-6 {
                padding: 0 0.5rem;
            }

            .advantages-section .col-md-5 {
                width: 48%;
                margin: 0;
            }

            .explore-section .d-flex {
                gap: 1.5rem !important;
            }

            .explore-section .d-flex > div {
                width: 300px;
            }

            .checking {
                width: 80%;
                margin: 0 auto;
            }

            .customer-section .d-flex {
                gap: 3rem;
            }

            .Logo-Customer {
                width: 140px;
                height: auto;
            }
        }

        @media (max-width: 991px) {
            .about-section .row {
                flex-direction: column;
            }

            .col-md-5, .col-md-7 {
                width: 100%;
                max-width: 600px;
                margin: 0 auto;
            }
        }

        @media (min-width: 1025px) {
            .container {
                max-width: 1140px;
            }
        }

        .container-fluid-lg {
            width: 100%;
            padding-right: 1.5rem;
            padding-left: 1.5rem;
            margin-right: auto;
            margin-left: auto;
        }
    </style>
</head>

<body>
    <nav>
        <div class="top-nav" style="position: fixed; width: 100%; top: 0; z-index: 1000;">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="logo-container"></div>
                    <div class="language-switcher">
                        <a href="#" class="active">ID</a>
                        <span>|</span>
                        <a href="#">EN</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom-nav" id="bottomNav" style="position: fixed; width: 100%; top: 56px; z-index: 999; transition: all 0.3s;">
            <div class="container">
                <div class="d-flex align-items-center">
                    <img src="Helios.png" style="width: 120px;" class="me-4" alt="Helios">
                    <img src="Sangfor.png" style="width: 120px;" alt="Sangfor">
                </div>
            </div>
        </div>
    </nav>
    <div style="height: 124px;"></div>

    <script>
    window.onscroll = function() {
        const scrollPosition = window.pageYOffset;
        const bottomNav = document.getElementById('bottomNav');
        
        if (scrollPosition > 0) {
            const opacity = Math.max(0.6, 0.9 - (scrollPosition * 0.001));
            bottomNav.style.backgroundColor = `rgba(255, 255, 255, ${opacity})`;
            bottomNav.style.boxShadow = `0 2px 4px rgba(0, 0, 0, ${opacity * 0.1})`;
        } else {
            bottomNav.style.backgroundColor = 'white';
            bottomNav.style.boxShadow = '0 2px 4px rgba(0, 0, 0, 0.1)';
        }
    };
    </script>

    <section class="hero-section">
        <div class="hero-content">
            <h1 class="text-start mb-4">Cybersecurity Made Simple<br>with Sangfor Cyber Command</h1>
            <p class="text-start mb-4">Simplify your cybersecurity with Sangfor Cyber Command's user-friendly interface and comprehensive threat protection.</p>
            <div class="text-start">
                <a href="#form-section" class="free-trial-btn btn btn-success">FREE TRIAL</a>
            </div>
        </div>
    </section>

    <section class="about-section" id="form-section">
        <div class="container-fluid-lg" style="padding: 0 5%;">
            <div class="row justify-content-between g-5 mx-5">
            <div class="col-md-5">
                <div class="about-content">
                <h2>About Sangfor Cyber Command</h2>
                <p>Sangfor Cyber Command falls into Network Detection & Response (NDR) Solutions which is a comprehensive security management platform designed to protect businesses from cyber threats.</p>
                <p>It provides a range of security solutions such as threat detection, incident response, and compliance management. With Sangfor Cyber Command, organizations can monitor their network traffic, analyze security events, and respond to incidents quickly and efficiently.</p>
                <p>The platform uses advanced machine learning algorithms and big data analytics to identify and prevent cyber-attacks before they cause damage. It also offers a user-friendly dashboard that enables businesses to track their security posture in real-time and make informed decisions based on the insights provided.</p>
                <p>Overall, Sangfor Cyber Command is a powerful tool for businesses looking to strengthen their cybersecurity defenses and safeguard their assets from modern-day threats.</p>
                </div>
            </div>

            <div class="col-md-7">
                <div class="trial-card">
                <h4 class="mb-3" style="font-size: 30px; color: #293660;">Dapatkan Free Trial selama 1 bulan,</h4>
                <p class="mb-4" style="color: #6D6D6D;">analisa keamanan network anda dan lihat hasilnya!</p>

                <form class="trial-form" method="POST" action="{{ route('trial-form.store') }}">
                    @csrf
                    <div class="row g-2">
                    <div class="col-md-6">
                        <label class="labelInput">First Name</label>
                        <input type="text" name="first_name" class="form-control" required>
                    </div>
                    <div class="col-md-6">
                        <label class="labelInput">Last Name</label>
                        <input type="text" name="last_name" class="form-control" required>
                    </div>
                    <div class="col-12">
                        <label class="labelInput">Corporate Email</label>
                        <input type="email" name="corporate_email" class="form-control" required>
                    </div>
                    <div class="col-12">
                        <label class="labelInput">Job Title</label>
                        <input type="text" name="job_title" class="form-control" required>
                    </div>
                    <div class="col-12">
                        <label class="labelInput">Company Name</label>
                        <input type="text" name="company_name" class="form-control" required>
                    </div>
                    <div class="col-12">
                        <label class="labelInput">Industry</label>
                        <select name="industry" class="form-select" required>
                        <option value="" selected disabled>Select your industry</option>
                        <option value="technology">Technology</option>
                        <option value="finance">Finance</option>
                        <option value="healthcare">Healthcare</option>
                        <option value="education">Education</option>
                        <option value="manufacturing">Manufacturing</option>
                        </select>
                    </div>
                    <div class="col-12">
                        <label class="labelInput">Phone Number</label>
                        <input type="tel" name="phone" class="form-control" required>
                    </div>
                    <div class="col-12 mb-3">
                        <div class=" d-flex flex-row">
                        <input class="form-check-input" type="checkbox" id="terms" style="width: auto; margin-right: 8px;">
                        <label class="form-check-label labelInput" for="terms" style="font-size: 14px; line-height: 1.4;">
                            Click this box to agree to be contacted by our team and
                            get great deals on Sangfor from Helios!
                        </label>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="submit-button">Send</button>
                    </div>
                    </div>
                </form>
                </div>
            </div>
            </div>
        
        </section>


    <section class="advantages-section">
        <div class="container">
            <h2 class="text-white text-center mb-5">Sangfor Cyber Command Advantages</h2>
            <div class="row g-4 justify-content-center">
                <div class="col-md-5 d-flex justify-content-center">
                    <div class="bg-white p-4 h-100 w-100">
                        <div class="text-center">
                            <img src="Virus Scan.png" alt="" class="mb-4 icon">
                        </div>
                        <h3 class="text-center mb-3">Advanced Threat Detection</h3>
                        <p class="text-center">Sangfor Cyber Command offers advanced threat detection capabilities that can help users identify and respond to potential security threats in real-time. This includes identifying and blocking malware, ransomware, and other types of cyber threats.</p>
                    </div>
                </div>
                <div class="col-md-5 d-flex justify-content-center">
                    <div class="bg-white p-4 h-100 w-100">
                        <div class="text-center">
                            <img src="Anti Virus.png" alt="" class="mb-4 icon">
                        </div>
                        <h3 class="text-center mb-3">Network Security Monitoring</h3>
                        <p class="text-center">Sangfor Cyber Command provides users with visibility and control over their network infrastructure. This includes monitoring network traffic, controlling access to resources, and managing network policies.</p>
                    </div>
                </div>
                <div class="col-md-5 d-flex justify-content-center mt-5">
                    <div class="bg-white p-4 h-100 w-100">
                        <div class="text-center">
                            <img src="Upload.png" alt="" class="mb-4 icon">
                        </div>
                        <h3 class="text-center mb-3">Cloud Security</h3>
                        <p class="text-center">Sangfor Cyber Command offers cloud security solutions that can help users secure their cloud-based applications and infrastructure. This includes protecting against cloud-specific threats like data breaches, account hijacking, and insider threats.</p>
                    </div>
                </div>
                <div class="col-md-5 d-flex justify-content-center mt-5">
                    <div class="bg-white p-4 h-100 w-100">
                        <div class="text-center">
                            <img src="Cyber Security.png" alt="" class="mb-4 icon">
                        </div>
                        <h3 class="text-center mb-3">Comprehensive Security Management</h3>
                        <p class="text-center">Sangfor Cyber Command provides users with a comprehensive security management platform that can help them manage and monitor their entire security infrastructure from a single console. This includes managing security policies, tracking security events, and generating reports.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="features-section">
        <div class="container">
            <h2 class="text-center mt-5">Sangfor Cyber Command Features</h2>
            <div class="row justify-content-center mt-5">
                <div class="col-md-4 col-sm-6 text-center mb-4">
                    <img src="icon 1.png" alt="Threat Intelligence" class="mb-3">
                    <h4>Threat Intelligence</h4>
                    <p>Advanced AI algorithms and machine learning to provide enhanced threat intelligence to stay ahead of the latest cyber threats.</p>
                </div>
                <div class="col-md-4 col-sm-6 text-center mb-4">
                    <img src="icon 2.png" alt="Real-Time Detections" class="mb-3">
                    <h4>Real-Time Detections</h4>
                    <p>Real-time alert system provides instant notification to prevent security incidents.</p>
                </div>
                <div class="col-md-4 col-sm-6 text-center mb-4">
                    <img src="icon 3.png" alt="Threats Investigation" class="mb-3">
                    <h4>Threats Investigation</h4>
                    <p>In-depth threat investigation capabilities identify the root causes of security incidents and recommend actions to prevent future occurrences.</p>
                </div>
                <div class="col-md-4 col-sm-6 text-center mb-4">
                    <img src="icon 4.png" alt="Comprehensive Security Solutions" class="mb-3">
                    <h4>Comprehensive Security Solutions</h4>
                    <p>End-to-end security solutions ensure robust protection for your organization.</p>
                </div>
                <div class="col-md-4 col-sm-6 text-center mb-4">
                    <img src="icon 5.png" alt="Rapid Response" class="mb-3">
                    <h4>Rapid Response</h4>
                    <p>Rapid integration with network and security resources to quickly address incidents, reduce impact, and mitigate any threats.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="value-section">
        <div class="container">
            <h2 class="text-center mb-4" style="color: #293660; width: 32rem; margin: 0 auto;">Sangfor Cyber Command's Value to Customers</h2>
            <div class="d-flex flex-column align-items-start checking">
                <div class="d-flex align-items-center mb-3">
                    <img src="checkmark.png" style="width: 2.25rem; height: 2.25rem;" alt="checklist" class="me-2 flex-shrink-0">
                    <p class="mb-2 text-value flex-grow-1" style="font-size: 1.25rem; width: 32rem;">Detect known and unknown threats</p>
                </div>
                <div class="d-flex align-items-center mb-3">
                    <img src="checkmark.png" style="width: 2.25rem; height: 2.25rem;" alt="checklist" class="me-2 flex-shrink-0">
                    <p class="mb-2 text-value flex-grow-1" style="font-size: 1.25rem; width: 32rem;">Much better visibility of security posture of the entire infrastructure</p>
                </div>
                <div class="d-flex align-items-center mb-3">
                    <img src="checkmark.png" style="width: 2.25rem; height: 2.25rem;" alt="checklist" class="me-2 flex-shrink-0">
                    <p class="mb-2 text-value flex-grow-1" style="font-size: 1.25rem; width: 32rem;">Business Impact Analysis helps IT to understand what is already compromised and what needs to be prioritized</p>
                </div>
                <div class="d-flex align-items-center mb-3">
                    <img src="checkmark.png" style="width: 2.25rem; height: 2.25rem;" alt="checklist" class="me-2 flex-shrink-0">
                    <p class="mb-2 text-value flex-grow-1" style="font-size: 1.25rem; width: 32rem;">Faster Response to improve overall security control</p>
                </div>
                <div class="d-flex align-items-center mb-3">
                    <img src="checkmark.png" style="width: 2.25rem; height: 2.25rem;" alt="checklist" class="me-2 flex-shrink-0">
                    <p class="mb-2 text-value flex-grow-1" style="font-size: 1.25rem; width: 32rem;">Much more cost effective than other solutions such as SIEM</p>
                </div>
            </div>
        </div>
    </section>

    <div class="position-relative" style="margin-top: -20px; z-index: 2;">
        <div class="container">
            <div class="d-flex justify-content-center">
                <div class="px-4 py-2 text-center" style="display: inline-block; background-color: #293660;">
                    <h2 class="text-white m-0">Cyber Command Customers Reference</h2>
                </div>
            </div>
        </div>
    </div>

    <section class="customer-section">
        <div class="">
            <div class="d-flex justify-content-center align-items-center py-5" style="gap: 5rem;">
                <img src="Logo J&T.png" alt="" class="Logo-Customer" style="width: 170px; height: 65px;">
                <img src="Logo Jasa Raharja.png" alt="" class="Logo-Customer" style="width: 150px; height: 85px;">
                <img src="Logo Ok Bank.png" alt="" class="Logo-Customer" style="width: 170px; height: 65px;">
                <img src="Logo Samudera.png" alt="" class="Logo-Customer" style="width: 170px; height: 65px;">
            </div>
        </div>
    </section>

    <section class="explore-section bg-white">
        <h2 class="text-center mt-5">Explore Sangfor Cyber Command with Helios</h2>
        <p class="text-center">Helios Informatika Nusantara as Sangfor Distributor will provide</p>
        <div class="d-flex flex-row justify-content-center align-items-center gap-5 mt-4 p-4 mb-5">
            <div class="d-flex flex-column bg-white shadow-sm justify-content-center align-items-center" style="min-height: 16rem; height: auto; width: 20rem;">
                <img src="icon explore.png" alt="" style="width: 6rem;">
                <h5 class="text-center mt-3" style="width: 13rem;">NDR Implementation</h5>
            </div>
            <div class="d-flex flex-column bg-white shadow-sm justify-content-center align-items-center" style="min-height: 16rem; height: auto; width: 20rem;">
                <img src="icon explore 2.png" alt="" style="width: 6rem;">
                <h5 class="text-center mt-3" style="width: 13rem;">Incident Response
                    and Threat Hunting</h5>
            </div>
            <div class="d-flex flex-column bg-white shadow-sm justify-content-center align-items-center" style="min-height: 16rem; height: auto; width: 20rem;">
                <img src="icon explore 3.png" alt="" style="width: 6rem;">
                <h5 class="text-center mt-3" style="width: 13rem;">Device Security
                    Maintenance</h5>
            </div>
        </div>
    </section>

    <footer>
        <div class="w-100">
            <div class="footer-content">
                <div class="footer-info ms-4">
                    <h3 class="mb-4 text-white" style="font-size: 2rem;">PT. Helios Informatika Nusantara</h3>
                    <p class="mb-4 text-white">
                        Centennial Tower, 12th Floor,<br>
                        Jl. Jendral Gatot Subroto<br>
                        No. Kav 24-25, Jakarta<br>
                        12930 Indonesia<br>
                        <br>
                        Phone: +62 21 8062 2220<br>
                        Email: Tencent@helios.id
                    </p>
                    <div class="social-icons py-2">
                        <img src="Facebook.png" alt="Facebook" width="24" height="24">
                        <img src="ig.png" alt="Instagram" width="24" height="24">
                        <img src="Twitter.png" alt="Twitter" width="24" height="24">
                        <img src="Youtube.png" alt="Youtube" width="24" height="24">
                        <img src="Linkedin.png" alt="LinkedIn" width="24" height="24">
                    </div>
                </div>
                <div class="footer-map me-4">
                    <img src="worldmap.png" alt="World Map">
                </div>
            </div>
            <div class="text-center p-3" style="background-color: #000A85; color: white;">
                © 2023 - PT. Helios Informatika Nusantara - All Right Reserved
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
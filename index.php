<?php
error_reporting(0);
include('includes/config.php'); 
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="University Result Management System" />
        <meta name="author" content="Surana College Autonomous" />
        <title>University Result Management System</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Google Fonts & Icons -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />

        <style>
            :root {
                --font-main: 'Plus Jakarta Sans', -apple-system, BlinkMacSystemFont, sans-serif;
                --primary-color: #4f46e5;
                --primary-hover: #4338ca;
                --accent-gradient: linear-gradient(135deg, #6366f1 0%, #a855f7 100%);
                --bg-light: #f8fafc;
                --card-bg: #ffffff;
                --text-dark: #0f172a;
                --text-muted: #64748b;
                --border-color: #e2e8f0;
                --radius-lg: 20px;
                --radius-md: 14px;
                --shadow-soft: 0 10px 30px -10px rgba(0, 0, 0, 0.06), 0 4px 6px -2px rgba(0, 0, 0, 0.03);
                --shadow-hover: 0 20px 35px -10px rgba(99, 102, 241, 0.18), 0 10px 15px -3px rgba(0, 0, 0, 0.08);
            }

            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }

            body {
                font-family: var(--font-main);
                background-color: var(--bg-light);
                color: var(--text-dark);
                line-height: 1.6;
                scroll-behavior: smooth;
            }

            /* Navbar */
            .navbar-custom {
                background: rgba(15, 23, 42, 0.94) !important;
                backdrop-filter: blur(12px);
                -webkit-backdrop-filter: blur(12px);
                border-bottom: 1px solid rgba(255, 255, 255, 0.08);
                padding: 14px 0;
            }

            .navbar-brand {
                font-weight: 800;
                font-size: 1.25rem;
                letter-spacing: -0.5px;
                color: #ffffff !important;
            }

            .navbar-brand img {
                border-radius: 8px;
                box-shadow: 0 0 12px rgba(99, 102, 241, 0.4);
            }

            .nav-link {
                font-weight: 600;
                font-size: 0.95rem;
                color: rgba(255, 255, 255, 0.8) !important;
                padding: 8px 18px !important;
                border-radius: 30px;
                transition: all 0.3s ease;
            }

            .nav-link:hover, .nav-link.active {
                color: #ffffff !important;
                background: rgba(255, 255, 255, 0.12);
            }

            .nav-btn-highlight {
                background: var(--accent-gradient);
                color: #ffffff !important;
                box-shadow: 0 4px 14px rgba(99, 102, 241, 0.4);
            }

            .nav-btn-highlight:hover {
                transform: translateY(-2px);
                box-shadow: 0 6px 20px rgba(99, 102, 241, 0.6);
            }

            /* Hero Section */
            .hero-header {
                position: relative;
                background-image: linear-gradient(180deg, rgba(15, 23, 42, 0.75) 0%, rgba(15, 23, 42, 0.9) 100%), url('images/hero.jpg');
                background-size: cover;
                background-position: center;
                min-height: 480px;
                display: flex;
                align-items: center;
                justify-content: center;
                color: #ffffff;
                text-align: center;
                padding: 90px 20px;
            }

            .hero-badge {
                display: inline-flex;
                align-items: center;
                gap: 8px;
                padding: 6px 18px;
                border-radius: 50px;
                background: rgba(255, 255, 255, 0.15);
                backdrop-filter: blur(8px);
                border: 1px solid rgba(255, 255, 255, 0.2);
                font-size: 0.85rem;
                font-weight: 600;
                text-transform: uppercase;
                letter-spacing: 1px;
                color: #e0e7ff;
                margin-bottom: 24px;
            }

            .hero-title {
                font-size: 3.2rem;
                font-weight: 800;
                letter-spacing: -1.5px;
                line-height: 1.15;
                margin-bottom: 20px;
                background: linear-gradient(to right, #ffffff, #c7d2fe);
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
            }

            .hero-subtext {
                font-size: 1.15rem;
                color: #cbd5e1;
                max-width: 650px;
                margin: 0 auto 36px auto;
                font-weight: 400;
            }

            .hero-actions {
                display: flex;
                gap: 16px;
                justify-content: center;
                flex-wrap: wrap;
            }

            .btn-primary-custom {
                background: var(--accent-gradient);
                color: #ffffff;
                font-weight: 700;
                padding: 14px 32px;
                border-radius: 50px;
                border: none;
                text-decoration: none;
                box-shadow: 0 10px 25px rgba(99, 102, 241, 0.4);
                transition: all 0.3s ease;
                display: inline-flex;
                align-items: center;
                gap: 8px;
            }

            .btn-primary-custom:hover {
                color: #ffffff;
                transform: translateY(-3px);
                box-shadow: 0 15px 30px rgba(99, 102, 241, 0.6);
            }

            .btn-secondary-custom {
                background: rgba(255, 255, 255, 0.12);
                color: #ffffff;
                font-weight: 600;
                padding: 14px 32px;
                border-radius: 50px;
                border: 1px solid rgba(255, 255, 255, 0.25);
                text-decoration: none;
                backdrop-filter: blur(8px);
                transition: all 0.3s ease;
                display: inline-flex;
                align-items: center;
                gap: 8px;
            }

            .btn-secondary-custom:hover {
                color: #ffffff;
                background: rgba(255, 255, 255, 0.22);
                transform: translateY(-3px);
            }

            /* Section Headings */
            .section-tag {
                font-size: 0.85rem;
                font-weight: 700;
                text-transform: uppercase;
                letter-spacing: 1.5px;
                color: var(--primary-color);
                margin-bottom: 8px;
                display: block;
            }

            .section-heading {
                font-size: 2.3rem;
                font-weight: 800;
                letter-spacing: -0.8px;
                color: var(--text-dark);
                margin-bottom: 12px;
            }

            .section-desc {
                color: var(--text-muted);
                font-size: 1rem;
                max-width: 600px;
                margin: 0 auto 40px auto;
            }

            /* Campus Section */
            .campus {
                width: 88%;
                max-width: 1200px;
                margin: auto;
                text-align: center;
                padding-top: 80px;
            }

            .campus .row {
                margin-top: 20px;
                display: flex;
                justify-content: space-between;
                gap: 24px;
                flex-wrap: wrap;
            }

            .campus-col {
                flex: 1;
                min-width: 280px;
                border-radius: var(--radius-lg);
                position: relative;
                overflow: hidden;
                height: 380px;
                box-shadow: var(--shadow-soft);
                transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
            }

            .campus-col img {
                width: 100%;
                height: 100%;
                object-fit: cover;
                display: block;
                transition: transform 0.6s cubic-bezier(0.165, 0.84, 0.44, 1);
            }

            .campus-col:hover img {
                transform: scale(1.08);
            }

            .campus-col .layer {
                background: linear-gradient(180deg, rgba(15, 23, 42, 0.1) 0%, rgba(15, 23, 42, 0.85) 100%);
                height: 100%;
                width: 100%;
                position: absolute;
                top: 0;
                left: 0;
                display: flex;
                align-items: flex-end;
                padding: 30px;
                transition: all 0.4s ease;
            }

            .campus-col:hover .layer {
                background: linear-gradient(180deg, rgba(79, 70, 229, 0.25) 0%, rgba(15, 23, 42, 0.95) 100%);
            }

            .campus-col .layer h3 {
                width: 100%;
                font-weight: 700;
                color: #ffffff;
                font-size: 1.4rem;
                text-align: left;
                margin: 0;
                transform: translateY(10px);
                transition: transform 0.4s ease;
            }

            .campus-col:hover .layer h3 {
                transform: translateY(0);
            }

            /* Course Section */
            .course {
                width: 88%;
                max-width: 1200px;
                margin: auto;
                text-align: center;
                padding-top: 90px;
            }

            .course .row {
                margin-top: 20px;
                display: flex;
                justify-content: space-between;
                gap: 24px;
                flex-wrap: wrap;
            }

            .course-col {
                flex: 1;
                min-width: 280px;
                background: var(--card-bg);
                border: 1px solid var(--border-color);
                border-radius: var(--radius-lg);
                padding: 36px 28px;
                box-sizing: border-box;
                box-shadow: var(--shadow-soft);
                text-align: left;
                position: relative;
                overflow: hidden;
                transition: all 0.35s cubic-bezier(0.165, 0.84, 0.44, 1);
            }

            .course-col::before {
                content: '';
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                height: 4px;
                background: var(--accent-gradient);
                opacity: 0.8;
                transition: opacity 0.3s ease;
            }

            .course-col:hover {
                transform: translateY(-8px);
                box-shadow: var(--shadow-hover);
                border-color: rgba(99, 102, 241, 0.3);
            }

            .course-icon {
                width: 52px;
                height: 52px;
                border-radius: 14px;
                background: #e0e7ff;
                color: var(--primary-color);
                display: flex;
                align-items: center;
                justify-content: center;
                font-size: 1.3rem;
                margin-bottom: 20px;
            }

            .course-col h2 {
                font-size: 1.5rem;
                font-weight: 800;
                color: var(--text-dark);
                margin-bottom: 12px;
            }

            .course-col p {
                color: var(--text-muted);
                font-size: 0.95rem;
                line-height: 1.6;
                padding: 0;
            }

            /* Facilities Section */
            .facilities {
                width: 88%;
                max-width: 1200px;
                margin: auto;
                text-align: center;
                padding-top: 90px;
            }

            .facilities .row {
                margin-top: 20px;
                display: flex;
                justify-content: space-between;
                gap: 24px;
                flex-wrap: wrap;
            }

            .facilities-col {
                flex: 1;
                min-width: 280px;
                background: var(--card-bg);
                border: 1px solid var(--border-color);
                border-radius: var(--radius-lg);
                overflow: hidden;
                box-shadow: var(--shadow-soft);
                text-align: left;
                transition: all 0.35s cubic-bezier(0.165, 0.84, 0.44, 1);
            }

            .facilities-col:hover {
                transform: translateY(-8px);
                box-shadow: var(--shadow-hover);
                border-color: rgba(99, 102, 241, 0.3);
            }

            .facilities-img-wrapper {
                width: 100%;
                height: 220px;
                overflow: hidden;
            }

            .facilities-col img {
                width: 100%;
                height: 100%;
                object-fit: cover;
                transition: transform 0.5s ease;
            }

            .facilities-col:hover img {
                transform: scale(1.06);
            }

            .facilities-body {
                padding: 24px;
            }

            .facilities-col h3 {
                font-size: 1.3rem;
                font-weight: 700;
                color: var(--text-dark);
                margin-top: 0;
                margin-bottom: 10px;
            }

            .facilities-col p {
                color: var(--text-muted);
                font-size: 0.92rem;
                line-height: 1.6;
                padding: 0;
            }

            /* Notice Section */
            .notice-section {
                padding: 90px 0;
            }

            .notice-card {
                background: var(--card-bg);
                border: 1px solid var(--border-color);
                border-radius: var(--radius-lg);
                box-shadow: var(--shadow-soft);
                padding: 36px;
                position: relative;
                overflow: hidden;
            }

            .notice-card::before {
                content: '';
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 5px;
                background: var(--accent-gradient);
            }

            .notice-header {
                display: flex;
                align-items: center;
                gap: 14px;
                margin-bottom: 20px;
                padding-bottom: 16px;
                border-bottom: 1px solid var(--border-color);
            }

            .notice-header-icon {
                width: 46px;
                height: 46px;
                border-radius: 14px;
                background: #fee2e2;
                color: #ef4444;
                display: flex;
                align-items: center;
                justify-content: center;
                font-size: 1.25rem;
            }

            .notice-header h2 {
                font-size: 1.5rem;
                font-weight: 800;
                color: var(--text-dark);
                margin: 0;
            }

            .notice-marquee {
                height: 220px;
            }

            .notice-list {
                list-style: none;
                padding: 0;
                margin: 0;
            }

            .notice-item {
                padding: 12px 18px;
                margin-bottom: 10px;
                border-radius: var(--radius-md);
                background: #f8fafc;
                border: 1px solid #f1f5f9;
                transition: all 0.25s ease;
                display: flex;
                align-items: center;
                gap: 12px;
            }

            .notice-item:hover {
                background: #e0e7ff;
                border-color: #c7d2fe;
                transform: translateX(4px);
            }

            .notice-item i {
                color: var(--primary-color);
                font-size: 0.9rem;
            }

            .notice-item a {
                color: var(--text-dark);
                font-weight: 600;
                font-size: 0.95rem;
                text-decoration: none;
                transition: color 0.2s ease;
            }

            .notice-item a:hover {
                color: var(--primary-color);
            }

            /* Call To Action */
            .ctn {
                margin: 90px auto;
                width: 88%;
                max-width: 1200px;
                background-image: linear-gradient(135deg, rgba(15, 23, 42, 0.88) 0%, rgba(79, 70, 229, 0.88) 100%), url('images/qs-mba-ranking-recovered.jpg');
                background-position: center;
                background-size: cover;
                border-radius: var(--radius-lg);
                text-align: center;
                padding: 70px 40px;
                color: #ffffff;
                box-shadow: var(--shadow-hover);
                transition: all 0.4s ease;
            }

            .ctn h1 {
                font-size: 2.5rem;
                font-weight: 800;
                color: #ffffff;
                margin-bottom: 16px;
                letter-spacing: -0.8px;
            }

            .ctn p {
                font-size: 1.1rem;
                color: #e0e7ff;
                max-width: 600px;
                margin: 0 auto 30px auto;
            }

            /* Footer */
            .footer-custom {
                background: #0f172a;
                color: #94a3b8;
                padding: 50px 0 30px 0;
                border-top: 1px solid rgba(255, 255, 255, 0.08);
            }

            .footer-brand {
                color: #ffffff;
                font-weight: 800;
                font-size: 1.2rem;
                display: flex;
                align-items: center;
                justify-content: center;
                gap: 10px;
                margin-bottom: 12px;
            }

            .footer-text {
                font-size: 0.9rem;
            }
        </style>
    </head>
    <body>
        <!-- Responsive navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark navbar-custom sticky-top">
            <div class="container">
                <a class="navbar-brand d-flex align-items-center" href="index.php">
                    <img src="images/logo.png" alt="Logo" style="height: 32px; margin-right: 12px;">
                    Surana College
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-center gap-2">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#course_call">Courses</a></li>
                        <li class="nav-item"><a class="nav-link" href="#facilities_call">Facilities</a></li>
                        <li class="nav-item"><a class="nav-link" href="find-result.php"><i class="fa fa-graduation-cap me-1"></i> Check Results</a></li>
                        <li class="nav-item"><a class="nav-link nav-btn-highlight" href="admin-login.php"><i class="fa fa-lock me-1"></i> Admin Portal</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Hero Header -->
        <header class="hero-header">
            <div class="container">
                <div class="hero-badge">
                    <i class="fa-solid fa-award"></i> University Result Portal 2026
                </div>
                <h1 class="hero-title">Empowering Excellence,<br>Transforming Futures</h1>
                <p class="hero-subtext">Access academic results, program details, and campus notices effortlessly with our streamlined management portal.</p>
                <div class="hero-actions">
                    <a href="find-result.php" class="btn-primary-custom"><i class="fa fa-search"></i> Search Results</a>
                    <a href="admin-login.php" class="btn-secondary-custom"><i class="fa fa-user-shield"></i> Admin Login</a>
                </div>
            </div>
        </header>

        <!-- Our Campus Section -->
        <section class="campus">
            <span class="section-tag">Explore Excellence</span>
            <h2 class="section-heading">Our Vibrant Campus</h2>
            <p class="section-desc">Experience world-class learning environments designed to nurture innovation, collaboration, and leadership.</p>

            <div class="row">
                <div class="campus-col">
                    <img src="images/istockphoto-2026125861-612x612.jpg" alt="Innovation instigators">
                    <div class="layer">
                        <h3>Innovation Instigators</h3>
                    </div>
                </div>

                <div class="campus-col">
                    <img src="images/istockphoto-2105100634-612x612.jpg" alt="Admission">
                    <div class="layer">
                        <h3>Admissions 2026</h3>
                    </div>
                </div>

                <div class="campus-col">
                    <img src="images/istockphoto-2215003889-612x612.jpg" alt="Error Crackers">
                    <div class="layer">
                        <h3>Tech & Research Hub</h3>
                    </div>
                </div>
            </div>
        </section>

        <!-- Courses Section -->
        <section class="course" id="course_call">
            <span class="section-tag">Academic Programs</span>
            <h2 class="section-heading">Courses We Offer</h2>
            <p class="section-desc">Empowering students with industry-relevant postgraduate and undergraduate degree programs.</p>

            <div class="row">
                <div class="course-col">
                    <div class="course-icon"><i class="fa-solid fa-code"></i></div>
                    <h2>MCA</h2>
                    <p>Master of Computer Applications focuses on advanced software architecture, data structures, cloud computing, and modern IT management for high-growth tech careers.</p>
                </div>

                <div class="course-col">
                    <div class="course-icon"><div class="course-icon"><i class="fa-solid fa-briefcase"></i></div></div>
                    <h2>MBA</h2>
                    <p>Master of Business Administration equips future leaders with strategic decision-making skills in corporate finance, global marketing, and operational management.</p>
                </div>

                <div class="course-col">
                    <div class="course-icon"><i class="fa-solid fa-chart-line"></i></div>
                    <h2>MCom</h2>
                    <p>Master of Commerce delivers deep insights into financial analysis, corporate taxation, economics, and strategic business auditing.</p>
                </div>
            </div>
        </section>

        <!-- Facilities Section -->
        <section class="facilities" id="facilities_call">
            <span class="section-tag">Campus Life</span>
            <h2 class="section-heading">Our Facilities</h2>
            <p class="section-desc">State-of-the-art amenities designed to support complete academic and personal development.</p>

            <div class="row">
                <div class="facilities-col">
                    <div class="facilities-img-wrapper">
                        <img src="images/canteen.jpg" alt="Canteen">
                    </div>
                    <div class="facilities-body">
                        <h3>Hygienic Canteen</h3>
                        <p>Nutritious and fresh meals prepared in hygienic kitchens, providing a vibrant social hub for students and faculty.</p>
                    </div>
                </div>

                <div class="facilities-col">
                    <div class="facilities-img-wrapper">
                        <img src="images/Auditorium.jpg" alt="Auditorium">
                    </div>
                    <div class="facilities-body">
                        <h3>Grand Auditorium</h3>
                        <p>Equipped with acoustic technology and 200+ seating capacity for seminars, cultural fests, and guest lectures.</p>
                    </div>
                </div>

                <div class="facilities-col">
                    <div class="facilities-img-wrapper">
                        <img src="images/library.jpg" alt="Library">
                    </div>
                    <div class="facilities-body">
                        <h3>Digital Library</h3>
                        <p>Comprehensive collection of books, research journals, e-resources, and quiet study zones for focused learning.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Call To Action -->
        <section class="ctn">
            <h1>Join Our Prestigious Institution</h1>
            <p>Shape your future with world-class education, expert faculty, and vibrant campus life.</p>
            <a href="find-result.php" class="btn-primary-custom"><i class="fa fa-graduation-cap"></i> Check Examination Results</a>
        </section>

        <!-- Notice Board Section -->
        <section class="notice-section container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="notice-card">
                        <div class="notice-header">
                            <div class="notice-header-icon">
                                <i class="fa-solid fa-bullhorn"></i>
                            </div>
                            <h2>Notice Board</h2>
                        </div>
                        <div class="notice-marquee">
                            <marquee direction="up" scrollamount="2" onmouseover="this.stop();" onmouseout="this.start();" style="height: 200px;">
                                <ul class="notice-list">
                                    <?php 
                                    $sql = "SELECT * from tblnotice";
                                    $query = $dbh->prepare($sql);
                                    $query->execute();
                                    $results=$query->fetchAll(PDO::FETCH_OBJ);
                                    if($query->rowCount() > 0) {
                                        foreach($results as $result) { ?>                      
                                            <li class="notice-item">
                                                <i class="fa-solid fa-circle-check"></i>
                                                <a href="notice-details.php?nid=<?php echo htmlentities($result->id);?>" target="_blank">
                                                    <?php echo htmlentities($result->noticeTitle);?>
                                                </a>
                                            </li>
                                        <?php } 
                                    } else { ?>
                                        <li class="notice-item">No active notices found.</li>
                                    <?php } ?>
                                </ul>
                            </marquee>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <footer class="footer-custom text-center">
            <div class="container">
                <div class="footer-brand">
                    <img src="images/logo.png" alt="Logo" style="height: 28px;">
                    Surana College Autonomous ( Bengaluru )
                </div>
                <p class="footer-text m-0">&copy; <?php echo date("Y"); ?> Student Result Management System. All rights reserved.</p>
            </div>
        </footer>

        <!-- Bootstrap core JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS -->
        <script src="js/scripts.js"></script>
    </body>
</html>

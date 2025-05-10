<!DOCTYPE html>
<html lang="zxx">
<head>
    
    <!-- metas -->
    <meta charset="utf-8">
    <meta name="author" content="MuskanBartaria">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="MuskanBartaria - Portfolio ">
    <meta name="description" content="MuskanBartaria - Portfolio ">
    <!-- title -->
    <title>Muskan Bartaria Portfolio</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo.png">
    <!-- theme css -->
    <link href="assets/css/style.css" rel="stylesheet">
</head>
<!-- Body Start -->
<body class="dark-bg">
    <!-- page loading -->
    <div id="loading">
        <div class="load-circle"><span class="one"></span></div>
    </div>
    <!-- End -->
    <!-- Header -->
    <header class="main-header">
        <nav class="navbar header-nav header-white header-transparent navbar-expand-lg one-page-nav">
            <div class="container">
                <!-- Brand -->
                <a class="navbar-brand" href="">
                    <img src="assets/img/logo.jpg" width="50" title="" alt=""> 
                </a>
                <!-- / -->
                <!-- Mobile Toggle -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-collapse-toggle" aria-controls="navbar-collapse-toggle" aria-expanded="false" aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <!-- / -->
                <!-- Top Menu -->
                <div class="collapse navbar-collapse justify-content-end" id="navbar-collapse-toggle">
                    <ul class="navbar-nav ml-auto">
                        <li><a class="nav-link" data-scroll-nav="0" href="#home"><span>Home</span></a></li>
                        <li><a class="nav-link" data-scroll-nav="1" href="#about"><span>About Us</span></a></li>
                        <!-- <li><a class="nav-link" data-scroll-nav="2" href="#work"><span>Portfolio</span></a></li> -->
                        <li><a class="nav-link" data-scroll-nav="3" href="#contactus"><span>Contact</span></a></li>
                    </ul>
                </div>
                <!-- / -->
            </div><!-- Container -->
        </nav> <!-- Navbar -->
    </header>
    <!-- End Header -->
    <!-- Main -->
    <main class="wrapper">
        <!-- Home Section -->
        <section data-scroll-index="0" class="home-section">
            <div class="container">
                <div class="row min-vh-100 align-items-center gy-5">
                    <div class="col-lg-7 pe-lg-5">
                        <div class="home-intro">
                            <h6>INTRODUCTION</h6>
                            <h2>I'm Muskan Bartaria<br> <span class="text-theme">Full Stack Developer</span></h2>
                            <p>I'm a passionate and detail-oriented Full-Stack Developer dedicated to crafting websites that are both visually captivating and highly functional. </p>
                            <div class="hs-exp">
                                <div class="exp-box">
                                    <h5><?php 
                                        $experience_date_obj = new DateTime("2020-06-01");
                                        $current_date_obj = new DateTime(date('Y-m-d'));
                                        $diff = $current_date_obj->diff($experience_date_obj);
                                        $age_years = $diff->y;
                                        echo "$age_years+";?>
                                    </h5>
                                    <span>YEARS<br /> OF EXPERIENCE</span>
                                </div>
                            </div>
                            <div class="btn-bar">
                                <a class="link-effect" target="_blank" href="https://drive.google.com/file/d/15aL9JAwBVPJHnFqHtseSTlC18FXTix2F/view?usp=sharing">Browse Resume <i class="bi bi-arrow-up-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="home-image">
                            <img src="assets/img/bg1.png" title="" alt="" style="width: 100%;-webkit-transform: scaleX(-1); transform: scaleX(-1);">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Home Section -->
        <!-- About Section -->
        <section data-scroll-index="1" class="section about-section border-top-g">
            <div class="container">
                <div class="row align-items-start">
                    <div class="col-md-4 col-xl-3 mx-auto sticky-md-top">
                        <div class="about-img-box">
                            <div class="about-img" style="background: linear-gradient(to left, #ffffff, transparent);">
                                <img src="assets/img/profile-img.png" title="" alt="" >
                            </div>
                            <div class="nav social-icons justify-content-center">
                                <a class="telegram" href="https://t.me/@muskanbartaria" target="_blank"><i class="fab fa-telegram"></i></a>
                                <a class="github" href="https://github.com/MuskanBartaria" target="_blank"><i class="fab fa-github"></i></a>
                                <a class="envelope" href="mailto:muskanbartaria1997@gmail.com" target="_blank"><i class="fa fa-envelope"></i></a>
                                <a class="linkedin" href="https://www.linkedin.com/in/muskan-bartaria-072852168" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                                <a class="whatsapp" href="https://wa.me/9999999999" target="_blank"><i class="fab fa-whatsapp"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7 col-lg-6 pt-5 pt-lg-0">
                        <div class="about-text">
                            <div class="about-row">
                                <h3>Biography</h3>
                                <p>Hi, I'm a full-stack developer who loves creating user-friendly and functional websites. I work with PHP, Laravel, MySQL,  frontend technologies like HTML5, CSS, and JavaScript,and tools like WordPress to build custom solutions. Whether it’s a web app, API integration, or a simple website, I focus on quality, creativity, and meeting your needs. Let’s bring your ideas to life!

                                </p>
                            </div>
                            <div class="about-row">
                                <h3>Education</h3>
                                <div class="row g-4">
                                    <div class="col-6">
                                        <h5>PGDM in Information Technology</h5>
                                        <p>NMIMS</p>
                                        <small>January 2020 - December 2021</small>
                                    </div>
                                    <div class="col-6">
                                        <h5>BBA (GENERAL)</h5>
                                        <p>NDIM (Guru Gobind Singh Indraprastha University), Delhi</p>
                                        <small>August 2016 - September 2019</small>
                                    </div>
                                    <div class="col-6">
                                        <h5>IT-Expert(Diploma)</h5>
                                        <p>Arth Institute, Delhi </p>
                                        <small>March 2016 - April 2018</small>
                                    </div>
                                </div>
                            </div>
                            <div class="about-row">
                                <h3>Experience</h3>
                                <div class="row g-4">
                                    <div class="col-6">
                                        <h5>Website Designer and Developer</h5>
                                        <p>SIGHTSEEINGO LTD</p>
                                        <small>Dec 2022 - Present</small>
                                    </div>
                                    <div class="col-6">
                                        <h5>Website designer and developer</h5>
                                        <p>K.R. Mangalam Group of School, Mehrauli(New Delhi)</p>
                                        <small>April 2021 - Nov 2022 </small>
                                    </div>
                                    <div class="col-6">
                                        <h5>Website designer and developer</h5>
                                        <p>Smartech Education Private Limited, Saket(New Delhi)</p>
                                        <small>June 2020 - April 2021</small>
                                    </div>
                                    <div class="col-6">
                                        <h5>WordPress internship</h5>
                                        <p>Parafit Delivers</p>
                                        <small>June 2019 - August 2019</small>
                                    </div>
                                </div>
                            </div>
                            <div class="about-row">
                                <div class="row g-4">
                                    <div class="col-6">
                                        <h3>Competences</h3>
                                        <ul>
                                            <li>Full-Stack Development</li>
                                            <li>Database & Subdomain Management</li>
                                            <li>Web Application Development</li>
                                            <li>API integration</li>
                                        </ul>
                                    </div>
                                    <div class="col-6">
                                        <h3>Skills</h3>
                                        <ul>
                                            <li>Laravel</li>
                                            <li>PHP</li>
                                            <li>Rest APIs</li>
                                            <li>Postman</li>
                                            <li>MySQL</li>
                                            <li>Bootstrap</li>
                                            <li>HTML - CSS - JS</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End About Section -->
        
        <!-- Contact Section -->
        <section data-scroll-index="3" class="section contactus-section border-top-g">
            <div class="container py-5">
                <div class="row justify-content-center section-heading">
                    <div class="col-lg-6 text-center">
                        <h6><span class="text-theme">Contact</span></h6>
                        <h3>Get in touch</h3>
                        <p>Need assistance with your web projects?<br>
                        Feel free to reach out—I’ll get back to you as quickly as possible.<br>
                        Follow me for more exciting projects and updates!</p><br>
                        <div class="btn-bar">
                            <a href="https://github.com/MuskanBartaria" target="_blank" style="display: inline-block; padding: 10px 20px; background-color: #24292f; color: white; text-decoration: none; border-radius: 5px; font-size: 14px;">
                                <i class="fa fa-star text-warning"  ></i>
                             Star Me on GitHub</a>

                                
                            </div>
                    </div>
                </div>
                              
            </div>
        </section>
        <!-- End Contact Section -->
        <!-- Effect -->
        <div class="right-effects"></div>
        <div class="left-effects"></div>
        <!-- End Effect -->
    </main>
    <!-- Main -->
    <!-- Footer -->
    <footer class="footer white py-2">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 py-2 ">
                    <div class="nav justify-content-center justify-content-md-start">
                        <a href="https://t.me/@muskanbartaria" target="_blank"><i class="fab fa-telegram"></i></a>
                        <a href="https://github.com/MuskanBartaria" target="_blank"><i class="fab fa-github"></i></a>
                        <a href="mailto:muskanbartaria1997@gmail.com" target="_blank"><i class="fa fa-envelope"></i></a>
                        <a  href="https://www.linkedin.com/in/muskan-bartaria-072852168" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                        <a  href="https://wa.me/9015571475" target="_blank"><i class="fab fa-whatsapp"></i></a> 
                    </div>
                </div>
                <div class="col-md-6 py-2 text-center text-md-end">
                    <p class="m-0">Back To Top <a data-scroll-nav="0" href="#home"><i class="fa fa-arrow-alt-circle-up"></i></a></p>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer -->
    <script src="assets/js/jquery-3.5.1.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/vendor/one-page/scrollIt.min.js"></script>
    <script src="assets/js/custom.js"></script>
    <!-- end -->
</body>
<!-- Body End -->


</html>

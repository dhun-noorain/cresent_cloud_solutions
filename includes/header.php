<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Crescent Cloud Solutions</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:wght@400;500&family=Inter:wght@400;500&family=Playfair+Display:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?=ROOT_URL?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?=ROOT_URL?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?=ROOT_URL?>assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="<?=ROOT_URL?>assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?=ROOT_URL?>assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS Files -->
  <link href="<?=ROOT_URL?>assets/css/variables.css" rel="stylesheet">
  <link href="<?=ROOT_URL?>assets/css/main.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">



  <!-- =======================================================
  * Template Name: ZenBlog - v1.0.0
  * Template URL: https://bootstrapmade.com/zenblog-bootstrap-blog-template/
  * Author: BootstrapMade.com
  * License: https:///bootstrapmade.com/license/
  ======================================================== -->
   <script src="https://kit.fontawesome.com/8acb53ed91.js" crossorigin="anonymous"></script>

<style type="text/css">
  .partners {
    text-align: center;
    padding: 50px 0;
  }

  .owl-carousel {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-wrap: wrap;
    margin-top: 20px;
  }

  .partner {
    flex: 0 0 calc(25% - 20px);
    margin: 10px;
    overflow: hidden;
    border: 1px solid #ddd;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease;
  }

  .partner img {
    max-width: 100%;
    height: auto;
    transition: transform 0.3s ease;
  }

  .partner:hover {
    transform: scale(1.05);
  }

  .partner:hover img {
    transform: scale(1.1);
  }


  .values-list {
      margin-top: 30px;
      padding: 20px;
      background-color: #f4f4f4;
      border-radius: 10px;
      text-align: center;
  }
  .values-list ul {
      list-style: none;
      padding: 0;
      margin: 0;
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
  }
  .values-list li {
      width: 100%;
      max-width: 300px;
      margin: 10px;
      padding: 15px;
      background-color: white;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
      border-radius: 5px;
      text-align: center;
  }
  /* More CSS */
</style>

</head>

<body>
 <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="http://localhost/cresent_cloud_solutions/" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo
          The isset page conditional is used to bypass the file path issue generated if the logo is viewed from a page different from the website's entry point (index.php)
        -->
        <img src="http://localhost/cresent_cloud_solutions/assets/img/cresent_logo.jpg" alt="Cresent Logo" style="border-radius: 50%;">
        <h1>Crescent</h1>
      </a>

      <!-- .navbar section -->
      <div>
        <i class="bi bi-list mobile-nav-toggle"></i>
        <nav id="navbar" class="navbar">
          <ul>
            <li><a href="<?=ROOT_URL?>index.php">Home</a></li>
            <li><a href="<?=ROOT_URL?>about/index.php">About us</a></li>
            <li><a href="<?=ROOT_URL?>products/index.php">Products</a></li>
             <li><a href="<?=ROOT_URL?>index.php#services">Services</a></li>
             <li><a href="<?=ROOT_URL?>blog/index.php">Blog</a></li>
             <li><a href="<?=ROOT_URL?>contact/index.php">Contact us</a></li>
          </ul>
        </nav>
      </div>

      <!-- header social icons -->
      <div class="position-relative" style="display: none;">
        <a href="#" class="mx-2"><span class="bi-facebook"></span></a>
        <a href="#" class="mx-2"><span class="bi-twitter"></span></a>
        <a href="#" class="mx-2"><span class="bi-instagram"></span></a>

        <a href="#" class="mx-2 js-search-open"><span class="bi-search"></span></a>

        <!-- ======= Search Form ======= -->
        <div class="search-form-wrap js-search-form-wrap">
          <form action="search-result.html" class="search-form">
            <span class="icon bi-search"></span>
            <input type="text" placeholder="Search" class="form-control">
            <button class="btn js-search-close"><span class="bi-x"></span></button>
          </form>
        </div>
        <!-- End Search Form -->

      </div>

    </div>
  </header>
  <!-- End Header -->
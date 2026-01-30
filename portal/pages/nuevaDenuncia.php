<?php require('../../helpers/menu.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Gp Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../../assets/img/favicon.png" rel="icon">
  <link href="../../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../../assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../../assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-lg-between">
      <h1 class="logo me-auto me-lg-0"><a href="../../index.php">Pt</a></h1>
      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <?php echo crear_menu('pages','denuncias'); ?>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="./index.php" class="get-started-btn scrollto">Empecemos</a>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center justify-content-center">
    <div class="container" data-aos="fade-up">

      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
        <div class="col-xl-6 col-lg-8">
          <img height="100px" src="../recursos/img/fondo_ptsv.png" alt="">
          <h1> Realiza una denuncia de manera anonima y segura</h1>
          <h2>Ellos llegan a ti cuando menos te lo esperas, ¡No al maltrato! </h2>
        </div>
      </div>

      <div class="row gy-4 mt-5 justify-content-center" data-aos="zoom-in" data-aos-delay="250">
        <div class="col-xl-2 col-md-4">
          <div class="icon-box">
            <img src="../../portal/recursos/img/icons/dog1.png" height="75px" alt="">
            <h3><a href="">Paco</a></h3>
          </div>
        </div>
        <div class="col-xl-2 col-md-4">
          <div class="icon-box">
          <img src="../../portal/recursos/img/icons/dog2.png" height="75px" alt="">
            <h3><a href="">Coco</a></h3>
          </div>
        </div>
        <div class="col-xl-2 col-md-4">
          <div class="icon-box">
          <img src="../../portal/recursos/img/icons/dog6.png" height="75px" alt="">
            <h3><a href="">Petter</a></h3>
          </div>
        </div>
        <div class="col-xl-2 col-md-4">
          <div class="icon-box">
          <img src="../../portal/recursos/img/icons/dog4.png" height="75px" alt="">
            <h3><a href="">Molly</a></h3>
          </div>
        </div>
        <div class="col-xl-2 col-md-4">
          <div class="icon-box">
          <img src="../../portal/recursos/img/icons/dog5.png" height="75px" alt="">
            <h3><a href="">Juan</a></h3>
          </div>
        </div>
      </div>

    </div>
  </section><!-- End Hero -->

    <div style="padding-bottom: 20px;" class="section">
        <div style="padding-top: 20px;" class="row">
            <center>
            <div class="col-md-9">
                <h1 style="color: red;">Lee lo siguiente antes de continiar con la denuncia.</h1>
                <p>Los animales son las criaturas más vulnerables y susceptibles de ser maltratadas. 
                    Debemos ser conscientes de lo importante que es denunciar los casos de maltrato 
                    animal ante las autoridades, ya que hacer visible el maltrato es el primer paso 
                    para perseguirlo y sancionarlo, e incluso en muchos casos, también para legislar 
                    sobre él.
                </p>
                <div class="row">
                    <div class="col-md-4">
                        <img height="200px" width="355" src="../recursos/img/perritos/perrito_feliz_1.webp" alt="perrito">
                        <h4>¿Que es el maltrato animal?</h4>
                        <button id="boton" type="button" class="btn btn-outline-info"><a style="color: black;" href="">Mas informacion</a></button>
                    </div>
                    <div class="col-md-4">
                        <img height="200px" src="../recursos/img/perritos/perrito_feliz_2.webp" alt="perrito">
                        <h4>¿Que es el maltrato animal?</h4>
                        <button id="boton" type="button" class="btn btn-outline-info"><a style="color: black;" href="">Campañas</a></button>
                    </div>
                    <div class="col-md-4">
                        <img height="200px" src="../recursos/img/perritos/perrito_feliz_3.webp" alt="perrito">
                        <h4>¿Que es el maltrato animal?</h4>
                        <button id="boton" type="button" class="btn btn-outline-info"><a style="color: black;" href="">Denuncias</a></button>
                    </div>
                </div>
            </div>
            </center>
        </div>
    </div>

  <!-- ======= Footer ======= -->
  <?php echo footer(); ?>

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="../../assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="../../assets/vendor/aos/aos.js"></script>
  <script src="../../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../../assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../../assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="../../assets/js/main.js"></script>

</body>

</html>
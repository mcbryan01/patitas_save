<?php require('../../helpers/menu.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Patitas a Salvo</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../recursos/img/fondo_ptsv.png" rel="icon">

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
  <link href="../recursos/css/style.css" rel="stylesheet">
</head>



<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-lg-between">
      <h1 class="logo me-auto me-lg-0"><a href="../../index.php"><img src="../recursos/img/fondo_ptsv.png" while="30px" height="100px" alt="Techro HTML5 template"> PT</a></h1>
      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <?php echo crear_menu('pages','denuncias'); ?>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->

  <main style="margin-top: 25px;" id="main">
    <!-- ======= Counts Section ======= -->

    <section style="padding-bottom: 20px;" id="contact" class="contact">

        <div style="margin-top: 20px;" class="container" data-aos="fade-up">
            <div class="section-title">
                <div class="row">
                    <h1>Patitas a salvo</h1> 
                </div>         
            </div>
        </div>

        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h3>Adopción</h3>
                <p style="text-align: justify;">
                Adoptar una mascota es una acción que conlleva una gran responsabilidad, con alto sentido social y humanitario, por ello, el ayuntamiento de San Juan Totolac invita a la población a sumarse a esta noble acción, a fin de abatir la proliferación de animales callejeros y animales maltratados para evitar los posibles riesgos que esta condición conlleva.  
                </p>
            </div>
        </div>

      <div class="container" data-aos="fade-up">
      <h2>Formulario de postulante para adquirir una adopción</h2><br>
      <center>
      <img src="../recursos/img/formulario-de-contacto.png" height="270px" alt="">
      </center>
        <div class="row mt-5">
            <div class="col-lg-12 mt-6 mt-lg-0">
                <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                    <div class="row">
                        <div class="col-md-4 form-group">
                            <label for="inputAddress">Nombre</label>
                            <input type="text" name="name" class="form-control" id="name" placeholder="Nombre" required>
                        </div>

                        <div class="col-md-4 form-group mt-4 mt-md-0">
                            <label for="inputAddress">Apellido Paterno</label>
                            <input type="text" class="form-control" name="name" id="Apellido_Paterno" placeholder="Apellido Paterno" required>
                        </div>

                        <div class="col-md-4 form-group mt-4 mt-md-0">
                            <label for="inputAddress">Apellido Materno</label>
                            <input type="text" name="name" class="form-control" id="Apellido_Paterno" placeholder="Apellido Materno" required>
                        </div>

                        <div class="col-md-6 form-group mt-md-2">
                            <label for="inputAddress">Fecha de postulación</label>
                            <input type="date" name="name" class="form-control" id="Apellido_Paterno" placeholder="Fecha" required>
                        </div>

                        <div class="col-md-6 form-group mt-3 mt-md-2">
                            <label for="inputAddress">Correo electronico</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                        </div>

                        <div class="col-md-6 form-group mt-md-2">
                            <label for="inputAddress">Teléfono</label>
                            <input type="text" name="name" class="form-control" id="Apellido_Paterno" placeholder="Teléfono" required>
                        </div>

                        <div class="col-md-6 form-group mt-3 mt-md-2">
                            <label for="inputAddress">Edad</label>
                            <input type="number" class="form-control" name="Edad" id="email" placeholder="Edad" required>
                        </div>

                        <div class="col-md-6 form-group mt-5 mt-md-2">
                            <label for="inputAddress">Incluya una foto de verificación</label>
                            <input type="file" class="form-control" multiple="multiple" id="photo" name="photo" placeholder="Edad" required>
                        </div>
                        
                        <div class="form-group mt-3">
                            <label for="inputAddress">¿Por qué quieres adoptar?</label>
                            <textarea class="form-control" name="message" rows="5" placeholder="Mensaje" required></textarea>
                        </div>
                        <div class="my-3">
                            <div class="loading">Loading</div>
                        </div>                        
                    <div class="text-center"><button type="submit" id="" value="Enviar Mensaje">Enviar Mensaje</button></div>
                </form>

            </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Más servicios</h2>
          <h3>Noticias</h3>
        </div>

        <div class="row">
          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <h4>Vacunación antirrábica</h4>
              <p>Te invitamos a que lleves a tus mascotas a los puestos de vacunación  que se encontraran en las presidencias  de comunidad  del municipio en un horario de 9:00 am a 2:00 pm.</p><br>
              <img src="../recursos/img/newsPerritos/perrito_2.webp" height="115px" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <h4>Campaña de adopción</h4>
              <p>Invitación para darle una nueva oportunidad de vida a perros rescatados del maltrato y abandono.</p><br>
              <img src="../recursos/img/newsPerritos/perrito_3.webp" height="115px" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <h4>Campaña de esterilizacion</h4>
              <p>Campaña de esterilización para perros, acude al polideportivo “El hoyo”, ubicado en San Juan Totolac, de 9:00 am a 11:00 am.</p><br>
              <img src="../recursos/img/newsPerritos/perrito_4.webp" height="115px" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <h4>Comida para todos los caninos</h4>
              <p>Ven y apoya donando comida para centros de ayuda o refugios para perritos que no encuentran hogar.</p><br>
              <img src="../recursos/img/newsPerritos/perrito_5.webp" height="115px" alt="">
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Services Section -->

  </main><!-- End #main -->
  
  <!-- ======= Footer ======= -->
  <?php echo footer('pages','adopcion'); ?>


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
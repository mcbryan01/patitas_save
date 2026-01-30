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

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

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

<div style="padding: 20px;" class="section">
  <div class="row">
    <div class="col-md-12">
      
      <form style="padding: 20px;">
        <h1 style="color: red;">Lee lo siguiente antes de continiar con la denuncia.</h1>
        <p style="text-align: justify;">Aviso de Privacidad
        La Procuraduría Federal de Protección al Ambiente es la responsable del tratamiento de los datos personales que se recaben de forma general en los actos de inspección, vigilancia y substanciación de procedimientos administrativos que realiza en las materias de su competencia.
        El tratamiento de los datos personales recabados por esta Procuraduría se realiza con la finalidad de dar cumplimiento a lo establecido en la Ley General del Equilibrio Ecológico y la Protección al Ambiente y sus Reglamentos; la Ley General de Bienes Nacionales; la Ley Federal de Responsabilidad Ambiental; Título Tercero de la Ley Federal de Procedimiento Administrativo, Título Vigésimo Quinto del Código Penal Federal; el Reglamento para el Uso y Aprovechamiento del Mar Territorial, Vías Navegables, Playas, Zona Federal Marítimo Terrestre y Terrenos Ganados al Mar y el Reglamento Interior de la Secretaría de Medio Ambiente y Recursos Naturales.</p>
        <h3 style="color: black;">Datos del denunciante.</h3>
        <div class="form-row">
          

          <div class="form-group col-md-4">
            <label for="inputEmail4">Nombre</label>
            <input type="text" class="form-control" id="inputEmail4" placeholder="Coloca tu nombre(Caso contrario coloca anonimo)">
          </div>

          <div class="form-group col-md-4">
            <label for="inputState">¿Eres de la comunidad?</label>
            <select id="inputState" class="form-control">
              <option selected>Selecciona una opcion...</option>
              <option>Si</option>
              <option>No</option>
            </select>
          </div>

          <div class="form-group col-md-4">
            <label for="inputState">Genero</label>
            <select id="inputState" class="form-control">
              <option selected>Escoge tu genero...</option>
              <option>Masculino</option>
              <option>Femenino</option>
              <option>Prefiero no decirlo</option>
            </select>
          </div>
        </div>

        <div class="form-row">
          <div class="form-group col-md-4">
            <label for="inputAddress">Calle</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
          </div>
          <div class="form-group col-md-4">
            <label for="inputAddress">Número</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
          </div>
          <div class="form-group col-md-4">
            <label for="inputAddress">Colonia</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
          </div>
        </div>
        <div class="form-row">
        <div class="form-group col-md-4">
            <label for="inputAddress">Correo</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="example@mail.com">
          </div>
          <div class="form-group col-md-4">
            <label for="inputAddress">Numero de telefono</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="24545645878">
          </div>
        </div>


        <h3 style="color: black;">Datos Generales del Denunciado.</h3>
        <div class="form-row">
          

          <div class="form-group col-md-4">
            <label for="inputEmail4">Nombre</label>
            <input type="text" class="form-control" id="inputEmail4" placeholder="Coloca su nombre o razon social">
          </div>

          <div class="form-group col-md-4">
            <label for="inputState">Es de la comunidad de San Juan Totolac?</label>
            <select id="inputState" class="form-control">
              <option selected>Selecciona una opcion...</option>
              <option>Si</option>
              <option>No</option>
            </select>
          </div>

          <div class="form-group col-md-4">
            <label for="inputState">Genero</label>
            <select id="inputState" class="form-control">
              <option selected>Escoge tu genero...</option>
              <option>Masculino</option>
              <option>Femenino</option>
              <option>Prefiero no decirlo</option>
            </select>
          </div>
        </div>

        <div class="form-row">
          <div class="form-group col-md-4">
            <label for="inputAddress">Calle</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
          </div>
          <div class="form-group col-md-4">
            <label for="inputAddress">Número</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
          </div>
          <div class="form-group col-md-4">
            <label for="inputAddress">Colonia</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
          </div>
        </div>
        <div class="form-row">
        <div class="form-group col-md-4">
            <label for="inputAddress">Correo</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="example@mail.com">
          </div>
          <div class="form-group col-md-4">
            <label for="inputAddress">Numero de telefono</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="24545645878">
          </div>
        </div>



        <div class="row">
          <div class="col-md-12">
            <h2 style="color: red;">
                Atencion.
              </h2> 
            <strong>
            <p style="text-align: justify;">
                No se realizarán transferencias de datos personales, salvo aquellas que sean necesarias para atender requerimientos de información de una autoridad competente, que estén debidamente fundados y motivados, de acuerdo a lo establecido en los artículos 18, 22, 70 y 71 de la Ley General de Protección de Datos Personales en Posesión de Sujetos Obligados.Usted podrá ejercer su oposición para el tratamiento de sus datos personales en la Unidad de Transparencia de la Procuraduría Federal de Protección al Ambiente ubicada en Carretera Picacho-Ajusco No. 200, 5° piso, Ala Norte, Col. Jardines en la Montaña, Demarcación Territorial Tlalpan, en la Ciudad de México, C.P. 14210. Correo electrónico: unidad.enlace@profepa.gob.mx y teléfono 55 5449 6300 ext. 16380 y 16174.Si desea conocer nuestro aviso de privacidad integral, lo podrá consultar en el portal http://www.profepa.gob.mx/innovaportal/v/9146/1/mx/avisos_de_privacidad.html
            </p>
            </strong>
          </div>
        </div>
        <div class="form-group">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck">
            <label class="form-check-label" for="gridCheck">
              Estoy de acuerdo con los terminos y condiciones del uso del servicio de denuncia ciudadana.
            </label>
          </div>
        </div>
        <button type="submit" class="btn btn-primary">Eviar</button>
      </form>


    </div>

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

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  <!-- Template Main JS File -->
  <script src="../../assets/js/main.js"></script>

</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Desagotes La Victoria</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../assets/img/favicon.png" rel="icon">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css" crossorigin="anonymous">
 -->
  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">

  <script src="https://code.iconify.design/3/3.1.0/iconify.min.js"></script>

  <script src='https://www.google.com/recaptcha/api.js?render=6LdHrLEUAAAAAM4CqjNR_lDOOV1Tv16uXk57Ng4o'></script>
  <script>
    grecaptcha.ready(function () {
      grecaptcha.execute('6LdHrLEUAAAAAM4CqjNR_lDOOV1Tv16uXk57Ng4o', { action: 'formulario' })
        .then(function (token) {
          var recaptchaResponse = document.getElementById('recaptchaResponse');
          recaptchaResponse.value = token;
        });
    });
  </script>

  <meta name="google-site-verification"
    content="google-site-verification=_hKqKGTBLcEraPvwFu8tUNzUJNI9BkeupGXAuiU8QDo" />

  <style>
    .content_title {
      text-align: center;
      max-width: 600px;
      /* Ajusta el ancho máximo según sea necesario */
      margin: 0 auto;
      /* Centra el párrafo horizontalmente */
      font-size: 16px;
      /* Tamaño de fuente ajustado */
      line-height: 1.5;
      /* Altura de línea ajustada para una mejor legibilidad */
    }

    .title1 {
      text-align: center;
      /* Centra el texto horizontalmente */
      margin-top: 0;
      /* Elimina el margen superior predeterminado */
      padding: 20px 0;
    }

    .number {
      color: #3498db;
      /* Color de texto blanco */
      border-radius: 50%;
      /* Bordes redondeados para formar un círculo */
      width: 60px;
      /* Ancho del contenedor del número (ajusta según sea necesario) */
      height: 60px;
      /* Altura del contenedor del número (ajusta según sea necesario) */
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 30px;
      /* Tamaño de fuente del número (ajusta según sea necesario) */
      font-weight: bold;
      /* Texto en negrita */
      margin: 0;
      /* Centrar horizontalmente */
    }
  </style>
</head>


<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Realizamos la petición de control: 
  $recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
  $recaptcha_secret = '6LdHrLEUAAAAAF5X3_3TIrJm1Wyh93BllZtXdQGa';
  $recaptcha_response = $_POST['recaptcha_response'];
  $recaptcha = file_get_contents($recaptcha_url . '?secret=' . $recaptcha_secret . '&response=' . $recaptcha_response);
  $recaptcha = json_decode($recaptcha);

  // Miramos si se considera humano o robot: 
  if ($recaptcha->score >= 0.5) {
    // Si la verificación de reCAPTCHA es exitosa, procesa el formulario y envía el correo electrónico
    $_email = $_POST['email'];
    $from = "info@desagoteslavictoria.com.ar";
    $to = "info@desagoteslavictoria.com.ar";
    $subject = "Desagotes La Victoria ==> Consulta desde el Formulario de Contacto";

    $message = '<br>================================================<br><b>CONSULTA</b><br>================================================<br><b>Email: </b>' . $_email . '<br><br>================================================<br>Enviado OK!<br><br><br><br>';

    $headers = "MIME-Version: 1.0" . "\r\nContent-type:text/html;charset=UTF-8" . "\r\nFrom: $from\r\nReply-to: $_email\r\nBcc: cjgorgoretti@gmail.com";

    if (mail($to, $subject, $message, $headers)) {
      echo '<script type="text/javascript">
            alert("Será contactado a la brevedad. Gracias!");
             window.location.href="index.php";
           </script>';
    }
  } else {
    // Si la verificación de reCAPTCHA falla, puedes manejarlo aquí (puedes agregar un mensaje de error, por ejemplo).
    echo '<script type="text/javascript">
            alert("Error: No se ha superado la verificación de reCAPTCHA. Por favor, inténtelo de nuevo.");
            </script>';
  }
}

?>


<body>

  <div class="btn-whatsapp">
    <a href="https://wa.me/+5491162000180?text=%C2%A1Hola%21%20Bienvenido%20a%20La%20Victoria%2C%20Transporte%20de%20Residuos.%20Ingresa%20tu%20consulta%20y%20pronto%20ser%C3%A1s%20atendido%20por%20uno%20de%20nuestros%20asesores."
      target="_blank">
      <img src="../assets/img/btn_whatsapp.png" alt="">
    </a>
  </div>


  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center" style="background: none;">
    <div class="container d-flex justify-content-between align-items-center"
      style="background: white; border-radius: 20px;">
      <i class="bi bi-list mobile-nav-toggle" style="color: black;"></i>

      <div class="logo">
        <!-- <h1 class="text-light"><a href="index.html"><span>Moderna</span></a></h1> -->
        <a href="../home.php"><img src="../assets/img/logo.png" alt="" class="img-fluid"></a>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="../home.php" style="color: black;">Inicio</a></li>
          <li><a href="servicios.php" style="color: black;">Servicios</a></li>
          <li><a href="nosotros.php" style="color: black;">Nosotros</a></li>
          <li><a href="trabajos.php" style="color: black;">Trabajos</a></li>
          <li><a href="blog.php" style="color: black;">Blogs</a></li>
          <li><a href="contacto.php" style="color: black;">Contacto</a></li>
        </ul>
      </nav><!-- .navbar -->
      <div style="height: 25px; width: 70px;">
        <a href="https://www.facebook.com/DesagotesLaVictoria" class="facebook"><i class="bx bxl-facebook"
            style="color: black; font-size: 18px; padding-right: 2px;"></i></a>
        <a href="https://www.instagram.com/destapacioneslavictoria/" class="instagram"><i class="bx bxl-instagram"
            style="color: black; font-size: 18px;  padding-right: 4px;"></i></a>
        <i class="bi bi-search" style="color: black; font-size: 16px;"></i>
      </div>

    </div>
  </header><!-- End Header -->


  <main id="main">


    <!-- ======= Pricing Section ======= -->
    <section class="pricing section-bg" data-aos="fade-up" id="servicios">
      <div class="container">

        <div class="section-title">
          <p class="text-primary" style="letter-spacing: 0.3em;">Servicios</p>
          <h1>Según su necesidad</h1>
          <!--  <p>Ponemos a su disposición las más modernas tecnologías para brindar un servicio óptimo, seguro y eficiente.
            Camiones y maquinarias de última generación son nuestras herramientas para brindar un servicio de máxima
            calidad</p> -->
        </div>

        <div class="row no-gutters">

          <div class="col-lg-4 box">
            <h2><strong>Extracción y Transporte</strong></h2>
            <h4>Consultar precio</h4>
            <p><strong>En CABA Y GBA</strong></p>
            <ul>
              <li><i class="bx bx-check"></i> Retiro, transporte y disposición final de residuos líquidos</li>
              <li><i class="bx bx-check"></i> Tratamiento de residuos especiales y no especiales</li>
              <li><i class="bx bx-check"></i> Emisión de certificado de tratamiento de residuos</li>
            </ul>
            <a href="https://wa.me/+5491162000180?text=%C2%A1Hola%21%20Bienvenido%20a%20La%20Victoria%2C%20Transporte%20de%20Residuos.%20Ingresa%20tu%20consulta%20y%20pronto%20ser%C3%A1s%20atendido%20por%20uno%20de%20nuestros%20asesores."
              target="_blank" class="get-started-btn">Consultar</a>
          </div>

          <div class="col-lg-4 box"> <!-- featured -->
            <h2><strong>Destapación</strong></h2>
            <h4>Consultar precio</h4>
            <p><strong>En CABA Y GBA</strong></p>
            <ul>
              <li><i class="bx bx-check"></i> Desobstrucción industrial de cañerías cloacales</li>
              <li><i class="bx bx-check"></i> Limpieza hidrocinética de cañerías y desagües</li>
              <li><i class="bx bx-check"></i> Destapación electromecánica de las cañerias</li>
              <li><i class="bx bx-check"></i> Limpieza de columnas y bajadas en cañerías pluviales</li>
              <li><i class="bx bx-check"></i> Destapación de sumideros y colectores principales de los desagües</li>
              <li><i class="bx bx-check"></i> Destapación de cámaras sépticas y decantadores de residuos</li>
              <li><i class="bx bx-check"></i> Servicio de video inspección y diagnóstico de cañerías</li>

            </ul>
            <a href="https://wa.me/+5491162000180?text=%C2%A1Hola%21%20Bienvenido%20a%20La%20Victoria%2C%20Transporte%20de%20Residuos.%20Ingresa%20tu%20consulta%20y%20pronto%20ser%C3%A1s%20atendido%20por%20uno%20de%20nuestros%20asesores."
              target="_blank" class="get-started-btn">Consultar</a>
          </div>

          <div class="col-lg-4 box">
            <h2><strong>Retiro de Sólidos</strong></h2>
            <h4>Consultar precio</h4>
            <p><strong>En CABA Y GBA</strong></p>
            <ul>
              <li><i class="bx bx-check"></i> Retiro, transporte y disposición final de residuos sólidos peligrosos</li>
              <li><i class="bx bx-check"></i> Manifiesto de transporte</li>
              <li><i class="bx bx-check"></i> Certificado de disposición final</li>
              <li><i class="bx bx-check"></i> Personal capacitado para el manejo de residuos peligrosos</li>
            </ul>
            <a href="https://wa.me/+5491162000180?text=%C2%A1Hola%21%20Bienvenido%20a%20La%20Victoria%2C%20Transporte%20de%20Residuos.%20Ingresa%20tu%20consulta%20y%20pronto%20ser%C3%A1s%20atendido%20por%20uno%20de%20nuestros%20asesores."
              target="_blank" class="get-started-btn">Consultar</a>
          </div>

        </div>


        <div class="row no-gutters">

          <div class="col-lg-4 box">
            <h2><strong></strong>Desagote</strong></h3>
              <h4>Consultar precio</h4>
              <p><strong>En CABA Y GBA</strong></p>
              <ul>
                <li><i class="bx bx-check"></i> Desagotes de tanques cisternas</li>
                <li><i class="bx bx-check"></i> Desagote y limpieza de pozos de bombeo de aguas residuales</li>
                <li><i class="bx bx-check"></i> Hidrolavado de cámaras séticas con alta presión</li>
                <li><i class="bx bx-check"></i> Certificado de disposición final de los barros retirados</li>
                <li><i class="bx bx-check"></i> Personal capacitado para limpiezas profundas en cámaras sépticas</li>
              </ul>
              <a href="https://wa.me/+5491162000180?text=%C2%A1Hola%21%20Bienvenido%20a%20La%20Victoria%2C%20Transporte%20de%20Residuos.%20Ingresa%20tu%20consulta%20y%20pronto%20ser%C3%A1s%20atendido%20por%20uno%20de%20nuestros%20asesores."
                target="_blank" class="get-started-btn">Consultar</a>
          </div>

          <div class="col-lg-4 box">
            <h2><strong>Hidrolavado de Tanques</strong></h2>
            <h4>Consultar precio</h4>
            <p><strong>En CABA Y GBA</strong></p>
            <ul>
              <li><i class="bx bx-check"></i> Retiro de barros contaminados con hidrocarburos</li>
              <li><i class="bx bx-check"></i> Limpieza en decantadores y fosas de lavaderos</li>
              <li><i class="bx bx-check"></i> Hidrolavado de cámaras sépticas con alta presión</li>
              <li><i class="bx bx-check"></i> Certificado de disposición final de los barros retirados</li>
              <li><i class="bx bx-check"></i> Personal capacitado para limpiezas profundas</li>
            </ul>
            <a href="https://wa.me/+5491162000180?text=%C2%A1Hola%21%20Bienvenido%20a%20La%20Victoria%2C%20Transporte%20de%20Residuos.%20Ingresa%20tu%20consulta%20y%20pronto%20ser%C3%A1s%20atendido%20por%20uno%20de%20nuestros%20asesores."
              target="_blank" class="get-started-btn">Consultar</a>
          </div>

          <div class="col-lg-4 box">
            <h2><strong>Asesoría en Mantenimiento</strong></h2>
            <h4>Consultar precio</h4>
            <p><strong>En CABA Y GBA</strong></p>
            <ul>
              <li><i class="bx bx-check"></i> Reunión con equipo de asesoramiento de La Victoria</li>
              <li><i class="bx bx-check"></i> Visita de técnicos al establecimiento</li>
              <li><i class="bx bx-check"></i> Entrega de informe</li>
            </ul>
            <a href="https://wa.me/+5491162000180?text=%C2%A1Hola%21%20Bienvenido%20a%20La%20Victoria%2C%20Transporte%20de%20Residuos.%20Ingresa%20tu%20consulta%20y%20pronto%20ser%C3%A1s%20atendido%20por%20uno%20de%20nuestros%20asesores."
              target="_blank" class="get-started-btn">Consultar</a>
          </div>

        </div>


      </div>
    </section><!-- End Pricing Section -->


    <!-- ======= Why Us Section ======= -->
    <section class="why-us section-bg" data-aos="fade-up" date-aos-delay="200" id="proceso">
      <div class="container">

        <div class="section-title">
          <h2><br><br><strong>Nuestro Proceso</strong><br>Modernas Tecnologías</h2>
        </div>
        <p class="content_title">Ponemos a su disposición las más modernas tecnologías para brindar un servicio óptimo,
          seguro y eficiente. Camiones y maquinarias de última generación son nuestras herramientas para brindar un
          servicio de máxima calidad.</p>


        <div class="row">


          <div class="col-lg-6 d-flex flex-column justify-content-center p-5">

            <div class="container">
              <div>
                <h4 class=" title">
                  <p href="" style="display: flex; align-items: baseline;"><span class="number">1.</span>Recepción de
                    Pedido</p>
                </h4>
              </div>
              <p class="description">Recibimos mediante nuestras vías de comunicación las diferentes solicitudes de
                nuestros clientes.</p>
            </div>
            <div class="container">
              <div>
                <h4 class=" title">
                  <p href="" style="display: flex; align-items: baseline;"><span class="number">2.</span>Asesoría de
                    Cliente</p>
                </h4>
              </div>
              <p class="description">Asesoramos en base a la solicitud del cliente e indicamos el servicio que mejor se
                adapta a sus necesidades.</p>
            </div>
            <div class="container">
              <div>
                <h4 class=" title">
                  <p href="" style="display: flex; align-items: baseline;"><span class="number">3.</span>Visita Técnica
                    y Diagnóstico</p>
                </h4>
              </div>
              <p class="description">Realizamos la visita técnica y diagnosticamos gratuitamente en el lugar de trabajo.
              </p>
            </div>
            <div class="container">
              <div>
                <h4 class=" title">
                  <p href="" style="display: flex; align-items: baseline;"><span class="number">4.</span>Cotización</p>
                </h4>
              </div>
              <p class="description">Cotizamos en base a la información recabada y el tipo de trabajo a realizar.</p>
            </div>
            <div class="container">
              <div>
                <h4 class=" title">
                  <p href="" style="display: flex; align-items: baseline;"><span class="number">5.</span>Presupuesto</p>
                </h4>
              </div>
              <p class="description">Una vez enviado el presupuesto aguardamos confirmación por parte del cliente.</p>
            </div>
            <div class="container">
              <div>
                <h4 class=" title">
                  <p href="" style="display: flex; align-items: baseline;"><span class="number">6.</span>Pago</p>
                </h4>
              </div>
              <p class="description">Ponemos a disposición los distintos métodos de pago para hacer una transacción
                segura.</p>
            </div>
            <div class="container">
              <div>
                <h4 class=" title">
                  <p href="" style="display: flex; align-items: baseline;"><span class="number">7.</span>Servicio</p>
                </h4>
              </div>
              <p class="description"></p>En plazos y condiciones establecidas en las etapas anteriores, procedemos con
              el
              servicio.</p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!--   SECTIONNN QUE FALTAAAAAAAAA-->
    <section class="services">
      <div class="container">
        <div style="display: flex; flex-direction: column; align-items: center; padding-bottom: 20px;">
          <p class="text-primary" style="letter-spacing: 0.3em;">CUIDAMOS SU NEGOCIO</p>
          <h1 class="title1">COMPROMETIDOS CON EL MEDIO AMBIENTE</h1>
          <p class="content_title">Servicios La Victoria es una empresa familiar fundada por Sr. Juan Roberto Scozzino
            en el
            año 1950.</p>
          <br>
          <p class="content_title">Desde entonces, el trabajo en equipo, liderezgo en conocimiento, atención
            personalizada, seguridad y salud
            de
            nuestra gente, han sido nuestras principales fortalezas; aquellas que marcan la diferencia y nos posiciona
            como
            una empresa de garantía en el mercado y líder en Servicio de Transporte de Líquidos Peligrosos en Buenos
            Aíres.
          </p>
        </div>
      </div>

    </section>
    <!-- -->
    <!-- ======= RESTRUCTURIZAAAARRRRRRR Services Section ======= -->
    <section class="services">
      <div class="container">
        <div style="display: flex; flex-direction: column; align-items: center; padding-bottom: 20px;">
          <p class="text-primary" style="letter-spacing: 0.3em;">NUESTRO DIFERENCIAL</p>

          <h1 class="title1">PRESTAMOS SERVICIO PREMIUM</h1>
        </div>
        <div class="row">
          <div style="display: flex;
        justify-content: space-evenly; margin-top: 20px;
    margin-bottom: 20px;">


            <div class="col-md-6 col-lg-4 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
              <div class="icon-box icon-box-green">
                <div class="icon"><img src="../assets/img/5.png" width="70"></div>
                <h4 class="title"><a href="">Certificaciónes</a></h4>
                <p class="description">Extendemos certificado de disposición final de los líquidos retirados.</p>

              </div>
            </div>

            <div class="col-md-6 col-lg-4 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
              <div class="icon-box icon-box-green">
                <div class="icon"><img src="../assets/img/5.png" width="70"></div>
                <h4 class="title"><a href="">Expertos</a></h4>
                <p class="description">60 años de experiencia capacitándonos nos convierten en el equipo más capacitado
                  del mercado.</p>

              </div>
            </div>
          </div>
          <div style="display: flex;
       justify-content: space-evenly; margin-top: 20px;
    margin-bottom: 20px;">

            <div class="col-md-6 col-lg-4 d-flex align-items-stretch" data-aos="fade-up">
              <div class="icon-box icon-box-pink">
                <div class="icon"><img src="../assets/img/3.png" width="70"></div>
                <h4 class="title"><a href="">Medidas de Seguridad</a></h4>
                <p class="description">Todos nuestros trabajadores cumplen estrictos protocolos de seguridad.</p>
              </div>
            </div>

            <div class="col-md-6 col-lg-4 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
              <div class="icon-box icon-box-cyan">
                <div class="icon"><img src="../assets/img/4.png" width="70"></div>
                <h4 class="title"><a href="">Modernas Tecnologías</a></h4>
                <p class="description">Ponemos a disposición las más modernas tecnologías para brindar un servicio
                  óptimo, seguro y eficiente.</p>

              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

    <section style="text-align: center;" data-aos="fade-up" date-aos-delay="200">
      <div class="container">
        <h1>Cuidando el ambiente desde 1950</h1>
        <p class="d-inline-flex gap-1"
          style="border: 1px solid black;     border-radius: 5px; height: 35px;   width: 165px;   display: flex;   align-items: center;   justify-content: center;">
          <a href="https://wa.me/+5491162000180?text=%C2%A1Hola%21%20Bienvenido%20a%20La%20Victoria%2C%20Transporte%20de%20Residuos.%20Ingresa%20tu%20consulta%20y%20pronto%20ser%C3%A1s%20atendido%20por%20uno%20de%20nuestros%20asesores."
            target="_blank" style="color: blue;">
            Dudas? Click aquí
          </a>
        </p>
      </div>
    </section>





  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">

    <div class="footer-top">
      <div class="container">
        <div class="row" style="display: flex;  justify-content: space-evenly;   align-items: center;">
          <div class="col-lg-4 col-md-4 footer-contact">
            <h4>Consúltenos</h4>
            <p>
              Aguilar 2878 <br>
              Ciudad de Buenos Aires<br>
              Argentina<br><br>
              <strong>Teléfono:</strong> +54 11-4551-5191<br>
              <strong>Email:</strong> info@desagoteslavictoria.com.ar<br>
            </p>

          </div>

          <div class="col-lg-4 col-md-4 footer-contact">
            <p>
              <img src="../assets/img/logo-grande.png" class="img-fluid" style="    height: 200px;
width: 270px;">
            </p>
          </div>

        </div>
        <div class="footer-newsletter">
          <div class="container">
            <div class="row" style="display: flex;
                    justify-content: space-around;
                    align-items: flex-start;">
              <div class="col-lg-6">
                <form action="procesar-formulario.php" method="post">
                  <input id="correo" type="email" name="email" placeholder="Correo electrónico"><input type="submit"
                    value="Enviar">
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; <strong><span>Servicios La Victoria</span></strong></div>
      <div class="credits">
        TFM Code <a href="">Adway Solutions</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="../assets/vendor/aos/aos.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>

</body>

</html>
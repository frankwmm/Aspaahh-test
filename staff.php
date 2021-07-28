<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Staff</title>
  <link rel="stylesheet" type="text/css" href="bootstrap/bootstrap.min-lumen.css">
  <link rel="stylesheet" type="text/css" href="fontawesonme/css/font-awesome.css">
  <link rel="stylesheet" href="fancybox/dist/jquery.fancybox.min.css">
  <link href="home-styles.css" rel="stylesheet">
  <link rel="stylesheet" href="css/swiper-bundle.min.css"/>
  <link rel="stylesheet" href="css/staff-styles.css">
  <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
</head>
<body>
  
  <div class="container-staff1">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <div class="container-fluid">
        <a class="navbar-brand" href=""><img src="icon/logo.png" alt=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarColor01">
          <ul class="navbar-nav me-auto">
            <li class="nav-item">
              <a class="nav-link active" href="home.php">HOME
                <span class="visually-hidden">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="nosotros.php">NOSOTROS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="servicios.php">SERVICIOS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="staff.php">STAFF</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contactanos.php">CONTACTANOS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="productos.php">PRODUCTOS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="ayuda.php">AYUDA</a>
            </li>
          </ul>
          <form class="nav-item">
            <button type="button" class="btn btn-outline-dark" style="margin: 2px">Unirse</button>
            <button type="button" class="btn btn-outline-secondary">Iniciar Sesion</button>
            <a href="" style="margin: 15px"><img src="icon/user.png"></a>
          </form>
        </div>
      </div>
    </nav>
  </div>

  <br>
  <div></div>
  <div class="conte navbar-expand-lg navbar-dark bg-primary container-fluid">
    <div class="container-staff1 navbar-collapse  ">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <select name="distrito">
          <option>DISTRITOS</option>
          <option>Cabana</option>
          <option>San Miguel</option>
          <option>Cabanillas</option>
          <option>Juliaca</option>
          <option>Caaracoto</option>
          </select>
        </li>
        <li class="nav-item">
          <select name="comunidades">
          <option>COMUNIDADES</option>
          <option>Lima</option>
          <option>Arequipa</option>
          <option>Puno</option>
          </select>
        </li>
        <li class="nav-item">
          <select name="staffysocio">
          <option>SOCIO</option>
          <option>Lima</option>
          <option>Arequipa</option>
          <option>Puno</option>
          </select>
        </li>
        <li class="nav-item">
          <a href="#"><i class="fas fa-user-check"></i></a>
        </li>
      </ul>
        <form class="d-flex">
          <input class="form-control me-sm-2" type="text" placeholder="Search">
          <button class="btn btn-secondary my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
        </form>
    </div>
  </div>

  <br>


  <div class="container-staff3">
    
    <div class="contenedorStaff">
      <div class="swiper-container mySwiper" >
        <div class="swiper-wrapper" >
          <div class="swiper-slide">
            <a href=""><img src="https://swiperjs.com/demos/images/nature-1.jpg" /></a>
          </div>
          <div class="swiper-slide">
            <a href=""><img src="https://swiperjs.com/demos/images/nature-2.jpg" /></a>
          </div>
          <div class="swiper-slide">
            <a href=""><img src="https://swiperjs.com/demos/images/nature-3.jpg" /></a>
          </div>
          <div class="swiper-slide">
            <a href=""><img src="https://swiperjs.com/demos/images/nature-4.jpg"/></a>
          </div>
          <div class="swiper-slide">
            <a href=""><img src="https://swiperjs.com/demos/images/nature-5.jpg" /></a>
          </div>
          <div class="swiper-slide">
            <a href=""><img src="https://swiperjs.com/demos/images/nature-6.jpg" /></a>
          </div>
          <div class="swiper-slide">
            <a href=""><img src="https://swiperjs.com/demos/images/nature-7.jpg" /></a>
          </div>
          <div class="swiper-slide">
            <a href=""><img src="https://swiperjs.com/demos/images/nature-8.jpg" /></a>
          </div>
          <div class="swiper-slide">
            <a href=""><img src="https://swiperjs.com/demos/images/nature-9.jpg" /></a>
          </div>
        </div>
        <div class="swiper-pagination"></div>
      </div>

      <!-- Swiper JS -->
      <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

      <!-- Initialize Swiper -->
      <script>
        var swiper = new Swiper(".mySwiper", {
          effect: "coverflow",
          grabCursor: true,
          centeredSlides: true,
          slidesPerView: "auto",
          coverflowEffect: {
            rotate: 50,
            stretch: 0,
            depth: 100,
            modifier: 1,
            slideShadows: true,
          },
          pagination: {
            el: ".swiper-pagination",
          },
        });
      </script>
    </div>
  </div>


  <div class="container-staff4">
    <div class="cola">
      <div class="ultima">
        <div class="telefono">
          <h5>TELÉFONO <br> </h5>961040551
        </div><br>
        <div class="mail">
          <h5>MAIL <br> </h5><a href="https://mail.google.com/mail/u/0/?fs=1&tf=cm&source=mailto&to=aspaahpuno@gmail.com">aspaahpuno@gmail.com</a> 
        </div>
      </div>
        <div class="ultima">
        <div class="direccion">
          <h5>DIRECCIÓN <br> </h5><a href="https://www.google.com/maps/dir/-15.4994716,-70.1336728/-15.5565323,-70.2393892/@-15.5155182,-70.2543738,12z/data=!3m1!4b1!4m4!4m3!1m1!4e1!1m0" target="_BLANK">Salida a Arequipa Km.
                15 - Yocará Sector Ilo Ilo 51 Juliaca, Perú</a> 
        </div>
        <div class="oon">
          <div class="aba"><a href="https://www.instagram.com/" target="_BLANK"><i class="fab fa-instagram"></i></a></div>
          <div class="aba"><a href="https://web.facebook.com/Aspaah-Puno-101325701733061"  target="_BLANK"><i class="fab fa-facebook"></i></a></div>
          <div class="aba"><a href="#" target="_BLANK"><i class="fas fa-map-marker-alt"></i></a></div>
          <div class="aba"><a href="#"  target="_BLANK"><i class="fab fa-whatsapp"></i></a></div>
          <div class="aba"><a href="#"  target="_BLANK"><i class="fal fa-envelope-square"></i></a></div>
        </div>
      </div>
      <div class="ultima">
        <img src="icon/logo.png" alt="">
      </div>
    </div>
  </div>


  <div class="container-staff5">
    <hr style="color: white" class="my-0"/>
        <div class="text-center p-2 text-white" style="background-color: rgba(0, 0, 0, 0.2);">
            Copyright © 2021 Todos los Derechos Reservados. Creado por
            <a class="text-white" href="https://mdbootstrap.com/">Aspaah.com</a>
        </div>
  </div>


<script src="bootstrap/jquery.min.js"></script>
<script src="bootstrap/bootstrap.bundle.min.js"></script>
<script src="fancybox/dist/jquery.fancybox.min.js"></script>
<script src="bootstrap/jquery.validate.min.js"></script>
<script src="scripts.js"></script>
<script src="scripts/swiper-bundle.min.js"></script>


</body>
</html>
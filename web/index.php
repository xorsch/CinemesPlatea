<!-- head.php -->
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cineclub Platea</title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://getbootstrap.com/docs/5.3/assets/css/docs.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
  <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"> -
  <link rel="stylesheet" href="css/grid.css">

  <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script defer src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script defer src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script defer src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <!-- <script defer src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->
  <script defer src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <script defer src="javascript/main.js"></script>

</head>

<!-- fi de head.php -->
<body>

  <!-- seccio header.php -->
  <header>
    <div class="menu">
      <a href="index.html">
        <img class="imgmenu" src="img/Logo.png" alt="logo"></a>

        <div class="pmenu">
          <p><a href="#about-us" class="nav-link">Sobre nosotros</a></p>
          <p><a href="#unete" class="nav-link">Únete a nuestro club</a></p>
          <p><a href="#footer" class="nav-link">Contacto</a></p>
        
          <!-- Només si no ha iniciat sessió -->
          <p><!-- <a href="user.html" class="nav-link">Acceso a miembros</a>
                                class="btn btn-primary" --> 
          <input type="button" class="nav-link" 
              data-bs-toggle="modal" data-bs-target="#loginModal" data-bs-whatever="@getbootstrap" value="Acceso a miembros">
        </p>

        <!-- Només si ha iniciat sessió -->
        <!-- Plenar amb dades de la taula -->
        <!--  
        <div class="dropdown">
          <div class="profile-dropdown">
            <div onclick="toggle()" class="profile-dropdown-btn">
              <div class="profile-img">
                <i class="fa-solid fa-circle"></i>
              </div>
                <i class="fa-solid fa-angle-down"></i>
              -->
              <!-- nom del membre -->
              <!-- 
              <span>Victoria</span>
            </div>
            <div class="profile-dropdown-list">
              <div>
                <p class="profile-dropdown-list-item">
                  <a href="#">
                    <i class="fa-regular fa-user"></i>
                    Edita perfil
                  </a>
                </p>
              </div>
              <div>
                <p class="profile-dropdown-list-item">
                  <a href="#">
                    <i class="fa-solid fa-sliders"></i>
                    Ajustes
                  </a>
                </p>
              </div>
              <div>
                <p class="profile-dropdown-list-item">
                  <a href="#">
                    <i class="fa-solid fa-arrow-right-from-bracket"></i>
                    Cerrar Sesión
                  </a>
                </p>
              </div>
            </div>
          </div>
       </div>
        -->
        <!-- Toggle theme
          <div class="switcher">
            <label class="switch">
              <input type="checkbox" id="checkbox">
              <span class="slider"></span>
            </label>
          </div> -->

      </div> 

    </div>

  </header>
  <!-- fin de head.php -->

  <!-- seccion de bienvenida welcome.php -->
  <section id="welcome">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <table>
            <tr>
              <td class="Welcome">
                <h2 class="W-h2">
                  Bienvenidas y bienvenidos al espacio online de Cineclub
                  Platea.
                </h2>
                <p class="W-P">
                  No sólo proyectamos películas, creamos experiencias en torno
                  al arte cinematográfico, ofreciendo en este espacio virtual
                  podcast, talleres y charlas en streaming. Nuestra
                  programación se compone de proyecciones de cuidad selección,
                  abarcando desde clásicos atemporales hasta las últimas joyas
                  del cine contemporáneo, ofreciendo una diversidad que
                  refleja la riqueza de las narrativas cinematográficas,
                  talleres con profesionales consagrados y debates y charlas
                  sobre temas candentes relacionados con el arte y la
                  industria cinematográfica
                </p>
              </td>
            </tr>
          </table>
        </div>
      </div>
    </div>
  </section>
  <!-- fi seccio de benvinguda -->

  <!-- seccio sobre nosaltres -->
  <section class="about-us" id="about-us">
    
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4"></div>
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
          <h2 class="abouth1">Sobre nosotros</h2>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4"></div>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6" id="t-w">
          <p class="About-p">
            Desde su creación en 1993, Cineclub Platea ha sido un punto de
            encuentro para los amantes del séptimo arte. Cineclub Platea nació
            de la visión compartida de un grupo apasionado de cinéfilos que
            buscaban ir más allá de la simple proyección de películas.
            Inspirados por la rica tradición cinematográfica de Barcelona,
            decidieron crear un espacio donde la magia del cine se fusionara
            con la energía única de la ciudad. A lo largo de las temporadas,
            Platea se ha convertido en un marco de confluencia de aquellos que
            buscan algo más que una sesión de cine, incidiendo en la
            realización de talleres, charlas y debates en torno al universo
            cinematográfico, construyendo una comunidad de cinéfilos que
            comparten la misma pasión por las historias bien contadas.
            Cineclub Platea invita a todos a unirse a nosotros en esta
            historia continua, donde cada fotograma es una oportunidad para
            descubrir, aprender y disfrutar.
          </p>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6" id="A-img">
          <div class="swiper mySwiper">
            <div class="slide-content-about-us">
              <div class="swiper-wrapper">
                
                <!-- Una funcio -->
                <!-- img amb el mateix id 3cops?! -->
                <div class="swiper-slide">
                  <img class="image-about-us" src="img/cinema-02.jpeg" alt="Sala platea">
                </div>
                <div class="swiper-slide">
                  <img class="image-about-us" src="img/cinema-03.jpeg" alt="Sala platea">
                </div>
                <div class="swiper-slide">
                  <img class="image-about-us" src="img/cinema-04.jpeg" alt="Sala platea">
                </div>
                <div class="swiper-slide">
                  <img class="image-about-us" src="img/cinema-05.jpeg" alt="Sala platea">
                </div>

              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>
  <!-- fi seccio sobre nosaltres -->


  <!-- seccio de subscripcio -->
  <section id="unete">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2"></div>
        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8" id="t-unete">
          <h2 class="abouth1">Únete a nuestro club</h2>
          <p>
            Si quieres disfrutar de las ventajas de pertenecer al Cineclub
            Platea, puedes elegir entre estas tres modalidades de suscripción
          </p>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2"></div>
      </div>
      
      <!-- class="swiper-ruchi" -->
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="slide-container swiper">
              <div class="slide-content">

                <div class="card-wrapper swiper-wrapper">

                  <!-- producte 1 -->
                  <div class="card swiper-slide">
                    <div class="image-content">
                      <span class="overalay" id="cinefilo"></span>
                      <div class="card-image"></div>
                    </div>
                    <div class="card-content">
                      <h2 class="Name">Club Cinéfilo</h2>
                      <h3 class="subtitle">Precio: 60 € / año</h3>
                      <p class="description">
                        Acceso ilimitado a todas las proyecciones, incluyendo
                        estrenos exclusivos. Asientos preferenciales en las
                        proyecciones. Acceso a los talleres y podcast de
                        nuestra web. Descuentos significativos en cines
                        asociados. Invitaciones exclusivas a preestrenos y
                        encuentros con cineastas.
                      </p>
                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#registreModal">
                        Hazte socio
                      </button>
                    </div>
                  </div>

                  <!-- producte 2 -->
                  <div class="card swiper-slide">
                    <div class="image-content">
                      <span class="overalay" id="amigo"></span>

                      <div class="card-image"></div>
                    </div>
                    <div class="card-content">
                      <h2 class="Name">Club Amigo:</h2>
                      <h3 class="subtitle">Precio: 30 € / año</h3>
                      <p class="description">
                        Descuento en todas las proyecciones regulares del año,
                        charlas y talleres. Invitaciones prioritarias a
                        eventos especiales. Acceso a los talleres y podcast de
                        nuestra web.
                      </p>
                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#registreModal">
                        Hazte socio
                      </button>
                    </div>
                  </div>

                  <!-- producte 3 -->
                  <div class="card swiper-slide">
                    <div class="image-content">
                      <span class="overalay" id="pigmalion"></span>

                      <div class="card-image"></div>
                    </div>
        
                    <div class="card-content">
                      <h2 class="Name">Club Pigmalión</h2>
                      <h3 class="subtitle">
                        (solo para estudiantes): Precio: 15 € / año
                      </h3>
                      <p class="description">
                        Acceso a proyecciones comerciales regulares a precio
                        reducido en Cines Odeón. Acceso exclusivo a sesiones
                        de debate y análisis cinematográfico conducidas por
                        profesionales del cine. Acceso gratuito a charlas y
                        talleres. Oportunidades de voluntariado y
                        participación activa en la programación del cineclub.
                      </p>
                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#registreModal">
                        Hazte socio
                      </button>
                    </div>
                  </div>
  

                </div>
              </div>

              <div class="swiper-button-next"></div>
              <div class="swiper-button-prev"></div>
              <div class="swiper-pagination"></div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- fi seccio de subscripcio -->


  <!-- seccions de comentaris -->
  <section class="section-area">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <h2 class="abouth1">Dejanos tu comentario</h2>
        <p class="About-p">que sea bueno perro te estaremos vigilando</p>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <div class="comment-area">
            <form action="#Comentario.php">
              <div class="coment">
                <textarea name="comentArea" id="comentArea" cols="100" rows="10"></textarea>
                <div class="coment-button">
                  <input class="button" type="submit" id="comment-btn" value="apply">
                  <input class="button" type="reset" id="reset-btn" value="reset">
                </div>
              </div>
            </form>
          </div>

          <!-- Boton flotante STT-->
          <!-- part boto.php -->
          <div id="scrolltotop_parent">
            <svg id="Capa_1" data-name="Capa 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 592.34 592.34">
              <defs>
                <style>
                  .cls-1 {
                    fill: none;
                    stroke: #000;
                    stroke-miterlimit: 10;
                    stroke-width: 20px;
                  }
                </style>
              </defs>
              <polygon
                points="123.76 359.55 98.77 334.56 296.18 137.15 493.59 334.56 468.59 359.55 296.18 187.14 123.76 359.55">
              <path class="cls-1"
                d="M10,296.17h0C10,138.12,138.12,10,296.17,10h0c158.05,0,286.17,128.12,286.17,286.17h0c0,158.05-128.12,286.17-286.17,286.17h0C138.13,582.34,10,454.22,10,296.17Z">
            </svg>
          </div>
          <!-- part boto.php -->

        </div>
      </div>
    </div>

    <!-- comentarios ruchi -->
    <!-- seccio de comentaris dels usuaris -->
    <div class="container">
      <div class="row">
        <div class="cols-xs-12 col-sm-12 col-md-12 col-lg-12">
          <div class="slider owl-carousel">
      <div class="card">
        <div class="img">
          <img src="#" alt="">
        </div>
        <div class="content">
          <div class="title">
            Daniel Montes Peris</div>
          <div class="sub-title">
            Cinefilo veterano</div>
          <p>
            ¡Platea es el lugar donde el cine cobra vida! Una experiencia cinematográfica única que nos sumerge en un
            mundo de...</p>
        </div>
      </div>

      <div class="card">
        <div class="img">
          <img src="#" alt="">
        </div>
        <div class="content">
          <div class="title">
            Portgas. D. Ace</div>
          <div class="sub-title">
            Gol. D. Roger Son</div>
          <p>
            ¡Platea es mi refugio cinéfilo! Siempre encuentro las películas más fascinantes y una comunidad apasionada
            por el séptimo arte...</p>
        </div>
      </div>

      <div class="card">
        <div class="img">
          <img src="#" alt="">
        </div>
        <div class="content">
          <div class="title">
            Katsuhiro Otomo</div>
          <div class="sub-title">
            Mangaka God</div>
          <p>
            En Platea, cada proyección es un viaje emocionante. ¡No hay mejor manera de disfrutar del cine que rodeado
            de amigos y amantes del cine!...</p>
        </div>
      </div>


      <div class="card">
        <div class="img">
          <img src="#" alt="">
        </div>
        <div class="content">
          <div class="title">
            Gwyn, Lord of cinder</div>
          <div class="sub-title">
            Señor de la primera llama</div>
          <p>
            Platea es el cineclub que alimenta mi pasión por el cine. Con una selección de películas variada y
            estimulante, siempre encuentro algo...</p>
        </div>
      </div>

      <div class="card">
        <div class="img">
          <img src="#" alt="">
        </div>
        <div class="content">
          <div class="title">
            Goku el supersayajin</div>
          <div class="sub-title">
            Protagonista Bola de drac</div>
          <p>
            En Platea, el cine se convierte en una experiencia compartida. Cada película nos invita a reflexionar,
            debatir y conectarnos con otros...</p>
        </div>
      </div>
    </div>
    <!-- ?? final de la seccio de comentaris ???-->


        </div>
      </div>
    </div>
    
    <!--fin comentarios  -->
  </section>


  <!-- seccio dialog modal -->
  <!-- 
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Título del Modal</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>Texto del cuerpo del modal.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary">Guardar cambios</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>
  -->


    <!-- Modal subscripció -->    
    <div class="modal fade" id="registreModal"
          aria-labelledby="exampleModalToggleLabel" tabindex="-1" style="display: none;" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Subscripció 1 de 2</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">


    <!-- Primer form  -->        
    <form class="row g-3">
 
      <div class="col-6">
        <label for="nom" class="form-label">Nom</label>
        <input type="text" class="form-control" id="nom" placeholder="Perico">
      </div>

      <div class="col-6">
        <label for="cognom" class="form-label">Cognom</label>
        <input type="text" class="form-control" id="cognom" placeholder="De los Palotes">
      </div>
      
      <div class="col-md-12">
        <label for="correu1" class="form-label">Correu</label>
        <input type="email" class="form-control" id="correu1">
      </div>
      
      <div class="col-md-12">
        <label for="correu2" class="form-label">Correu comfirmació</label>
        <input type="email" class="form-control" id="correu2">
      </div>
    
      <div class="col-md-12">
        <label for="carrer" class="form-label">Adressa postal</label>
        <input type="text" class="form-control" id="carrer">
      </div>

      <div class="col-md-12">
        <label for="pass" class="form-label">Password</label>
        <input type="password" class="form-control" id="pass">
      </div>
   
   
      <div class="col-12">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" id="condicions1" checked>
          <label class="form-check-label" for="condicions1">
            Marcant la caslla acceptes el dret a "pernada"
          </label>
        </div>
      </div>

     <!--
       <div class="col-12">
        <button type="submit" class="btn btn-primary">Sign in</button>
      </div>
     -->
    </form>
 

          </div>
          <div class="modal-footer">
            <button class="btn btn-primary" data-bs-target="#registraTarjeta" data-bs-toggle="modal">Següent</button>
          </div>

        </div>
      </div>
    </div>

    <!-- segon pass -->
    <!-- registrar tarjerta -->
    <div class="modal fade" id="registraTarjeta" 
          aria-labelledby="exampleModalToggleLabel2" tabindex="-1" style="display: none;" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalToggleLabel2">Subscripcio 2 de 2</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
          

        
    <form class="row g-3">
      
      <div class="col-md-6">
        <label for="operador1" class="form-label">Operador</label>
        <select id="operador1" class="form-select">
          <option >visa
          <option >mastercard
          <option >electron
        </select>
      </div>
      
      <div class="col-6">
        <label for="operador2" class="form-label">Operador 2</label>
        <input type="text" class="form-control" id="operador2" placeholder="Operador2">
      </div>
     
      <div class="col-12">
        <label for="bintarjeta" class="form-label">Bin</label>
        <input type="text" class="form-control" id="bintarjeta" placeholder="0000-0000-0000-0000">
      </div>

      <div class="col-6">
        <label for="datacaducitat" class="form-label">Expira</label>
        <input type="text" class="form-control" id="datacaducitat" placeholder="08/32">
      </div>
      
      <div class="col-6">
        <label for="cvv" class="form-label">CVV</label>
        <input type="text" class="form-control" id="cvv" placeholder="000">
      </div>

      <div class="col-md-12">
        <label for="codipostal" class="form-label">Codi Postal</label>
        <input type="number" class="form-control" id="codipostal">
      </div>
 
      <div class="col-12">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" id="condicions2">
          <label class="form-check-label" for="condicions2">
            Accepta que has de pagar 1500€ per una cullera foradada.
          </label>
        </div>
      </div>
    
    </form>

          </div>
          
          <!-- aquest botó serveix per enviar les dades al usuari -->
          <div class="modal-footer">

            <!-- target #exampleModalToggle -->
            <button class="btn btn-primary" data-bs-target="#registreModal" data-bs-toggle="modal">Anterior</button>
            <button type="submit" class="btn btn-primary">Subscriure's</button>
          
          </div>

        </div>
      </div>
    </div>
    <!-- fi modal -->

    <!--    <button class="btn btn-primary" data-bs-target="#registraSubscripcio" data-bs-toggle="modal">Open first modal</button>
    -->
 


    <!-- modal per iniciar sessio -->
    <!-- id exampleModal -->

    <!--
    <button type="button" class="btn btn-primary" 
      data-bs-toggle="modal" data-bs-target="#loginModal" data-bs-whatever="@getbootstrap">Acces</button>
    -->

    <!-- modal per iniciar sessio -->
    <div class="modal fade" id="loginModal" 
      tabindex="-1" aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Acceso a miembros</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>

          <!-- form per iniciar sessió -->
          <form action="login.php" method="POST">
          <div class="modal-body">
            
              <div class="form-floating mb-3">
                <input type="email" class="form-control" id="logemail" placeholder="cinefilo@cineclub.cat">
                <label for="logemail">Email</label>
              </div>      
              
              <div class="form-floating">
                <input type="password" class="form-control" id="logpass" placeholder="Password">
                <label for="logpass">Password</label>
              </div>
          </div>
          
          <div class="modal-footer">
            <input type="submit" class="btn btn-primary" value="acceder">
          </div>

        </form>
        <!-- fi del form -->
        
        </div>
      </div>
    </div>
 


  <!-- seccio footer.php -->
  <footer id="footer">
    <div class="container">
      <div class="row" id="fotter">
        <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2"></div>
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
          <h1>Cineclub Platea</h1>
          <p><b>Dirección: </b>Carrer de la Filmació, 123, 08001 Barcelona</p>
          <p>
            <a class="link" href="mailto:info@cineclubplatea.cat"><b>Correo Electrónico: </b>
              info@cineclubplatea.cat</a>
          </p>
          <p><b>Teléfono: </b>555 123 456</p>
          <p>
            <a class="link" href="http://www.cineclubplatea.cat">
              <b>Sitio Web: </b>www.cineclubplatea.cat</a>
          </p>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
          <h1>Redes Sociales</h1>
          <p><b>Facebook </b> @cineclubplatea</p>
          <p><b>Instagram </b>@cineclubplatea</p>
          <p><b>Twitter </b>@cineclubplatea</p>
          <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2"></div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <p class="copyright">
            Maquetación y diseño del Landing Page Roger Artero Martínez sujeto
            bajo Creative Commons Reconocimiento, Compartir igual, No
            Comercial 3.0 (CC BY NC-SA 3.0)<br>
            Fotografías, logo y textos,
            propiedad Agrupació Fotográfica Castelló sujeto bajo licencia
            Creative Commons Reconocimiento, Compartir igual 4.0 (CC BY -SA 4.0)
          </p>
        </div>
      </div>
    </div>
  </footer>
 
  <script defer src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script defer src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script defer src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script defer src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script defer src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <script defer src="javascript/main.js"></script>


</body>

</html>
<!-- fi footer.php -->

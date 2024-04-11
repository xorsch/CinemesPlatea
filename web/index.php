<!DOCTYPE html>
<html lang="es" class="y">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cineclub Platea</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"/>
    <link rel="stylesheet" href="css/grid.css" />

    <title>Bootstrap Example</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
 
  </head>

  <body>

    <!-- Transformaar per quadrar amb header.php --> 
    <header>
      <div class="menu">
        <a href="index.php">
          <img class="imgmenu" src="img/Logo.png" alt="logo"/></a>

        <div class="pmenu">
          <p><a href="#about-us" class="nav-link">Sobre nosotros</a></p>
          <p><a href="#unete" class="nav-link">Únete a nuestro club</a></p>
          <p><a href="#footer" class="nav-link">Contacto</a></p>
          <p><a href="#filibuster" class="nav-link">Acceso a miembros</a></p> 
          
          <p><a type="button" class="btn btn-primary" \
              data-bs-toggle="modal" data-bs-target="#filibuster" data-bs-whatever="@getbootstrap">Enllaç a acces</a></p>
          
          <?php //include "drop-menu.php" ?>

        </div>
      </div>
    </header>

   <?php include "modal-access.php" ?>
   <!-- -->

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

    <section class="about-us" id="about-us">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4"></div>
          <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
            <h1 class="abouth1">Sobre nosotros</h1>
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
                  <div class="swiper-slide">
                    <img
                      id="image-about-us"
                      src="../web/img/cinema-02.jpeg"
                      alt="Sala platea"
                    />
                  </div>
                  <div class="swiper-slide">
                    <img
                      id="image-about-us"
                      src="../web/img/cinema-03.jpeg"
                      alt="Sala platea"
                    />
                  </div>
                  <div class="swiper-slide">
                    <img
                      id="image-about-us"
                      src="../web/img/cinema-04.jpeg"
                      alt="Sala platea"
                    />
                  </div>
                  <div class="swiper-slide">
                    <img
                      id="image-about-us"
                      src="../web/img/cinema-05.jpeg"
                      alt="Sala platea"
                    />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="unete">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2"></div>
          <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8" id="t-unete">
            <h1 class="abouth1">Únete a nuestro club</h1>
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
                        <button
                          type="button"
                          class="btn btn-primary"
                          data-toggle="modal"
                          data-target="#exampleModal"
                        >
                          Hazte socio
                        </button>
                      </div>
                    </div>

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
                        <button
                          type="button"
                          class="btn btn-primary"
                          data-toggle="modal"
                          data-target="#exampleModal"
                        >
                          Hazte socio
                        </button>
                      </div>
                    </div>

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
                        <button
                          type="button"
                          class="btn btn-primary"
                          data-toggle="modal"
                          data-target="#exampleModal"
                        >
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

    
    <section class="section-area">

      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <h1 class="abouth1">Dejanos tu comentario</h1>
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
                    <input class="button" type="submit" alt="Boton_submit" id="comment-btn" value="apply"/>
                    <input class="button" type="reset"  alt="Boton_reset"  id="reset-btn"   value="reset">
                  </div>
                </div>
              </form>
            </div>

          </div>
        </div>
      </div>
    </section>

    <?php include "boton.php"; ?>        
    <?php include "footer.php"; ?>
    
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="../web/javascript/main.js"></script>
  </body>
</html>

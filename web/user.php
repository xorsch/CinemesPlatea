<!-- seccio head.php -->
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cineclub Platea</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" /> -->
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.13.2/themes/smoothness/jquery-ui.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/grid.css" />

    <script defer src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/sortablejs@latest/Sortable.min.js"></script>
    <script defer src="../web/javascript/main.js"></script>
  
  </head>

  <body>
  <!-- fi seccio head.php -->

    <!-- seccio header.php -->
    <header>
      <div class="menu">
        <a href="index.html"
          ><img class="imgmenu" src="img/Logo.png" alt="logo" />
        </a>

        <!-- seccio menu -->
        <div class="pmenu">
          <p><a href="index.html" class="nav-link">Sobre nosotros</a></p>
          <p><a href="index.html" class="nav-link">Únete a nuestro club</a></p>
          <p><a href="index.html" class="nav-link">Contacto</a></p>

          <!-- hauria de ser invisible si te una sesió iniciada-->
          <p><a href="user.html" class="nav-link">Acceso a miembros</a></p>

          <!-- menu de sessio  -->
          <div class="dropdown">
            <div class="profile-dropdown">
              <div onclick="toggle()" class="profile-dropdown-btn">
                <div class="profile-img">
                  <i class="fa-solid fa-circle"></i>
                </div>
                <i class="fa-solid fa-angle-down"></i>
                <span>Victoria</span>
              </div>
              <div class="profile-dropdown-list">
                <div>
                  <p class="profile-dropdown-list-item">
                    <a href="#">
                      <i class="fa-regular fa-user"></i>
                      Edit Profile
                    </a>
                  </p>
                </div>
                <div>
                  <p class="profile-dropdown-list-item">
                    <a href="#">
                      <i class="fa-solid fa-sliders"></i>
                      Settings
                    </a>
                  </p>
                </div>
                <div>
                  <p class="profile-dropdown-list-item">
                    <a href="#">
                      <i class="fa-solid fa-arrow-right-from-bracket"></i>
                      Log out
                    </a>
                  </p>
                </div>
              </div>
            </div>
          </div>
          <!-- fi menu sessio -->

        </div>
      </div>
    </header>
    <!-- fi seccio header.php -->


    <!-- seccio ajustaments/settings -->
    <section class="user">
      <div class="container"  id="sortable-cards">
        <div class="row" id="datos-user">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-2"></div>
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-2">
            <div class="tarjeta-user" id="img-user">
              <div class="img-cont">
                <div class="img-user"></div>
              </div>
            </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
            <div class="tarjeta-user">
              <div class="h-user">
                <h1>Paco Mer y Alba Lazo</h1>
              </div>
            </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4"></div>
        </div>

        <div class="row">
         
          <!-- //SELECT * FROM Membres WHERE email=''  -->
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
            <div class="tarjeta-user" draggable="true">
              <div class="tarj-h">
                <h2>Detalles de usuario</h2>
              </div>
              <div class="tarj-p">
                <p><span class="user-detail">Nombre:</span> Paco</p>
                <p><span class="user-detail">Apellidos:</span> Lucia y Alcorcon</p>
                <p><span class="user-detail">Email:</span> Paco</p>
                <p><span class="user-detail">Dirección:</span> Calle los melocotoneros</p>
                <p><span class="user-detail">Telefono:</span> +34 666 666 666</p>
              </div>
            </div>
          </div>

          <!-- //SELECT * FROM MembreProducte / +Tarjeta -->
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
            <div class="tarjeta-user" draggable="true">
              <div class="tarj-h">
                <h2>Membresia</h2>
              </div>
              <div class="tarj-p">
                <p><span class="user-detail">Facturación a traves de: </span>Cineclub Platea S.A </p>
                <p><span class="user-detail">Plan: </span> Cinefilo</p>
                <p><span class="user-detail">Precio: </span> 9,99€</p>
                <p><span class="user-detail">Metodo de pago: </span> Visa terminada en 1234</p>
                <p><span class="user-detail">Proxima facturación: </span> 4 Mayo 2024</p>
              </div>
            </div>
          </div>

        </div>

        <!-- //SELECT * FROM MembresGustos WHERE idMembre='' -->
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
            <div class="tarjeta-user" draggable="true">
              
              <div class="tarj-h">
                <h2>Ajustes</h2>
              </div>

              <div class="tarj-notificaciones">
              
                <!-- bucle de notif ? -->
                <div class="notif">
                  <p><span class="notif-detail">Cambiar tema: </span></p>
                  <div class="switcher">
                    <label class="switch">
                      <input type="checkbox"/>
                      <span class="slider"></span>
                    </label>
                  </div>
                </div>

                <div class="notif">
                  <p><span class="notif-detail">Correos Cineclub Platea: </span></p>
                  <div class="switcher">
                    <label class="switch2">
                      <input type="checkbox" />
                      <span class="slider"></span>
                    </label>
                  </div>
                </div>
                
                <div class="notif">
                  <p><span class="notif-detail">Newslatter: </span></p>
                  <div class="switcher">
                    <label class="switch2">
                      <input type="checkbox" />
                      <span class="slider"></span>
                    </label>
                  </div>
                </div>
                
                <div class="notif">
                  <p><span class="notif-detail">Cookies de rendimiento: </span></p>
                  <div class="switcher">
                    <label class="switch2">
                      <input type="checkbox"/>
                      <span class="slider"></span>
                    </label>
                  </div>
                </div>
                
                <div class="notif">
                  <p><span class="notif-detail">Cookies funcionales: </span></p>
                  <div class="switcher">
                    <label class="switch2">
                      <input type="checkbox"/>
                      <span class="slider"></span>
                    </label>
                  </div>
                </div>
                <!-- fi de bucle notif -->
              
              </div>
            </div>
          </div>

          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
            <div class="tarjeta-user" draggable="true">
              <div class="tarj-h">
                <h2>Privacidad y condiciones</h2>
              </div>
              <div class="tarj-p">
                <p>
                  <span> Aviso de Privacidad </span>
                  <br />
                  El presente aviso de privacidad se emite en cumplimiento de la
                  legislación aplicable en materia de protección de datos
                  personales y tiene como finalidad informarle sobre cómo
                  [Nombre de la Empresa], en adelante "La Empresa", recaba y
                  utiliza sus datos personales, así como los derechos que usted
                  tiene respecto a los mismos.
                </p>
              </div>
            </div>
          </div>

        </div>

        <div class="row" id="sortable-cards">
          
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
            <div class="tarjeta-user" draggable="true">
              <div class="tarj-h">
                <h2>Info</h2>
              </div>
              <div class="tarj-p">
                <p><span>Versión:</span></p>
                <p><span>Plataforma:</span></p>
                <p><span>Hora actual</span></p>
              </div>
            </div>
          </div>

          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6"></div>
        </div>
      </div>

    </section>
    <!-- fi seccio ajustaments? -->

    <!-- footer.php -->
    <footer id="footer">
      <div class="container">
        <div class="row" id="fotter">
          <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2"></div>
          
          <!-- div esquerra -->
          <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
            <h1>Cineclub Platea</h1>
            <p><b>Dirección: </b>Carrer de la Filmació, 123, 08001 Barcelona</p>
            <p><a class="link" href="mailto:info@cineclubplatea.cat">
               <b>Correo Electrónico: </b> info@cineclubplatea.cat</a></p>
            <p><b>Teléfono: </b>555 123 456</p>
            <p><a class="link" href="http://www.cineclubplatea.cat">
                <b>Sitio Web: </b>www.cineclubplatea.cat</a></p>
          </div>
          
          <!-- div dreta -->
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
              bajo Creative Commons Reconocimiento, Compartir igual, No</p>
              Comercial 3.0 (CC BY NC - SA 3.0) 
            <p class="copyright">Fotografías, logo y textos,
              propiedad Agrupació Fotográfica Castelló sujeto bajo licencia
              Creative Commons Reconocimiento, Compartir igual 4.0 (CC BY - SA
              4.0)</p>
          </div>
        </div>
      </div
      >
    </footer>

    <!-- fi footer.php-->
  </body>
</html>

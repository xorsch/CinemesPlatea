<?php

$dsn = "mysql:host=127.0.0.1;dbname=cineclub;charset=utf8mb4";

$options = [
  PDO::ATTR_EMULATE_PREPARES   => false, // Disable emulation mode for "real" prepared statements
  PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, // Disable errors in the form of exceptions
  PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, // Make the default fetch be an associative array
];

try {
  $pdo = new PDO($dsn, "user", "user", $options);
} 
catch (Exception $e) {
  error_log($e->getMessage());
  exit('Something bad happened'); 
}


class Membres {
  public $idMembre;
  public $pass;
  public $nom;
  public $cognom;
  public $email;
  public $adreca;
  public $telefon;
};


$mail = $_POST["accemail"];
$pass = $_POST["accpassword"];

// Això hauria de ser una fucking funció com a mínim
$stringA  = "SELECT * FROM Membres WHERE email='$mail' AND pass='$pass'";
$membres  = $pdo->query( $stringA )->fetchAll(PDO::FETCH_CLASS, 'Membres');

foreach( $membres as $membre ){
  $mNom    = $membres['nom'];
  $mCognom = $membres['cognom'];
  $mEmail  = $membres['email'];
  $mAdreca = $membres['adreca'];
  $mTelefon = $membres['telefon'];
}


$mNom     = 'Laia';
$mCognom  = 'Correcuita';
$mEmail   = 'laia@gmail.com';
$mAdreca  = 'c/Me Cagu en Deu i sa Mare';
$mTelefon = '666 666 666';

class Gustos {
  public $idMembre;
  public $mail_info;
  public $mail_new;
  public $cookie_perm;
  public $cookie_func;
};

$idMembre = 3;
$consultaB = "SELECT * FROM MembreGustos WHERE MembreGustos.idMembre ='$idMembre'";
$gustos    = $pdo->query( $consultaB )->fetchAll(PDO::FETCH_CLASS, 'Gustos');



// Consulta  SELECT * FROM MembreProducte WHERE idMembre = 3;
Class producteContractat {
  public $idMembre;
  public $idProducte; 
  public $idTarjeta; 
  public $alta; 
  public $expira;
  public $autorenovacio;
  public $cobrat;
 }

// SELECT * FROM Tarjetes WHERE idTarjeta=3
Class Tarjeta {
  public $idTarjeta;
  public $entidad;
  public $titular;
  public $bin;
  public $caduca;
  public $cvv;
  public $activa;
};


include "head.php"; 
include "header.php" 

?>

    <section class="user">
      <div class="container" id="sortable-cards">
        <div class="row">
        
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3"></div>
        
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-1">
            <div class="tarjeta-user">
              <div class="img-cont">
                <div class="img-user"></div>
              </div>
            </div>
          </div>

          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-5">
            <div class="tarjeta-user">
              <div class="h-user">
              <h1><?php echo "Paco Mer Luzo"; ?></h1>
              </div>
            </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4"></div>
        </div>

        <div class="row">

          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
            <div class="tarjeta-user" draggable="true">
              <div class="tarj-h">
                <h2>Detalles de usuario</h2>
              </div>
              <div class="tarj-p">
                <!-- Que tal un lletra és grossa -->
                <!-- bucle 4 pa los amigos -->
                <p><span class="user-detail">Nombre: </span> <?php echo $mNom; ?> </p>
                <p><span class="user-detail">Apellidos: </span> <?php echo $mCognom; ?> </p>
                <p><span class="user-detail">Email: </span> <?php echo $mEmail; ?> </p>
                <p><span class="user-detail">Dirección: </span> <?php echo $mAdreca ?> </p>
                <p><span class="user-detail">Telefono: </span> <?php echo $mTelefon ?> </p>
              </div>
            </div>
          </div>

          
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
            <div class="tarjeta-user" draggable="true">
              <div class="tarj-h">
                <h2>Membresia</h2>
              </div>
              <div class="tarj-p">
                <!-- bucle 4 pa los amigos -->
                <p><span class="user-detail">Facturación a traves de: </span> Cineclub Platea S.A</p>
                <p><span class="user-detail">Plan: </span> <?php echo "Cinefilo"; ?></p>
                <p><span class="user-detail">Precio: </span> <?php echo " 9,99€" ?></p>
                <p><span class="user-detail">Metodo de pago: </span> <?php echo "Visa";  echo "terminada en 1234"; ?></p>
                <p><span class="user-detail">Proxima facturación:</span> <?php echo "4 Mayo 2024"; ?></p>
              </div>
            </div>
          </div>
        </div>

        <!-- Variable guardada en mariadb -->
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
            <div class="tarjeta-user" draggable="true">
              <div class="tarj-h">
                <h2>Ajustes</h2>
              </div>
              <div class="tarj-notificaciones">

                <div class="notif">
                  <p><span class="notif-detail">Cambiar tema :</span></p>
                  <div class="switcher">
                    <label class="switch">
                      <input type="checkbox" />
                      <span class="slider"></span>
                    </label>
                  </div>
                </div>
                
                <div class="notif">
                  <p><span class="notif-detail">Correos Cineclub Platea :</span></p>
                  <div class="switcher">
                    <label class="switch2">
                      <input type="checkbox" />
                      <span class="slider"></span>
                    </label>
                  </div>                
                </div>

                <div class="notif">
                  <p><span class="notif-detail">Newsletter :</span></p>
                  <div class="switcher">
                    <label class="switch2">
                      <input type="checkbox" />
                      <span class="slider"></span>
                    </label>
                  </div>
                </div>

                <div class="notif">
                  <p><span class="notif-detail">Cookies de rendimiento :</span></p>
                  <div class="switcher">
                    <label class="switch2">
                      <input type="checkbox" />
                      <span class="slider"></span>
                    </label>
                  </div>
                </div>
                
                <div class="notif">
                  <p><span class="notif-detail">Cookies funcionales:</span></p>
                  <div class="switcher">
                    <label class="switch2">
                      <input type="checkbox" />
                      <span class="slider"></span>
                    </label>
                  </div>
                </div>

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
                <p><span>Versión: </span> <?php echo phpVersion(); ?></p>
                <p><span>Plataforma: iFone XIIII</span></p>
                <?php $date = date('h:i a', time()); ?>
                <p><span>Hora actual: </span> <?php echo $date; ?>  </p>
              </div>
            </div>
          </div>

          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6"></div>

        </div>
      </div>

    </section>

    <?php include "footer.php" ?>

  </body>
</html>

<?php
$para      = 'soniasancheztics@gmail.com';
$titulo    = 'Hola!!!';
$mensaje   = 'Hola';
$cabeceras = 'From: soniasanchez369@gmail.com' . "\r\n" .
    'Reply-To: heidi3es@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($para, $titulo, $mensaje, $cabeceras);
?>
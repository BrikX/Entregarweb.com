<?php

// header("Refresh:5; url=http://entregarweb.com/index.php");

$to = 'info@entregarweb.com';

$subject = 'Datos de contacto para ser Driver de Entregar';

$message = '
<html>
<head>
  <title>Datos de contacto</title>
</head>
<body>
  <p>
  Nombre y Apellido: '.$_POST["nomape"].'
  </p>
  <p>
  Email: '.$_POST["emailf"].'
  </p>
  <p>
  Telefono: '.$_POST["tel"].'
  </p>
  <p>
  Barrio: '.$_POST["barrio"].'
  </p>
</body>
</html>
';

$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/html; charset=UTF-8';

$headers[] = 'To: <info@entregarweb.com>';

$headers[] = 'From: <info@entregarweb.com>';

$headers[] = 'Bcc: <info@mobillers.com>';

mail($to, $subject, $message, implode("\r\n", $headers));

header('Location: http://entregarweb.com/index.php?send=ok');

?>
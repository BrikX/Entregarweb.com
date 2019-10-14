<?php

$to = 'info@entregarweb.com';

$subject = 'Datos de Contacto';

$message = '
<html>
<head>
  <title>Datos de Contacto</title>
</head>
<body>
  <p>
  Nombre: '.$_POST["nom"].'
  </p>
  <p>
  Empresa: '.$_POST["emp"].'
  </p>
  <p>
  Email: '.$_POST["emailc"].'
  </p>
  <p>
  Telefono: '.$_POST["tel"].'
  </p>
  <p>
  Mensaje: '.$_POST["mensaje"].'
  </p>
</body>
</html>
';

$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/html; charset=UTF-8';

$headers[] = 'To: <info@entregarweb.com>';

$headers[] = 'From: <info@entregarweb.com>';

$headers[] = 'Bcc: <info@mobillers.com>';

$mail = mail($to, $subject, $message, implode("\r\n", $headers));

header('Location: http://entregarweb.com/contacto.php?send=ok');  

?>

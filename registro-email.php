<?php

$to = 'info@entregarweb.com';

$subject = '';

$message = '
<html>
<head>
  <title></title>
</head>
<body>
  <p>
  Email: '.$_POST["email"].'
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

echo $mail."Gracias por registrarte en entregarweb.com.";

header("Refresh:5; url=http://entregarweb.com/registro.php");

?>
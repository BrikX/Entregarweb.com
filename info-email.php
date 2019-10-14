<?php

$email = $_POST["email"];

function SendEmailToAdmin($email){
    
    $userEmail = $email;

	$to = 'info@entregarweb.com';

	$subject = 'Solicitud del usuario para más información';

	$mensaje = '
	<html>
	<body>
	  <p>
	  Email: '.$userEmail.'</p>
	</body>
	</html>
	';

	$headers[] = 'MIME-Version: 1.0';
	$headers[] = 'Content-type: text/html; charset=UTF-8';

	$headers[] = 'To: <info@entregarweb.com>';

	$headers[] = 'From: <info@entregarweb.com>';

	$headers[] = 'Bcc: <info@mobillers.com>';

	mail($to, $subject, $mensaje, implode("\r\n", $headers));

	header('Location: http://entregarweb.com/index.php?send=ok');

	SendEmailToClient($email);

} 

// header("Refresh:5; url=http://entregarweb.com/index.php");

function SendEmailToClient($email){

	$to= $email;

	$subject= "RE: Solicitud del usuario para más información";

	$mensaje=  '
	<html>
	<body>
	  <p>
	  Gracias por contactarte con Entregar.
	  </p>
	  <p>
	  Entregar cuenta con la flota necesaria para ampliar la capacidad de ventas de tu empresa.
	  </p>
	  <p>
	  Contamos con tarifas planas por envío, que varían según zona y tamaño del paquete.
	  </p>
	  <p>
	  Realizamos <b>ENVÍOS FLEX</b> de Mercado Libre y tus propios envíos.
	  </p>
	  <p>
	  Para mayor seguridad, todos nuestros envíos se encuentran asegurados con Integrity Seguros
	  </p>
	  <p>
	  Contamos con estrictas medidas de seguridad para asegurar la fiabilidad de los choferes de Entregar.
	  </p>

	  <p>
	  <b>Modo de pago</b>
	  </p>

	  <p>
	  Se contabilizan los envíos diarios del 1 al 15 y del 16 al 30 de cada mes, te enviamos la información y a partir de la confirmación se emite la factura para el pago de la misma.
	  </p>

	  <p>
	  • Se acuerda pago quincenal o mensual. Modo de efectuar el pago: Transferencia, Mercadopago. Te enviamos código QR y realizas el pago de tus envíos!
	  </p>
	  <p>
	  • Enviamos factura A.
	  </p>
	  <p>
	  • Para emitir las facturas se requiere la constancia de AFIP.
	  </p>

	  <p>
	  <b>Para más información respondé este mail con Nombre, Razón Social, Cuit, Teléfono y Mail de contacto o llámanos al 11 2521 6052</b>
	  </p>

	</body>
	</html>
	';

	$headers[] = 'MIME-Version: 1.0';
	$headers[] = 'Content-type: text/html; charset=UTF-8';

	$headers[] = 'To: <'.$to.'>';

	$headers[] = 'From: <info@entregarweb.com>';

	mail($to, $subject, $mensaje, implode("\r\n", $headers));

}

SendEmailToAdmin($email);

?>
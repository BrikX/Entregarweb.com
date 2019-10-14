<?php require_once 'header.php'?>

<section id="reccontraseña">
	<div class="container-fluid">
		<div class="row">
			<div class="reccontraseña-container">
				<div class="container">
					<div class="reccontraseña-element">
						<div class="reccontraseña-princ">
							<img src="img/logo-footer.png" class="img-responsive">					
						</div>
						<div class="reccontraseña-datos">
							<h5>Ingresá tu mail y te enviaremos un link para recuperar tu contraseña</h5>
							<p>
								<label>
									<input type="text" class="emailrec" name="emailrec" id="emailrec" placeholder="Ingresá tu mail" />
								</label>
							</p>
							
							<div class="button-reccontraseña">				          
				            	<button type='submit' id="btnlog"><span>Enviar</span></button>
				            </div>
						</div>
						<div class="reccontraseña-record">
							<li><a class="link" href="login.php">Atras</a></li>
						</div>				          
			        </div>
			        <div class="line-reccontraseña"></div>
			        <div class="reccontraseña-footer">
			        	<h5>¿Todavía no tenés una cuenta?</h5>
			        	<div class="button-reg">				          
			            	<a href="registro.php"><button id="btnreg"><span>Registrate</span></button></a>
			            </div>		        	
			        </div>
				</div>									
			</div>
		</div>
	</div>
</section>

<?php require_once 'footer.php'?>
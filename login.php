<?php require_once 'header.php'?>

<section id="login">
	<div class="container-fluid">
		<div class="row">
			<div class="login-container">
				<div class="container">
					<div class="login-element">
						<div class="login-princ">
							<img src="img/logo-footer.png" class="img-responsive">					
						</div>
						<div class="login-datos">
							<p>
								<label>
									<input type="text" class="log" name="emaillog" id="emaillog" placeholder="Ingresá tu mail" />
								</label>
							</p>
							<p>
								<label>
									<input type="password" class="log" name="passlog" id="passlog" placeholder="Ingresá tu contraseña"/>
								</label>
							</p>						
							<div class="button-login">				          
				            	<button type='submit' id="btnlog"><span>Ingresar</span></button>
				            </div>
						</div>
						<div class="login-record">
							<li>
								<label><input type="checkbox" name="rec" value="rec"><span>Recordarme</span></label>
								<a class="link" href="recuperar-contraseña.php">¿Olvidaste tu contraseña?</a>
							</li>
						</div>				          
			        </div>
			        <div class="line-login"></div>
			        <div class="login-footer">
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
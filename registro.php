<?php require_once 'header.php'?>

<section id="registro">
	<div class="container-fluid">
		<div class="row">
			<div class="registro-container">
				<div class="container">
					<div class="formBoxreg">
					  <h2>Registro</h2>
			          <h3>Registrate y gestioná todos tus envíos de CABA y GBA.</h3>
			          <form id="regform" action="registro-mail.php" method="post">
			          	<div class="row">
			          		<div class="col-sm-6">			          		
					          	<p>
					              <label>
					                <input type="text" class="reg" name="nom" id="nom" placeholder="Nombre" />
					              </label>
					            </p>		            		            					          	
				          	</div>

				          	<div class="col-sm-6">
				          		<p>
					              <label>
					                <input type="text" class="reg" name="ape" id="ape" placeholder="Apellido" />
					              </label>
					            </p>
				          	</div>
			          	</div>

			          	<div class="row">
			          		<div class="col-sm-6">			          		
					          	<p>
					              <label>
					                <input type="number" class="reg" name="tel" id="tel" placeholder="Teléfono" />
					              </label>
					            </p>		            		            					          	
				          	</div>

				          	<div class="col-sm-6">
				          		<p>
					              <label>
					                <input type="text" class="reg" name="emailc" id="emailc" placeholder="Mail" />
					              </label>	
					            </p>
				          	</div>
			          	</div>

			          	<div class="row">
			          		<div class="col-sm-6">			          		
					          	<p>
					              <label>
					                <input type="password" class="reg" name="pass" id="pass" placeholder="Contraseña" />
					              </label>
					            </p>	            		            					          	
				          	</div>

				          	<div class="col-sm-6">
				          		<p>
					              <label>
					                <input type="password" class="reg" name="cpass" id="cpass" placeholder="Confirmar Contraseña" />
					              </label>
					            </p>
				          	</div>
			          	</div>

			          	<div class="row">
			          		<div class="col-sm-6">			          		
					          	<p>
					              <label>
					                <input type="text" class="reg" name="emp" id="emp" placeholder="Nombre de Empresa" />
					              </label>
					            </p>	            		            					          	
				          	</div>

				          	<div class="col-sm-6">
				          		<p>
					              <label>
					                <input type="text" class="reg" name="diremp" id="diremp" placeholder="Dirección de Empresa" />
					              </label>
					            </p>	
				          	</div>
			          	</div>
				          	
			          	<div class="boxLinkreg">				          
			            	<button type='submit' class="link" id="btnreg"><span>Registrate</span></button>
			            </div>
			            
			          </form>
			        </div>
				</div>					
			</div>
		</div>
	</div>
</section>
	
<?php require_once 'footer.php'?>
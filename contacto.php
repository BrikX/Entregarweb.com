<?php require_once 'header.php'?>

<div class="modal fade" id="ConfirmMail" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h4>Gracias por contactarte con Entregar</h4>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal"><span>Aceptar</span></button>
      </div>
    </div>
  </div>
</div>

<section id="contacto">
	<div class="container">
		<div class="row">
			<div class="contacto-container">
				<!-- <div class="container"> -->
					<div class="col-md-6">
						<div class="contacto-text">
							<h4>¿Querés conocer más?</h4>
							<p>Completá tus datos y te contactamos</p>
							<div class="line-contacto"></div>
						</div>									
					</div>

					<div class="col-md-6">
						<div class="formBoxcont">
				          <form id="emailsform" action="contacto-email.php" method="post">
				          	<div class="row">
				          		<div class="col-sm-6">			          		
						          	<p>
						              <label>
						                <input type="text" class="cont" name="nom" id="nom" placeholder="Nombre" />
						              </label>
						            </p>		            		            					          	
					          	</div>

					          	<div class="col-sm-6">
					          		<p>
						              <label>
						                <input type="text" class="cont" name="emp" id="emp" placeholder="Empresa" />
						              </label>
						            </p>
					          	</div>
				          	</div>

				          	<div class="row">
				          		<div class="col-sm-6">			          		
						          	<p>
						              <label>
						                <input type="text" class="cont" name="emailc" id="emailc" placeholder="Mail" />
						              </label>	
						            </p>		            		            					          	
					          	</div>

					          	<div class="col-sm-6">
					          		<p>
						              <label>
						                <input type="number" class="cont" name="tel" id="tel" placeholder="Teléfono" />
						              </label>
						            </p>	
					          	</div>
				          	</div>
				     	             
				            <p>
				              <label>
				                <textarea name="mensaje" id="mensaje" placeholder="Mensaje"></textarea>
				              </label>
				            </p>

				            <?php if(!isset($_GET['send'])){ ?>
				            	<div class="boxLinkcont">				          
					            	<button type='submit' class="link" id="btnenv-cont"><span>Enviar</span></button>
					            </div>
				            <?php }else{ ?>
				            	<div class="boxLinkcont">				          
					            	<button type='submit' class="link" id="btnenv-cont"><span>Enviar</span></button>
					            </div>
				            	<script>
									$( document ).ready(function() {
									    $('#ConfirmMail').modal('show')  
									});
								</script>
				            <?php } ?>

				          </form>
				        </div>
					</div>
				<!-- </div>	 -->
			
			</div>
		</div>
	</div>
</section>


<?php require_once 'footer.php'?>
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

<section id="home">
	<div class="container-fluid">
		<div class="row">
			<div class="principal-container">
				<div class="container">
					<div class="home-text">
					    <h2>La forma más simple de gestionar tus envíos.</h2>
					</div>
					<div class="home-subtitle">
					    <p class="p1"><span>Entregar</span> gestiona tus envíos en el momento que quieras. 
					    ¡Enviá y recibí todo tipo de producto sin importar su tamaño!</p>

					    <div class="text-descrip">
					      <div class="line"></div>		
					      	<!-- <p>Crea una cuenta y empezá a gestionar tus envíos</p> -->
					      	<p>Para más información ingresá tu email y nos pondremos en contacto</p>
					      <div class="form-container" id="form-container">
					      	<form name="infoform" method="post" action="info-email.php">
					      		<input type="email" class="Mail" placeholder="Ingresá tu mail" name="email" id="email" required>

					      		<?php if(!isset($_GET['send'])){ ?>
					      			<button type="submit" value="Submit" class="buttonenv" name="btn-sub" id="btn-submit" ><span>Solicitar información</span></button>
					      		<?php }else{ ?>
					      			<button type="submit" value="Submit" class="buttonenv" name="btn-sub" id="btn-submit" ><span>Solicitar información</span></button>
				            		<script>
										$( document ).ready(function() {
										    $('#ConfirmMail').modal('show')  
										});
									</script>
				            	<?php } ?>
					      		
							    <!-- <button type="submit" value="Submit" class="buttonenv" name="btn-sub" id="btn-submit"><span>Crear Cuenta</span></button> -->					  
					      	</form>      	
					      </div>
					      <div class="line"></div> 
					    </div>

					    <div class="icon-container">
					    	<img src="img/qr-code.png" class="img-responsive"/>			    	
					    </div>
					</div>
				</div>			
			</div>
		</div>
	</div>

</section>

<section id="como-funciona">
	<div class="container">
		<div class="row">
			<div class="funciona-text">
				<h2>¿Cómo funciona?</h2>
			</div>

			<div class="funciona-container-icons">
				<div class="col-md-3 col-sm-6">
					<div class="funciona-icons1">
						<img src="img/icon-funciona1.png" class="img-responsive"/>
						<p><b>1</b><br> 
						 Creá un nuevo envío en la plataforma.</p>
					</div>
					<div class="line-funciona"></div> 
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="funciona-icons2">
						<img src="img/icon-funciona2.png" class="img-responsive"/>
						<p><b>2</b><br> 
						 Completá la dirección de retiro y la dirección de entrega.</p>
					</div>
					<div class="line-funciona"></div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="funciona-icons3">
						<img src="img/icon-funciona3.png" class="img-responsive"/>
						<p><b>3</b><br>  
						 Un driver retira y scanea el código QR de tu producto.</p>
					</div>
					<div class="line-funciona"></div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="funciona-icons4">
						<img src="img/icon-funciona4.png" class="img-responsive"/>
						<p><b>4</b><br>  
						 Te lo lleva en el día. </p>
					</div>
					<div class="line-funciona"></div>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="beneficios">
	<div class="container">
		<div class="row">
			<div class="beneficios-text">
				<h2>Beneficios de usar Entregar </h2>
			</div>
			<div class="beneficios-elements">
				<div class="col-md-6">
					<div class="beneficios-element1">
						<img src="img/beneficios-icon1.png" class="img-responsive"/>
						<div class="element1-text">
							<h5>Enviá paquetes de gran tamaño</h5>
							<p>Realizá todos los envíos que quieras de tu tienda o personales sin importar su tamaño.</p>
						</div>
					</div>
					<div class="beneficios-element3">
						<img src="img/beneficios-icon3.png" class="img-responsive"/>
						<div class="element3-text">
							<h5>Los envíos tienen seguimiento</h5>
							<p>Seguí paso a paso el estado de tu envío hasta que es entregado y firmado.</p>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="beneficios-element2">
						<img src="img/beneficios-icon2.png" class="img-responsive"/>
						<div class="element2-text">
							<h5>Llega en el día</h5>
							<p>¡No esperes demás! Gestionamos todas tus entregas en tiempo récord.</p>			
						</div>
					</div>
					<div class="beneficios-element4">
						<img src="img/beneficios-icon4.png" class="img-responsive"/>
						<div class="element4-text">
							<h5>Mercadería asegurada</h5>
							<p>La mercadería que viaja con Entregar esta asegurada ante cualquier eventualidad.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>	
</section>

<section id="socio">
	<div class="container">
		<div class="row">
			<div class="socio-container">
				<div class="col-md-6">
					<div class="socio-text">
						<h4>Convertite en socio estratégico de Entregar</h4>
						<div class="line-socio"></div>
						<h2>Descubrí lo que puede hacer con tu negocio.</h2>
						<p>Para más información enviá un mail a <b>comercial@entregarweb.com</b></p>
						<!-- <button type="submit" value="Submit" class="buttoncuenta" name="btn-sub" id="btn-submit"><span>Crear Cuenta</span></button> -->
					</div>
				</div>

				<div class="col-md-6">
					<div class="socio-img">
						<img src="img/camioneta.png" class="img-responsive"/>	
					</div>					
				</div>
			</div>
		</div>
	</div>
	
</section>

<section id="trasladar">
	<div class="container"> 
		<div class="row"> 
			<div class="trasladar-container"> 
				<div class="col-md-3"> 
					<div class="trasladar-text1"> 
						<h4>¿Que podés trasladar con Entregar?</h4> 
						<div class="line-trasladar"></div>
						<div class="trasladar-t1-element1">
							<h5>¡Todo lo que vendés desde tu plataforma de e-commerce!</h5>
						</div>
					</div> 
				</div> 
				<div class="col-md-3 col-sm-4"> 
					<div class="trasladar-text2"> 
						<div class="trasladar-t2-element1"> 
							<h5>Delivery</h5>
							<div class="tr-element1"> 
								<li><p>Restaurantes</p></li> 
								<li><p>Kiosco y bebidas</p></li> 
								<li><p>Laundry</p></li> 
							</div> 
						</div>																
					</div>
				</div>
				<div class=" col-md-3 col-sm-4">
					<div class="trasladar-text3">
						<div class="trasladar-t3-element1">
							<h5>Mudanzas</h5>
							<div class="tr-element">
								<li><p>Muebles</p></li>
								<li><p>Ropa</p></li>
								<li><p>Electrodomésticos</p></li>
							</div>
						</div>		
					</div>
				</div>
				<div class=" col-md-3 col-sm-4">
					<div class="trasladar-text4">
						<div class="trasladar-t4-element">
							<h5>Documentación</h5>
							<div class="tr-element">
								<li><p>Legales</p></li>
								<li><p>Facturas</p></li>
								<li><p>Apuntes</p></li>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="row"> 
			<div class="trasladar2-container"> 
				<div class="col-md-3 col-sm-4">
					<div class="trasladar-text1">
						<div class="trasladar-t1-element2">
							<h5>¡Todo lo que vendés desde tu plataforma de e-commerce!</h5>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-4">
					<div class="trasladar-text2">
						<div class="trasladar-t2-element2">
							<h5>Logística</h5>
							<div class="tr-element2">
								<li><p>Materiales</p></li>
								<li><p>Laverrap</p></li>
								<li><p>Delivery</p></li>
							</div>
						</div>
					</div>	
				</div>
				<div class="col-md-3 col-sm-4">
					<div class="trasladar-text3">
						<div class="trasladar-t3-element2">
							<h5>Y todo lo que entre en un camión de hasta 8 pallets</h5>
						</div>
					</div>
				</div>
			</div>
		</div> 

	</div>
</section>

<section id="mercadoenvio">
	<div class="container-fluid">
		<div class="row">
			<div class="mercadoenvio-container">
				<div class="container">
					<img src="img/mercadoenvios.png" class="img-responsive">
					<div class="mercadoenvio-text">
					    <h1>¿Qué es Mercado Envíos FLEX?</h1>
					    <h4>Es una nueva opción de logística para que los vendedores puedan sumar a sus repartidores y ofrecer envíos más rápidos.</h4>
					</div>
					<div class="buttoninfo">             
             	       <a href="mercadoenvio-flex.php"><button class="btn btn-default" type="button" id="buttoninfo"><span>Más información</span></button></a>
                  	</div>
				</div>			
			</div>
		</div>
	</div>
</section>

<section id="driver">
	<div class="container">
		<div class="row">
			<div class="driver-container">
				<div class="col-md-6">
					<div class="driver-text">
						<h4>¿Querés ser driver de Entregar?</h4>
						<p class="p1">¿Tenés una moto? ¿Tenés un utilitario chico, mediano o grande (vehículo de hasta 8 pallets)? Trabajá con nosotros.</p>
						<p class="p2">Completá el formulario para aplicar y te contactaremos a la brevedad</p>
						<div class="line-driver"></div>	
					</div>									
				</div>

				<div class="col-md-6">
					<div class="formBox">
			          <h3>Completá tus datos y te contactamos para empezar</h3>
			          <form id="driverform" action="driver-email.php" method="post">
			            <p>
			              <label>
			                <input type="text" class="inp" name="nomape" id="nomape" placeholder="Nombre y apellido" />
			              </label>
			            </p>
			             <p>
			              <label>
			                <input type="text" class="inp" name="emailf" id="emailf" placeholder="Mail" required />
			              </label>	
			            </p>
			            <p>
			              <label>
			                <input type="number" class="inp" name="tel" id="tel" placeholder="Teléfono" />
			              </label>
			            </p>				          
			            <p>
			              <label>
			              	<input type="text" class="inp" name="barrio" id="barrio" placeholder="Barrio" />
			              </label>
			            </p>

			            <?php if(!isset($_GET['send'])){ ?>
			      			<div class="boxLink">				          
				            	<button type='submit' class="link" id="btnenv"><span>Aplicar</span></button>
				            </div>
			      		<?php }else{ ?>
			      			<div class="boxLink">				          
				            	<button type='submit' class="link" id="btnenv"><span>Aplicar</span></button>
				            </div>
		            		<script>
								$( document ).ready(function() {
								    $('#ConfirmMail').modal('show')  
								});
							</script>
		            	<?php } ?>

			            <!-- <div class="boxLink">				          
			            	<button type='submit' class="link" id="btnenv"><span>Aplicar</span></button>
			            </div> -->
			          </form>
			        </div>
				</div>			
			</div>
		</div>
	</div>
</section>

<section id="tarifas">
	<div class="container">
		<div class="row">
			<div class="tarifas-container1">
				<div class="col-md-6">
					<div class="tarifas-text1">
						<h4>Tarifas plana de envíos</h4>
						<div class="line-tarifas"></div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="tarifas-text2">
						<h5>Con Entregar disfrutás de acceder a la tarifa fija de envíos más competitiva del mercado.</h5>
					</div>
				</div>												
			</div>
		</div>

		<div class="row">
			<div class="tarifas-container2">
				<div class="col-md-6">
					<div class="tarifa-element1">
						<div class="t1-element-princ">
							<img src="img/tarifas-icon.png" class="img-responsive">
							<h5>CABA</h5>						
						</div>

						<?php
						$login = false;

						if($login){ ?>
							<div class="t1-element-text">
								<h5 class="title">Tarifas plana por envio</h5>
								<div class="row">							
									<div class="t1-elements">
										<div class="col-md-6">
											<div class="t1-elements-box1">
												<h5><span>$150</span> + IVA</h5>
												<div class="box1-t1">
													<img src="img/caja.png" class="img-responsive">
													<p>Para productos de hasta<br><span><b>30kg y 1m3</b></span></p>
												</div>										
											</div>
										</div>
										<div class="col-md-6">
											<div class="t1-elements-box2">
												<h5><span>$300</span> + IVA</h5>
												<div class="box2-t1">
													<img src="img/caja2.png" class="img-responsive">
													<p>Para productos de hasta<br><span><b>60kg y 2m3</b></span></p>
												</div>										
											</div>
										</div>								
									</div>				
								</div>																
							</div>
						<?php }else{ ?>
							<div class="t1-element-text">
								<img src="img/Mapa.png" class="img-responsive">
							</div>
						<?php } ?>
							
						<div class="t1-element-descrip">
							<li><h5>Ciudad Autónoma de Buenos Aires.</h5></li>							
						</div>				      	    
			        </div>
				</div>

				<div class="col-md-6">
					<div class="tarifa-element2">
						<div class="t2-element-princ">
							<img src="img/tarifas-icon.png" class="img-responsive">
							<h5>Provincia (Zona 1)</h5>						
						</div>

							<?php
							$login = false;

							if($login){ ?>
							<div class="t2-element-text">
								<h5 class="title">Tarifas plana por envio:</h5>
								<div class="row">
									<div class="t2-elements">
										<div class="col-md-6">
											<div class="t2-elements-box1">
												<h5><span>$200</span> + IVA</h5>
												<div class="box1-t2">
													<img src="img/caja.png" class="img-responsive">
													<p>Para productos de hasta<br><span><b>30kg y 1m3</b></span></p>
												</div>											
											</div>
										</div>
										<div class="col-md-6">
											<div class="t2-elements-box2">
												<h5><span>$400</span> + IVA</h5>
												<div class="box2-t2">
													<img src="img/caja2.png" class="img-responsive">
													<p>Para productos de hasta<br><span><b>60kg y 2m3</b></span></p>
												</div>											
											</div>
										</div>								
									</div>
								</div>													
							</div>	
						<?php }else{ ?>
							<div class="t2-element-text">
								<img src="img/Mapa2.png" class="img-responsive"> 
							</div>
						<?php } ?>
							
						<div class="t2-element-descrip">
							<li><h5><b>Zona Sur:</b> Avellaneda, Quilmes, Lanús, Lomas de Zamora, Berazategui, 
							Florencio Varela, Almirante Brown.</h5></li>
							<li><h5><b>Zona Norte:</b> San Martin, Vicente López, San Isidro, San Fernando, Tres de Febrero.</h5></li>	
							<li><h5><b>Zona Oeste:</b> Morón, Hurlingham, Ituzaingó, La Matanza*. </h5></li>				
						</div>			          
			        </div>						
				</div>
			</div>
		</div>

		<div class="row">
			<div class="tarifas-container3">
				<div class="col-md-6">
					<div class="tarifa-element3">
						<div class="t3-element-princ">
							<img src="img/tarifas-icon.png" class="img-responsive">
							<h5>Provincia (Zona 2)</h5>						
						</div>

						<?php
						$login = false;

						if($login){ ?>
							<div class="t3-element-text">
								<h5 class="title">Tarifas plana por envio:</h5>
								<div class="row">
									<div class="t3-elements">
										<div class="col-md-6">	
											<div class="t3-elements-box1">
												<h5><span>$245</span> + IVA</h5>
												<div class="box1-t3">
													<img src="img/caja.png" class="img-responsive">
													<p>Para productos de hasta<br><span><b>30kg y 1m3</b></span></p>
												</div>											
											</div>
										</div>
										<div class="col-md-6">
											<div class="t3-elements-box2">
												<h5><span>$490</span> + IVA</h5>
												<div class="box2-t3">
													<img src="img/caja2.png" class="img-responsive">
													<p>Para productos de hasta<br><span><b>60kg y 2m3</b></span></p>
												</div>											
											</div>
										</div>								
									</div>
								</div>															
							</div>
						<?php }else{ ?>
							<div class="t3-element-text">
								<img src="img/Mapa3.png" class="img-responsive">
							</div>
						<?php } ?>

						<div class="t3-element-descrip">
							<li><h5><b>Zona Suroeste:</b> Ezeiza, Esteban Echeverría.</h5></li>		
							<li><h5><b>Zona Oeste:</b> Merlo, La Matanza*.</h5></li>	
							<li><h5><b>Zona Noroeste:</b> San Miguel, José C Paz, Malvinas Argentinas, Moreno. </h5></li>	
							<li><h5><b>Zona Norte:</b> Tigre.</h5></li>			
						</div>
			        </div>	
				</div>

				<div class="col-md-6">
					<div class="tarifa-element4">
						<div class="t4-element-princ">
							<img src="img/tarifas-icon.png" class="img-responsive">
							<h5>Provincia (Zona 3)</h5>						
						</div>

						<?php
						$login = false;

						if($login){ ?>
							<div class="t4-element-text">
								<h5 class="title">Tarifas plana por envio:</h5>
								<div class="row">
									<div class="t4-elements">
										<div class="col-md-6">
											<div class="t4-elements-box1">
												<h5><span>$300</span> + IVA</h5>
												<div class="box1-t4">
													<img src="img/caja.png" class="img-responsive">
													<p>Para productos de hasta<br><span><b>30kg y 1m3</b></span></p>
											    </div>												
											</div>
										</div>
										<div class="col-md-6">
											<div class="t4-elements-box2">
												<h5><span>$600</span> + IVA</h5>
												<div class="box2-t4">
													<img src="img/caja2.png" class="img-responsive">
													<p>Para productos de hasta<br><span><b>60kg y 2m3</b></span></p>
												</div>											
											</div>
										</div>								
									</div>
								</div>																
							</div>	
						<?php }else{ ?>
							<div class="t4-element-text">
								<img src="img/Mapa4.png" class="img-responsive">
							</div>
						<?php } ?>
						
						<div class="t4-element-descrip">
							<li><h5><b>Zona Sur:</b> Ensenada, Berisso, La Plata.</h5></li>
							<li><h5><b>Zona Suroeste:</b> Presidente Perón, Alejandro Korn, San Vicente.</h5></li>	
							<li>
								<h5><b>Zona Oeste:</b> Marcos Paz.
								<span><b>Zona Noroeste:</b> General Rodríguez.</span></h5>							
							</li>
							<li><h5><b>Zona Norte:</b> Pilar, Del Viso, Escobar.</h5></li>				
						</div>			          
			        </div>						
				</div>
			</div>
		</div>
		<div class="tarifas-descrip">
			<h5>*Los precios serán regulados mediante el índice Fadeeac</h5>
		</div>
	</div>
				
</section>

<section id="nosotros">
	<div class="container">
		<div class="row">
			<div class="nosotros-container">
				<div class="col-md-6">
					<div class="nosotros-text">
						<h4>Sobre Nosotros</h4>
						<div class="line-nosotros"></div>
						<p>Somos una empresa formada por jóvenes profesionales.<br>
						Con una filosofía eco-friendly (cero uso de papel, todo digital), menos manos en el proceso de transporte y más sonrisas en los clientes.<br>
						Nuestra obsesión es mejorar constantemente el proceso de envíos y optimizar los tiempos de respuesta de nuestros clientes. Ofrecemos entregas dropshipping (entregas en el día) y nextday (entregas al día siguiente) con mercadería asegurada.<br>
						Trabajamos codo a codo con nuestros clientes para mejorar la experiencia de compra (Ecommerce) de sus clientes, afianzando la imagen y ganando fidelidad. ¡¡Confiando que el envío sí llegará en el día!!</p>
					</div>
				</div>

				<div class="col-md-6">
					<img src="img/nosotros-img2.gif" class="img-responsive">
				</div>
			</div>
		</div>
	</div>
</section>

<?php require_once 'footer.php' ?>
				<!-- BEGIN MAIN -->
				<div id="main" class="content" style="width: 940px!important; margin-right:0px!important">
					<br />
					<div class="post-heading">
						<h1><?=$formulario['nombre_formulario']?></h1>
					</div>
					<div class="post-entry">
						<?=$formulario['descripcion']?>
						<div class="clear"></div>
					</div>
					<?php echo validation_errors(); ?>

					<form action="hepatitis" method="post" id="hepatitis" accept-charset="utf-8" class="validate">

						<fieldset class="set">

							<div class="heading">
								<h3>Ingrese sus datos personales</h3>
							</div>

							<div class="field">
								<label>Nombre Completo: </label>
								<div class="entry">
									<input type="text" placeholder="Nombres y Apellidos" class="required" name="nombre_completo" id="nombre_completo" minlength="3"/>
								</div>
							</div>

							<div class="field">
								<label>Nº DNI: </label>
								<div class="entry small">
									<input type="text" placeholder="Nº de DNI" class="required digits" name="dni" id="dni" minlength="8" />
								</div>
							</div>

							<div class="field">
								<label>Nº COP: </label>
								<div class="entry small">
									<input type="text" placeholder="Nº de Colegiatura" class="required" name="ncop" id="ncop" />
								</div>
							</div>


							<div class="field">
								<label>Dosis que le corresponde: <span></span></label>
								<div class="entry small">
									<select class="required chosen" placeholder="Dosis" name="dosis" id="dosis">
										<option value="">Elija nº de dosis</option>
										<option value="1ra dosis">1ra dosis</option>
										<option value="2da dosis">2da dosis</option>
									</select>
								</div>
							</div>


							<div class="field">
								<label>Dirección: </label>
								<div class="entry">
									<input type="text" placeholder="Dirección y Distrito" class="required" name="direccion" id="direccion" minlength="3"/>
								</div>
							</div>



							<div class="field">
								<label>Edad: <span>(en años)</span></label>
								<div class="entry tiny">
									<input type="text" placeholder="Su edad" class="required digits" name="edad" id="edad" />
								</div>
							</div>


							<div class="field">
								<label>Ciudad: </label>
								<div class="entry medium">
									<input type="text" placeholder="Ciudad" class="required" name="ciudad" id="ciudad" />
								</div>
							</div>

							<div class="field">
								<label>Teléfono: </label>
								<div class="entry small">
									<input type="text" placeholder="teléfono" class="required" name="telefono" id="telefono" />
								</div>
							</div>

							<div class="field">
								<label>EMail: </label>
								<div class="entry medium">
									<input type="text" placeholder="Correo Electrónico" class="required email" name="email" id="email" />
								</div>
							</div>

						</fieldset>

						<p>&nbsp;</p>

						<fieldset class="set">
							<div class="heading">
								<h3>Ingrese el resultado de la siguiente operación</h3>
							</div>

							<div class="field">
								<label style="text-align: right!important;"><strong style="color: #6F679A; font-size: 20px;"><?=$randNum1?> + <?=$randNum2?> :</strong><br /><span>¿Por qué tengo que hacer la suma?</span> </label>
								<div class="entry tiny">
									<input type="text" placeholder="Resultado" class="required digits sumsec" name="seguridad" id="seguridad" />
								</div>
							</div>

						</fieldset>

						<p>&nbsp;</p>

						<footer class="pane">
							<input type="submit" value="Enviar el Fomulario!" class="fullpane-bt" />
						</footer>

					</form>

				</div>
				<!-- END MAIN -->

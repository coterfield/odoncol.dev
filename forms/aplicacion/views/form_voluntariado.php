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

					<form action="voluntariado" method="post" id="voluntariado" accept-charset="utf-8" class="validate">

						<fieldset class="set">

							<div class="heading">
								<h3>Ingrese sus datos personales</h3>
							</div>

							<div class="field">
								<label>Nombres: </label>
								<div class="entry">
									<input type="text" placeholder="Nombres" class="required" name="nombres" id="nombres" minlength="3"/>
								</div>
							</div>

							<div class="field">
								<label>Apellidos: </label>
								<div class="entry">
									<div class="dual">
										<input type="text" placeholder="Apellido paterno" class="required" name="apellido_paterno" id="apellido_paterno" minlength="3"/>
										<input type="text" placeholder="Apellido materno" class="required" name="apellido_materno" id="apellido_materno" minlength="3"/>
									</div>
								</div>
							</div>


							<div class="field">
								<label>EMail: </label>
								<div class="entry medium">
									<input type="text" placeholder="Correo Electrónico" class="required email" name="email" id="email" />
								</div>
							</div>

							<div class="field">
								<label>Dirección: </label>
								<div class="entry">
									<input type="text" placeholder="Dirección" class="required" name="direccion" id="direccion" minlength="5"/>
								</div>
							</div>

							<div class="field">
								<label>Números de Contacto: </label>
								<div class="entry">
									<div class="dual">
										<input type="text" placeholder="teléfono" class="required" name="telefono" id="telefono" />
										<input type="text" placeholder="celular" class="required" name="celular" id="celular" />
									</div>
								</div>
							</div>

							<div class="field">
								<label>Universidad: </label>
								<div class="entry small">
									<input type="text" placeholder="Universidad" class="required" name="universidad" id="universidad" minlength="3" />
								</div>
							</div>

							<div class="field">
								<label>Estado: <span></span></label>
								<div class="entry small">
									<select class="required chosen" placeholder="Estado" name="estado" id="estado">
										<option value="">Elija estado</option>
										<option value="Estudiante">Estudiante</option>
										<option value="Colegiado">Colegiado</option>
									</select>
								</div>
							</div>

							<div class="field" id="fld_ncop">
								<label>Nº COP: </label>
								<div class="entry small">
									<input type="text" placeholder="Nº de Colegiatura" class="required" name="ncop" id="ncop" />
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

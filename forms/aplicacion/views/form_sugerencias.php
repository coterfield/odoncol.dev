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

					<form action="sugerencias" method="post" id="sugerencias" accept-charset="utf-8" class="validate">

						<fieldset class="set">

							<div class="heading">
								<h3>Ingrese sus datos personales</h3>
							</div>

							<div class="field">
								<label>Nombre Completo: </label>
								<div class="entry">
									<div class="dual">
										<input type="text" placeholder="Nombres" class="required" name="nombres" id="nombres" minlength="3"/>
										<input type="text" placeholder="Apellidos" class="required" name="apellidos" id="apellidos" minlength="3"/>
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
								<label>Nº COP: </label>
								<div class="entry small">
									<input type="text" placeholder="Nº de Colegiatura" class="required" name="ncop" id="ncop" />
								</div>
							</div>

							<div class="field">
								<label>Nº DNI: </label>
								<div class="entry small">
									<input type="text" placeholder="Nº de DNI" class="required digits" name="dni" id="dni" minlength="8" />
								</div>
							</div>



							<div class="field">
								<label>Área/Departamento: <span></span></label>
								<div class="entry medium">
									<select class="required chosen" placeholder="Área o Departamento" name="area" id="area">
										<option value="">A quién se dirije...</option>
										<option value="Denuncia al Empírico">Denuncia al Empírico</option>
										<option value="Recepción">Recepción</option>
										<option value="Caja / Facturación">Caja / Facturación</option>
										<option value="Secretaría">Secretaría</option>
										<option value="EPP">EPP</option>
										<option value="Biblioteca">Biblioteca</option>
										<option value="Imagen y Comunicaciones">Imagen y Comunicaciones</option>
										<option value="Informática">Informática</option>
										<option value="Economía / Contabilidad">Economía / Contabilidad</option>
										<option value="Legal">Legal</option>
										<option value="Decanato">Decanato</option>
										<option value="Administración">Administración</option>
										<option value="Otro no listado">Otro no listado</option>
									</select>
								</div>
							</div>

							<div class="field">
								<label>Comentario:</label>
								<div class="entry">
									<textarea class="required" name="comentario" id="comentario"></textarea>
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

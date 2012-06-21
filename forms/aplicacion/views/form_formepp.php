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

					<form action="formepp" method="post" id="formepp" accept-charset="utf-8" class="validate">

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
										<input type="text" placeholder="Apellido paterno" name="apellido_paterno" id="apellido_paterno" minlength="3"/>
										<input type="text" placeholder="Apellido materno" name="apellido_materno" id="apellido_materno" minlength="3"/>
									</div>
								</div>
							</div>

							<div class="field">
								<label>Nº COP: </label>
								<div class="entry small">
									<input type="text" placeholder="Nº de Colegiatura" class="" name="ncop" id="ncop" />
								</div>
							</div>

							<div class="field">
								<label>EMail: </label>
								<div class="entry medium">
									<input type="text" placeholder="Correo Electrónico" class="required email" name="email" id="email" />
								</div>
							</div>

							<div class="field">
								<label>Números de Contacto: </label>
								<div class="entry">
									<div class="dual">
										<input type="text" placeholder="teléfono" class="" name="telefono" />
										<input type="text" placeholder="celular" class="" name="celular" />
									</div>
								</div>
							</div>
						</fieldset>

						<p>&nbsp;</p>

						<fieldset class="set">
							<div class="heading">
								<h3>Elija los cursos de su interés por Sedes</h3>
							</div>

							<div class="field">
								<h1 style="font-size: 20px;"><?=$miraflores_sede['nombre_sede']?></h1>

								<p style="color: #444444">
								<strong>Dirección:</strong> <?=$miraflores_sede['dir_sede']?> |
								<strong>Teléfono(s):</strong> <?=$miraflores_sede['tel_sede']?><br /><br />
								<span>Elija los cursos de los que desea recibir información:</span><br /><br />
								</p>

								<select class="multiselect" multiple name="miraflores[]" id="miraflores">
<?php foreach ($miraflores_cursos as $curso): ?>
									<option value="<?=$curso['curso_id'] ?>"><?=$curso['tipo_curso']?>: <?=$curso['nombre_curso']?></option>
<?php endforeach ?>
								</select>
							</div>

							<div class="field">
								<h1 style="font-size: 20px;"><?=$comas_sede['nombre_sede']?></h1>

								<p style="color: #444444">
								<strong>Dirección:</strong> <?=$comas_sede['dir_sede']?> |
								<strong>Teléfono(s):</strong> <?=$comas_sede['tel_sede']?><br /><br />
								<span>Elija los cursos de los que desea recibir información:</span><br /><br />
								</p>
								<select class="multiselect" multiple name="comas[]" id="comas">
<?php foreach ($comas_cursos as $curso): ?>
									<option value="<?=$curso['curso_id'] ?>"><?=$curso['tipo_curso']?>: <?=$curso['nombre_curso']?></option>
<?php endforeach ?>
								</select>
							</div>

							<div class="field">
								<h1 style="font-size: 20px;"><?=$sanjuan_sede['nombre_sede']?></h1>

								<p style="color: #444444">
								<strong>Dirección:</strong> <?=$sanjuan_sede['dir_sede']?> |
								<strong>Teléfono(s):</strong> <?=$sanjuan_sede['tel_sede']?><br /><br />
								<span>Elija los cursos de los que desea recibir información:</span><br /><br />
								</p>
								<select class="multiselect" multiple name="sanjuan[]" id="sanjuan">
<?php foreach ($sanjuan_cursos as $curso): ?>
									<option value="<?=$curso['curso_id'] ?>"><?=$curso['tipo_curso']?>: <?=$curso['nombre_curso']?></option>
<?php endforeach ?>
								</select>
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

				<!-- BEGIN MAIN -->
				<div id="main" class="content" style="width: 940px!important; margin-right:0px!important">
					<br />
					<div class="post-heading">
						<h1>Título del Formulario: <?php if ($form_title != ''): ?><?=$form_title?><?php endif; ?></h1>
					</div>
					<div class="post-entry">
						<p>Detalle, descripción e instrucciones del formulario</p>
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
										<input type="text" placeholder="Apellido paterno" class="required" name="apellido_paterno" id="apellido_paterno" minlength="3"/>
										<input type="text" placeholder="Apellido materno" class="required" name="apellido_materno" id="apellido_materno" minlength="3"/>
									</div>
								</div>
							</div>

							<div class="field">
								<label>Nº COP: </label>
								<div class="entry small">
									<input type="text" placeholder="Nº de Colegiatura" class="required digits" name="ncop" id="ncop" />
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
										<input type="text" placeholder="telefono" class="digits" name="telefono" />
										<input type="text" placeholder="celular" class="required digits" name="celular" />
									</div>
								</div>
							</div>
						</fieldset>

						<p>&nbsp;</p>

						<fieldset class="set">
							<div class="heading">
								<h3>Elija los cursos de su interés</h3>
							</div>

							<div class="field">
								<h1>Sede Miraflores</h1>
								<span>Elija uno o varios cursos de su interes</span><br /><br />
								<select class="multiselect {minlength:1} required" multiple name="miraflores[]" id="miraflores">
<?php foreach ($miraflores_cursos as $curso): ?>
									<option value="<?=$curso['curso_id'] ?>"><?=$curso['tipo_curso']?>: <?=$curso['nombre_curso']?></option>
<?php endforeach ?>
								</select>
							</div>

							<div class="field">
								<h1>Sede Comas</h1>
								<span>Elija uno o varios cursos de su interes</span><br /><br />
								<select class="multiselect {minlength:1} required" multiple name="comas[]" id="comas">
<?php foreach ($comas_cursos as $curso): ?>
									<option value="<?=$curso['curso_id'] ?>"><?=$curso['tipo_curso']?>: <?=$curso['nombre_curso']?></option>
<?php endforeach ?>
								</select>
							</div>

							<div class="field">
								<h1>Sede San Juan de Lurigancho</h1>
								<span>Elija uno o varios cursos de su interes</span><br /><br />
								<select class="multiselect {minlength:1} required" multiple name="sanjuan[]" id="sanjuan">
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
								<label><h1>1+1:</h1><br /><span>¿Por qué tengo que hacer la suma?</span> </label>
								<div class="entry tiny">
									<input type="text" placeholder="Resultado" class="required" name="seguridad" id="seguridad" />
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

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

					<form action="formepp" method="post" accept-charset="utf-8" class="validate">

						<fieldset class="set">

							<div class="heading">
								<h3>Ingrese sus datos personales</h3>
							</div>

							<div class="field">
								<label>Nombres: </label>
								<div class="entry">
									<input type="text" placeholder="Nombres" class="required" name="nombres" id="nombres" />
								</div>
							</div>

							<div class="field">
								<label>Apellidos: </label>
								<div class="entry">
									<div class="dual">
										<input type="text" placeholder="Apellido paterno" class="required" name="apellido_paterno" />
										<input type="text" placeholder="Apellido materno" class="required" name="apellido_materno" />
									</div>
								</div>
							</div>

							<div class="field">
								<label>Nº COP: </label>
								<div class="entry small">
									<input type="text" placeholder="Nº de Colegiatura" class="required" name="ncop" id="ncop" />
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
										<input type="text" placeholder="telefono" class="required" name="telefono" />
										<input type="text" placeholder="celular" class="required" name="celular" />
									</div>
								</div>
							</div>
						</fieldset>

						<p>&nbsp;</p>

						<fieldset class="set">
							<div class="heading">
								<h3>Elija el curso de su interés</h3>
							</div>

							<div class="field">
								<label><b>Sede Miraflores:</b><br />
									<span>(Empiece digitando curso o diplomado)</span></label>
								<div class="entry">
									<select class="required chosen" name="select-chosen">
										<option>Elija un curso</option>
										<option>Diplomado: Diplomado Internacional Intensivo de Orotodoncia</option>
										<option>Diplomado: Rehabilitación Oral del Edentulo Parcial con Prótesis Fija y Prótesis Removible</option>
										<option>Diplomado: Rehabilitación Oral con Prótesis Removible</option>
										<option>Diplomado: Endodoncia</option>
										<option>Curso: Clareamiento Dental</option>
										<option>Curso: Carillas</option>
										<option>Curso: Radiología</option>
										<option>Curso: Tecnología en Endodoncia</option>
										<option>Curso: Rehabilitación Oral con Prótesis Fija</option>
										<option>Curso: Terapia Pulpar en niños</option>
									</select>
								</div>
							</div>

							<div class="field">
								<label><b>Sede Comas:</b><br />
									<span>(Empiece digitando curso o diplomado)</span></label>
								<div class="entry">
									<select class="required chosen" name="select-chosen">
										<option>Elija un curso</option>
										<option>Diplomado: Odontología Restauradora</option>
										<option>Diplomado: Rehabilitación Oral con Prótesis Removible y Prótesis Completa</option>
										<option>Curso: Clareamiento Dental</option>
										<option>Curso: Rehabilitación Oral-Estética</option>
										<option>Curso: Fundamentos de Gestión en Estomatología</option>
										<option>Curso: Periodoncia para el Práctico General</option>
										<option>Curso: Enfermedad Periodontal: Diagnóstico y Tratamiento</option>
										<option>Curso: Reflexología General y Estomatológica</option>
									</select>
								</div>
							</div>

							<div class="field">
								<label><b>Sede San Juan de Lurigancho:</b><br />
									<span>(Empiece digitando curso o diplomado)</span></label>
								<div class="entry">
									<select class="required chosen" name="select-chosen">
										<option>Elija un curso</option>
										<option>Diplomado: Endodoncia Avanzada</option>
										<option>Diplomado: Ortodoncia Intermedia</option>
										<option>Curso: Clareamiento Dental</option>
										<option>Curso: Manejo de conducta en pacientes receptivos y no receptivos</option>
										<option>Curso: Periodoncia para el Práctico General</option>
										<option>Curso: Carillas y Estética Dental</option>
									</select>
								</div>
							</div>
						</fieldset>

						<p>&nbsp;</p>

						<fieldset class="set">
							<div class="heading">
								<h3>Elija los cursos de su interés</h3>
							</div>

							<div class="field">
								<label><h1>Sede Miraflores</h1>Elija los cursos de su interes <span></span></label>
								<div class="entry">
									<select class="chosen {minlength:2}" name="select-multiple-chosen" multiple>
										<option>Diplomado: Diplomado Internacional Intensivo de Orotodoncia</option>
										<option>Diplomado: Rehabilitación Oral del Edentulo Parcial con Prótesis Fija y Prótesis Removible</option>
										<option>Diplomado: Rehabilitación Oral con Prótesis Removible</option>
										<option>Diplomado: Endodoncia</option>
										<option>Curso: Clareamiento Dental</option>
										<option>Curso: Carillas</option>
										<option>Curso: Radiología</option>
										<option>Curso: Tecnología en Endodoncia</option>
										<option>Curso: Rehabilitación Oral con Prótesis Fija</option>
										<option>Curso: Terapia Pulpar en niños</option>
									</select>
								</div>
							</div>

							<div class="field">
								<h1>Sede Miraflores</h1>
								<span>Elija uno o varios cursos de su interes</span><br /><br />
								<select class="multiselect {minlength:2}" multiple>
									<option>Diplomado: Diplomado Internacional Intensivo de Orotodoncia</option>
									<option>Diplomado: Rehabilitación Oral del Edentulo Parcial con Prótesis Fija y Prótesis Removible</option>
									<option>Diplomado: Rehabilitación Oral con Prótesis Removible</option>
									<option>Diplomado: Endodoncia</option>
									<option>Curso: Clareamiento Dental</option>
									<option>Curso: Carillas</option>
									<option>Curso: Radiología</option>
									<option>Curso: Tecnología en Endodoncia</option>
									<option>Curso: Rehabilitación Oral con Prótesis Fija</option>
									<option>Curso: Terapia Pulpar en niños</option>
								</select>
							</div>
						</fieldset>

						<p>&nbsp;</p>

						<fieldset class="set">
							<div class="heading">
								<h3>Elija los cursos de su interés</h3>
							</div>

							<div class="field">
								<label><h1>Sede Miraflores:</h1> <span></span></label>
								<div class="check-list" style="float: right">
									<label><input type="checkbox" name="group[]" class="{minlength:1,messages:{minlength:'Seleccione al menos uno 1'}}" />Diplomado: Diplomado Internacional Intensivo de Orotodoncia</label><br>
									<label><input type="checkbox" name="group[]" />Diplomado: Rehabilitación Oral del Edentulo Parcial con Prótesis Fija y Prótesis Removible</label><br>
									<label><input type="checkbox" name="group[]" />Diplomado: Rehabilitación Oral con Prótesis Removible</label><br>
									<label><input type="checkbox" name="group[]" />Diplomado: Endodoncia</label><br>
									<label><input type="checkbox" name="group[]" />Curso: Clareamiento Dental</label><br>
									<label><input type="checkbox" name="group[]" />Curso: Carillas</label><br>
									<label><input type="checkbox" name="group[]" />Curso: Radiología</label><br>
									<label><input type="checkbox" name="group[]" />Curso: Tecnología en Endodoncia</label><br>
									<label><input type="checkbox" name="group[]" />Curso: Rehabilitación Oral con Prótesis Fija</label><br>
									<label><input type="checkbox" name="group[]" />Curso: Terapia Pulpar en niños</label>
								</div>
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
<!--
						<p>Username</p>
						<input type="text" name="username" value="<?php echo set_value('username'); ?>" size="50" />

						<p>Password</p>
						<input type="text" name="password" value="<?php echo set_value('password'); ?>" size="50" />

						<p>Password Confirm</p>
						<input type="text" name="passconf" value="<?php echo set_value('passconf'); ?>" size="50" />

						<p>Email Address</p>
						<input type="text" name="email" value="<?php echo set_value('email'); ?>" size="50" />
-->

					</form>

				</div>
				<!-- END MAIN -->
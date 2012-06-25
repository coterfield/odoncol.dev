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

					<form action="denuncia" method="post" id="formdenuncia" accept-charset="utf-8" class="validate">

						<fieldset class="set">

							<div class="heading">
								<h3>Ingrese sus datos personales</h3>
							</div>

							<div class="field">
								<label>Nombre o Seudónimo: </label>
								<div class="entry">
									<input type="text" placeholder="Nombre o Seudónimo" class="required chekholdr" name="nombre" id="nombre" minlength="3" value="<?=set_value('nombre');?>" />
								</div>
							</div>

							<div class="field">
								<label>EMail: </label>
								<div class="entry medium">
									<input type="text" placeholder="Correo Electrónico" class="" name="email" id="email" value="<?=set_value('email');?>" />
								</div>
							</div>

							<div class="field">
								<label>Denuncia:</label>
								<div class="entry">
									<textarea class="required" name="denuncia" id="denuncia"><?=set_value('denuncia');?></textarea>
								</div>
							</div>

						</fieldset>

						<p>&nbsp;</p>

						<fieldset class="set">
							<div class="heading">
								<h3>Ingrese el resultado de la siguiente operación</h3>
							</div>

							<div class="field">
								<label><strong style="font-size: 20px;"><?=$randNum1?> + <?=$randNum2?> :</strong><br /><span>¿Por qué tengo que hacer la suma?</span> </label>
								<div class="entry tiny">
									<input type="text" placeholder="Resultado" class="required digits sumsec" name="seguridad" id="seguridad" />
								</div>
							</div>

							<div class="field">
								<label></label>
								<div class="entry">
									<input type="submit" value="Enviar denuncia" class="bt green">
								</div>
							</div>

						</fieldset>

						<p>&nbsp;</p>

						<footer class="pane" style="display:none">
							<div class="entry medium with-helper">
								<div class="helper">
									<div class="checker" id="uniform-undefined">
										<span><input type="checkbox" class="js-init" style="opacity: 0;"></span>
									</div>
								</div>
								<div class="selector" id="uniform-undefined">
									<span style="-moz-user-select: none;">Bulk action</span>
									<select class="js-init" style="opacity: 0;">
										<option>Bulk action</option>
										<option>Option 2</option>
										<option>Option 3</option>
									</select>
								</div>
							</div>
							<input type="submit" value="Enviar denuncia" class="bt green">
							
						</footer>

						<p>&nbsp;</p>

						<footer class="pane" style="display:none">
							<input type="submit" value="Enviar el Fomulario!" class="fullpane-bt" />
						</footer>

					</form>

				</div>
				<!-- END MAIN -->

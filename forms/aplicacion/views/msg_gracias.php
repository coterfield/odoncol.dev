				<!-- BEGIN MAIN -->
				<div id="main" class="content" style="width: 940px!important; margin-right:0px!important">
					<br />
					<div class="post-heading">
						<h1><?=$formulario['nombre_formulario']?></h1>
					</div>
					<div class="post-entry">
						<?=$formulario['descripcion']?>
						<div class="clear"></div>
						<div>
							<p>Gracias por su denuncia.</p>
							<p>Volver al <a href="/forms/denuncia">formulario de Denuncia</a></p>
						</div>
						<div class="clear"></div>
					</div>
					<?php echo validation_errors(); ?>

					

				</div>
				<!-- END MAIN -->

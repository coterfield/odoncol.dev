				<!-- BEGIN MAIN -->
				<div id="main" style="width: 940px!important; margin-right:0px!important">

					<h1>Hola</h1>

					<?php echo validation_errors(); ?>

					<form action="/formepp" method="post" accept-charset="utf-8" class="validate">

						<footer class="pane">
							<input type="submit" value="Click to validate them all!" class="fullpane-bt" />
						</footer>

						<p>Username</p>
						<input type="text" name="username" value="<?php echo set_value('username'); ?>" size="50" />

						<p>Password</p>
						<input type="text" name="password" value="<?php echo set_value('password'); ?>" size="50" />

						<p>Password Confirm</p>
						<input type="text" name="passconf" value="<?php echo set_value('passconf'); ?>" size="50" />

						<p>Email Address</p>
						<input type="text" name="email" value="<?php echo set_value('email'); ?>" size="50" />

						<div><input type="submit" value="Submit" /></div>

					</form>

				</div>
				<!-- END MAIN -->
<?php header('Content-Type: text/html; charset=utf-8'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title><?=$formulario['nombre_formulario']?></title>
</head>

<body>
	<h1><?=$formulario['nombre_formulario']?></h1>

	<?=$formulario['autorespuesta']?>
</body>

</html>
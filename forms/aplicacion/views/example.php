<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
<?php 
foreach($css_files as $file): ?>
	<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
<?php endforeach; ?>
<?php foreach($js_files as $file): ?>
	<script src="<?php echo $file; ?>"></script>
<?php endforeach; ?>
<style type='text/css'>
/*
body
{
	font-family: Arial;
	font-size: 14px;
}
a {
    color: blue;
    text-decoration: none;
    font-size: 14px;
}
a:hover
{
	text-decoration: underline;
}
*/
</style>
</head>
<body>
	<div>
<!--
		<a href='<?php echo site_url('examples/customers_management')?>'>Customers</a> |
		<a href='<?php echo site_url('examples/orders_management')?>'>Orders</a> |
		<a href='<?php echo site_url('examples/products_management')?>'>Products</a> |
		<a href='<?php echo site_url('examples/offices_management')?>'>Offices</a> |
		<a href='<?php echo site_url('examples/employees_management')?>'>Employees</a> |
		<a href='<?php echo site_url('examples/film_management')?>'>Films</a> |
-->
<!--
		<a href='<?php echo site_url('examples/tformepp_managment')?>'>Formulario: EPP</a> |
		<a href='<?php echo site_url('examples/cursos_managment')?>'>Cursos</a> |
		<a href='<?php echo site_url('examples/sedes_managment')?>'>Sedes</a> |
		<a href='<?php echo site_url('examples/tipocursos_managment')?>'>Tipos de Cursos</a> |
		<a href='<?php echo site_url('examples/formularios_managment')?>'>Formularios</a>
-->
	</div>

    <div style="min-height: 300px!important; margin-top: 10px;">

<?php if (trim($output) != ''): ?>

		<p>Descargar archivo excel</p>
		<br />
		<?php echo $output; ?>

<?php else: ?>

		<p>Elija en el menú superior un formulario o tabla a administrar</p>
		<div style="height: 250px;!important;">
			&nbsp;
		</div>

<?php endif; ?>

    </div>
</body>
</html>

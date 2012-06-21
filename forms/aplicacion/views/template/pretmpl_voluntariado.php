<?php header('Content-Type: text/html; charset=utf-8'); ?>
<!DOCTYPE html>
<html dir="ltr" lang="es-ES">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />

	<title>Colegio Odontológico de Lima <?php if ($form_title != ''): ?>:: <?=$form_title?><?php endif; ?></title>

	<link rel="stylesheet" href="/web/wp-content/themes/col/style.css" type="text/css" />
	<link rel="stylesheet" href="/web/wp-content/themes/col/js/colorbox/colorbox.css" type="text/css" />

	<link rel="alternate" type="application/rss+xml" title="Colegio Odontológico de Lima &raquo; Feed" href="http://www.col.org.pe/web/feed/" />
	<link rel="alternate" type="application/rss+xml" title="Colegio Odontológico de Lima &raquo; RSS de los comentarios" href="http://www.col.org.pe/web/comments/feed/" />
	<link rel='stylesheet' id='admin-bar-css'  href='/web/wp-includes/css/admin-bar.css?ver=20111209' type='text/css' media='all' />
	<link rel='stylesheet' id='tribe-events-calendar-style-css'  href='/web/wp-content/plugins/the-events-calendar/resources/events.css?ver=3.3.2' type='text/css' media='all' />
	<!--link rel='stylesheet' id='contact-form-7-css'  href='/web/wp-content/plugins/contact-form-7/styles.css?ver=3.1.2' type='text/css' media='all' /-->
	<link rel='stylesheet' href='/forms/assets/css/form.css' type='text/css' media='all' />
	<script type='text/javascript' src='/web/wp-includes/js/jquery/jquery.js?ver=1.7.1'></script>
	<script type='text/javascript' src='/web/wp-content/plugins/the-events-calendar/resources/jquery.pjax.js?ver=3.3.2'></script>
	<script type='text/javascript' src='/web/wp-content/plugins/the-events-calendar/resources/events.js?ver=3.3.2'></script>
	<script type='text/javascript' src='/web/wp-content/themes/col/js/jcarousellite_1.0.1.pack.js?ver=3.3.2'></script>
	<script type='text/javascript' src='/web/wp-content/themes/col/js/jquery.nivo.slider.pack.js?ver=3.3.2'></script>
	<script type='text/javascript' src='/web/wp-content/themes/col/js/colorbox/jquery.colorbox-min.js?ver=3.3.2'></script>
	<script type='text/javascript'>
	/* <![CDATA[ */
	var AvenueVars = {"ajaxUrl":"http:\/\/www.col.org.pe\/web\/wp-admin\/admin-ajax.php"};
	/* ]]> */
	</script>
	<script type='text/javascript' src='/web/wp-content/themes/col/js/scripts.js?ver=3.3.2'></script>
	<link rel="EditURI" type="application/rsd+xml" title="RSD" href="http://www.col.org.pe/web/xmlrpc.php?rsd" />
	<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="http://www.col.org.pe/web/wp-includes/wlwmanifest.xml" />
	<meta name="generator" content="WordPress 3.3.2" />
	<style type="text/css" media="print">#wpadminbar { display:none; }</style>
	<style type="text/css" media="screen">
	/*	html { margin-top: 28px !important; }
		* html body { margin-top: 28px !important; } */
	</style>

	<!-- JAVASCRIPTs -->
	<!--[if lt IE 9]>
	<script language="javascript" type="text/javascript" src="/forms/assets/js/html5shiv.js"></script>
	<![endif]-->
	<script src="/forms/assets/js/esplendido.js"></script>
	<script src="/forms/assets/js/browserDetect.js"></script>
	<script src="/forms/assets/js/jquery.formalize.min.js"></script>
	<script src="/forms/assets/js/prefixfree.min.js"></script>
	<script src="/forms/assets/js/jquery.uniform.min.js"></script>
	<script src="/forms/assets/js/chosen.jquery.min.js"></script>
	<script src="/forms/assets/js/ui-custom.js"></script>
	<script src="/forms/assets/js/ui.multiselect.js"></script>
	<script src="/forms/assets/js/ui.spinner.min.js"></script>
	<script src="/forms/assets/js/jquery.dataTables.min.js"></script>
	<script src="/forms/assets/js/jquery.metadata.js"></script>
	<script src="/forms/assets/js/progressbar.js"></script>
	<script src="/forms/assets/js/jquery.tipsy.js"></script>
	<script src="/forms/assets/js/jquery.maskedinput-1.3.min.js"></script>
	<script src="/forms/assets/js/jquery.validate.min.js"></script>
	<script src="/forms/assets/js/messages_es.js"></script>
	<script src="/forms/assets/js/jquery.validationEngine-es.js"></script>
	<script src="/forms/assets/js/jquery.validationEngine.js"></script>
	<script src="/forms/assets/js/jquery.elastic.js"></script>
	<script src="/forms/assets/js/fullcalendar.min.js"></script>
	<script src="/forms/assets/js/jquery.modal.js"></script>

	<script type='text/javascript'>
	jQuery(window).load(function() {
		// Implementation of Nivo Slider
	    jQuery('#slider').nivoSlider({
			effect: 'slideInLeft',
			pauseTime: '3000',
	        controlNavThumbs: true,
	        controlNavThumbsFromRel: true,
	        directionNav: false,
	        directionNavHide: false,
	        captionOpacity: false
		});

		jQuery('.nivo-control').each(function() {
			jQuery('<div class="overlay">').appendTo(this);
		});

		//added by me

		jQuery.validator.addMethod("mathsec", function(value, element, params) {
			return this.optional(element) || value == params[0] + params[1];
		}, jQuery.format("Por favor ingrese el valor correcto para {0} + {1}"));

		jQuery.validator.addMethod("sumsec", function(value, element) {
			return this.optional(element) || value == <?=$randNum1+$randNum2?>;
		}, jQuery.format("Complete la operación"));

		jQuery.validator.addMethod("chekholdr", function(value, element) {
			var chekval = jQuery(element).attr('placeholder');
			return !chekval || value != chekval;
		}, "Este es un dato requerido.");

		jQuery("#nombres").rules("add", {
			chekholdr: true,
			messages: {
				required: "Debe ingresar su(s) nombre(s)",
				chekholdr: "Debe ingresar su(s) nombre(s)"
			}
		});

		jQuery("#seguridad").rules("add", {
			required: true,
			digits: true,
			sumsec: true,
			messages: {
				required: "Complete la operación",
				digits: "Complete la operación",
				sumsec: "Complete la operación"
			}
		});


		jQuery("#apellido_paterno").rules("add", {
			chekholdr: true,
			messages: {
				required: "Debe ingresar su apellido Paterno",
				chekholdr: "Debe ingresar su apellido Paterno"
			}
		});

		jQuery("#apellido_materno").rules("add", {
			chekholdr: true,
			messages: {
				required: "Debe ingresar su apellido Materno",
				chekholdr: "Debe ingresar su apellido Materno"
			}
		});

		jQuery("#dni").rules("add", {
			chekholdr: true,
			messages: {
				required: "Debe ingresar su DNI",
				chekholdr: "Debe ingresar su DNI"
			}
		});

		jQuery("#ncop").rules("add", {
			chekholdr: true,
			messages: {
				required: "Debe ingresar su Nº de Colegiatura",
				chekholdr: "Debe ingresar su Nº de Colegiatura"
			}
		});

		jQuery("#placa").rules("add", {
			chekholdr: true,
			messages: {
				required: "Debe ingresar su Placa",
				chekholdr: "Debe ingresar su Placa"
			}
		});

		jQuery("#telefono").rules("add", {
			chekholdr: true,
			messages: {
				required: "Debe ingresar su Nº de teléfono",
				chekholdr: "Debe ingresar su Nº de teléfono"
			}
		});

	});
	</script>

	<style type='text/css'>
	/*body { background:#dddddd url('http://www.col.org.pe/web/wp-content/themes/col/images/patterns/pattern3.png') repeat; }*/
	.arrows { color:#696196; }
	.block-arrows, .block-arrows a { color:#696196; }
	.meta-arrow { font-size:16px; color:#696196; }
	.tweets a, .textwidget a { color:#696196; }
	</style>

	<script type="text/javascript">
	var _gaq = _gaq || [];
	_gaq.push(['_setAccount', 'UA-31996845-1']);
	_gaq.push(['_setDomainName', 'col.org.pe']);
	_gaq.push(['_trackPageview']);

	(function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	})();
	</script>
</head>

<body class="home blog logged-in admin-bar">
	<a name='top'></a>
	<!-- BEGIN WRAPPER -->
	<div id="wrapper">
		<div id="wrapper1">
			<!-- BEGIN HEADER-TOP -->
			<!-- END HEADER-TOP -->

			<!-- BEGIN WRAPPER-CONTENT -->
			<div id="wrapper-content">

				<!-- BEGIN HEADER -->
				<div id="header">

					<!-- BEGIN HEADER-MIDDLE -->
					<div id="header-middle">

						<div id="logo">
													<!--a href=''><img src="" alt="" /></a-->

							<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,40,0" width="550" height="150" id="banner_cabecera.swf">
								<param name="movie"  value="http://www.col.org.pe/web/wp-content/themes/col/images/banner_cabecera.swf" />
								<param name="quality" value="high" />
								<param name="wmode" value="transparent">
								<embed src="http://www.col.org.pe/web/wp-content/themes/col/images/banner_cabecera.swf" quality="high" width="550" height="150" name="mymoviename" align="" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer"></embed>
							</object>
						</div>

						<div id="header-banner">
							<form method="get" id="searchform" action="http://www.col.org.pe/web/">
								<input type="text" name="s" id="s" value="Buscar en la Web..." onfocus='if (this.value == "Buscar en la Web...") { this.value = ""; }' onblur='if (this.value == "") { this.value = "Buscar en la Web..."; }' />
								<input type="image" src="http://www.col.org.pe/web/wp-content/themes/col/images/search-button.png" value="" id="search-button">
							</form>
						</div>

					</div>
					<!-- END HEADER-MIDDLE -->

					<!-- BEGIN WRAPPER-NAVIGATION -->
					<div id="wrapper-navigation">

						<div id="navigation">
							<div class="menu-main-container">
								<ul id="menu-main" class="menu">
								<li id="menu-item-48" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-48"><a href="http://www.col.org.pe/web/">Inicio</a></li>
								<li id="menu-item-47" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-47"><a href="http://www.col.org.pe/web/institucional/">Institucional</a>
									<ul class="sub-menu">
										<li id="menu-item-346" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-346"><a href="http://www.col.org.pe/web/institucional/leyes-y-normas/">Leyes y normas</a></li>
										<li id="menu-item-342" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-342"><a href="http://www.col.org.pe/web/institucional/programas-comisiones-y-comites/">Programas y Comisiones</a></li>
										<li id="menu-item-341" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-341"><a href="http://www.col.org.pe/web/institucional/cuota-societaria/">Cuota societaria</a></li>
										<li id="menu-item-340" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-340"><a href="http://www.col.org.pe/web/institucional/consentimiento-informado/">Consentimiento Informado</a></li>
										<li id="menu-item-330" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-330"><a href="http://www.col.org.pe/web/institucional/junta-electoral/">Junta Electoral</a></li>
									</ul>
								</li>
								<li id="menu-item-46" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-46"><a href="http://www.col.org.pe/web/publicaciones/">Publicaciones</a>
									<ul class="sub-menu">
										<li id="menu-item-94" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-94"><a href="http://www.col.org.pe/web/publicaciones/noticop-lima-digital/">NotiCOP-Lima Digital</a></li>
									</ul>
								</li>
								<li id="menu-item-45" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-45"><a href="http://www.col.org.pe/web/capacitacion/">Capacitación</a></li>
								<li id="menu-item-44" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-44"><a href="http://www.col.org.pe/web/nuevos/">Nuevos colegiados</a></li>
								<li id="menu-item-43" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-43"><a href="http://www.col.org.pe/web/servicios/">Servicios</a></li>
								<li id="menu-item-42" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-42"><a href="http://www.col.org.pe/web/sugerencias/">Sugerencias</a></li>
								</ul>
							</div>
						</div>

					</div>
					<!-- END WRAPPER-NAVIGATION -->

				</div>
				<!-- END HEADER -->

<!doctype html>
<html lang="es-PE">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Multitel Servicios de Internet de alta velocidad</title>
	<meta name="viewport" content="initial-scale=1, maximum-scale=1">	
	<link href="http://fonts.googleapis.com/css?family=Oswald:300,400,700" rel="stylesheet" type="text/css">
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,300,400italic,400,600italic,600,700italic,700,800italic,800" rel="stylesheet" type="text/css">
	<link href='http://fonts.googleapis.com/css?family=Indie+Flower' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
	<!--[if lt IE 9]>
		<script src="assets/documentation/assets/js/html5.js"></script>
	<![endif]-->
	<!-- LayerSlider stylesheet -->
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/tether/css/tether.min.css">
	<link rel="stylesheet" href="assets/layerslider/css/layerslider.css" type="text/css">
	<link rel="stylesheet" href="assets/css/megasystemas.css" type="text/css">
</head>
<body class="nobg">
	<?php include('incs/menu.php'); ?>
	<!-- LayerSlider markup should be placed after the <body> opening tag-->	
	<?php /*include('incs/slide.php');*/ echo '<div style="height:650px;background:#ccc;"></div>'; ?>
	
	<div class="clearfix"></div>
	<div id="nosotros" class="m_tel">
		<img src="assets/img/test/banner_tel.jpg" alt="" class="img-responsive">
	</div>
	<div class="container">
		<div class="row">
			<?php 
				//http://themes.muffingroup.com/be/guesthouse/
				//http://themes.potenzaglobalsolutions.com/html/the-best-car-dealer-automotive-responsive-html5-template/
				//http://themelooks.us/demo/voip/html/preview/
				//http://titanicthemes.com/demo/avision/preview/index.php
				include('incs/content/video_nosotros.php');

				include('incs/content/banner_cambiable.php');



			?>
		</div>
	</div>
	
	<script type="text/javascript">
		window.Tether = {};
	</script>
	<!-- Here comes your other site data -->	

	<!-- External libraries: jQuery & GreenSock -->
	<script src="assets/layerslider/js/jquery.js" type="text/javascript"></script>
	<script src="assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="assets/tether/js/tether.min.js"></script>
	<script src="assets/layerslider/js/greensock.js" type="text/javascript"></script>
	<!-- LayerSlider script files -->
	<script src="assets/layerslider/js/layerslider.transitions.js" type="text/javascript"></script>
	<script src="assets/layerslider/js/layerslider.kreaturamedia.jquery.js" type="text/javascript"></script>

	<!-- Initializing the slider -->
	<script type="text/javascript">
		$("#layerslider").layerSlider({
			pauseOnHover: false,
			skinsPath: 'assets/layerslider/skins/',
			showCircleTimer: true,
			navButtons: true,
			thumbnailNavigation: 'hover'
		});

		$(document).ready(function() {

			$('nav ul li a').click(function(){ //funcion para scroll one page

				$('nav ul li a').removeClass('menu_activo');
				$(this).addClass('menu_activo');
		        var el = $(this).attr('href');
		        var elWrapped = $(el);
		        scrollToDiv(elWrapped,80);
		        return false;
    		});

    		function scrollToDiv(element,navheight){

			var offset = element.offset();
			var offsetTop = offset.top;
			var totalScroll = offsetTop-navheight;
			$('body,html').animate({scrollTop: totalScroll}, 500);
	    }
		});

		

	</script>
</body>
</html>

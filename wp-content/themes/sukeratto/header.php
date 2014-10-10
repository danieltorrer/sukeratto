<!doctype html>
<!--[if lt IE 7 ]><html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]><html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]><html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]><html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="es" class="no-js"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta name="author" content="Daniel Torres">
	<meta name="keywords" content="Postres, sukeratto, cupcakes, pasteles">
	<meta name="viewport" content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0'>
	<title><?php is_front_page() ? bloginfo('name') : wp_title(''); ?></title>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<!--<link href="css/main.min.css" media="screen" rel="stylesheet">-->
	
	<!--[if lt IE 9]><script src="js/respond.min.js"></script><![endif]-->
<!--[if gte IE 9]>
<style type="text/css">
    .gradient {filter: none !important;}
</style>
<![endif]-->
<?php wp_head(); ?>
</head>

<body>
	<div <?php body_class(); ?> class="body_wrap ">
		<div class="container">
			
			<header>
				<div class="row">
					<div class="col-sm-2 col-xs-12">
						<div class="logo">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
								<img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="">
							</a>
						</div>
					</div>

					<div class="col-sm-9 col-sm-offset-1 col-xs-12">
						<div class="menu">
							<div id="topmenu" >
								<?php 
								$defaults = array(
									'menu_class'      => 'dropdown clearfix boxed boxed-brown',
									'echo'            => true,
									'before'          => '',
									'after'           => '',
									'link_before'     => '',
									'link_after'      => '',
									);
								wp_nav_menu( $defaults ); 
								?>
								<!--<ul class="dropdown clearfix boxed boxed-brown" role="navigation">
									<li class="active"><a href="#"><span>Inicio</span></a></li>
									<li><a href="#"><span>Postres</span></a>
										<ul>
											<li><a href="#">Pasteles</a></li>
											<li><a href="#">Cupcakes</a></li>
											<li><a href="#">Galleta decorada</a></li>
											<li><a href="#">Chocolatería</a></li>
											<li><a href="#">Pays y tartas</a></li>
											<li><a href="#">Gelatinas y flanes</a></li>
										</ul>
									</li>
									<li><a href="#"><span>Cursos</span></a></li>
									<li><a href="#"><span>Galería</span></a></li>
									<li><a href="#"><span>Contacto</span></a></li>
								</ul>-->
							</div>
						</div>
					</div>
				</div>
			</header>
<?php
require_once 'conexion.php';
?>

<!DOCTYPE HTML>

<html>
	<head>
		<title>Generic - OLGER GASTRONOMIA MASCHA</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- parte donde va el logo o palabras de delicious -->
			<div id="wrapper">

				<!-- cabezera -->
					<header id="header">
						<a href="index.php" class="logo"><strong>GASTRONOMIA MASCHA</strong> <span>||EAT DELICIOUS||</span></a>
						<nav>
							<a href="#menu">MENÚ </a>
						</nav>
					</header>

				<!-- Menu -->
					<nav id="menu">
						<ul class="links">
							<li><a href="index.php">INICIO</a></li>
							<li><a href="landing.php"> RECETAS DE LOS PLATOS</a></li>
							<li><a href="generic.php">LATACUNGA</a></li>
							<li><a href="elements.php"> PLATOS DE LOS CANTONES </a></li>
						</ul>
						<ul class="actions stacked">
							<li><a href="https://latacungaturismo.com/" class="button primary fit">"Municipio Latacunga"</a></li>
						</ul>
					</nav>

				<!-- Main -->
					<div id="main" class="alt">

						<!-- la parte de latacunga -->
							<section id="one">
								<div class="inner">
									<header class="major">
										<h1><center>HISTORIA DE LATACUNGA</center></h1>
									</header>
									<span class="image main"><img src="images/latayork.jpg" alt= ""
										height="650" /></span>
										<p>Es la capital de la provincia de Cotopaxi, además de ser el centro 
											de administración, reúne a mucha población de toda la provincia, el
											 que hacer económico de la ciudad siempre estuvo involucrado en el 
											 acopio y venta comercial de la producción agrícola, se dice que en la
											  época pasada la ciudad fue el molino del Ecuador más importante por 
											  su producción de gramíneas. La actividad económica de la tierra de 
											  la Mama Negra, cambió mucho en cuando se instalaron las florícolas
											   en los alrededores y también con el asentamiento de otras
											 industrias, se incrementó la explosión demográfica en la zona.</p>
									<span class="image main"><img src="images/latacu.jpg" alt=""height="650" /></span>
									<h2>Los sabores de la tierrita fría: gastronomía en Latacunga </h2>
									<p>Sus paladares quedaran extasiados de tantos sabores y aromas. Esta tierrita fría te ofrece
                                         la mejor chugchucara del Ecuador, así que visitamos el restaurante ‘La Antigua Tradición 
                                           Latacungueña´, en este sitio nos metimos a la cocina para descubrir sus secretos, no lo 
                                        conseguimos, pero sí conocimos la preparación, y puedo contarles que los alimentos se 
                                      preparan en el momento, de la paila a la mesa.  Este platillo está compuesto por carne 
                                          de cerdo frito, mote, papas fritas, plátano maduro frito, empanadas, canguil y cuero de 
                                         cerdo reventado acompañado de un rico ají de tomate. Legado que se ha tomado la ciudad 
                                          por su sazón y tradición culinaria, que viene de generación en generación familiar. No 
                                            me queda más que decir…   ¡delicioso!

                                           Otra de las maravillas culinarias son las allullas hechas con
                                             harina de trigo cocida con manteca de chancho y huevos, receta 
                                           tradicional de la gastronomía campesina y española. Esto es posible 
                                          servirse en cualquier momento, sin embargo, los Mashcas la toman por la tarde con café, 
                                           en compañía de la familia y amigos; no olviden el rico queso de hoja, un encanto al paladar.
                                         Su nombre se debe por la maceración del lácteo con la hoja de achira,  sabor inigualable de 
                                          calidad.Y si usted cree que esto es poco, una golosina endulzará su paladar, en la panamericana
                                        norte a 16 Km vía Quito, degusté de los ricos helados de la Avelina, que son empastados 
                                            hechos de pura leche pasteurizada traída de las hacienda ganaderas de Lasso. Aquí no dude 
                                           en adquirir un recuerdo elaborado en totora, cerámica y barro. También, encontrará ollas,
                                          macetas, alcancías, adornos y vajillas, a precios muy cómodos.</p>
								</div>
							</section>

					</div>

				<!-- Contactos y la coneccion a la BBD -->
					<section id="contact">
						<div class="inner">
							<section>
						
								<?php
                                 require_once 'contactenos.php';
                                ?>

							</section>
							<section class="split">
								<section>
									<div class="contact-method">
										<span class="icon solid alt fa-envelope"></span>
										<h3>Em@il</h3>
										<a href="https://www.google.com/intl/es/gmail/about/">olgertoaquiza713@gmail.com</a>
										<a href="https://www.google.com/intl/es/gmail/about/">roberthcedeño@gmail.com</a>
									</div>
								</section>
								<section>
									<div class="contact-method">
										<span class="icon solid alt fa-phone"></span>
										<h3>Celular</h3>
										<span>0965463243-0986456372</span>
									</div>
								</section>
								<section>
									<div class="contact-method">
										<span class="icon solid alt fa-home"></span>
										<h3>Informacion</h3>
										<span>Al usar nuestro contenido,
											 productos y servicios, acepta nuestros Términos de servicio y nuestra Política de privacidad.
											La información en este sitio se basa en diferentes revisiones realizadas por terceros,
											 así como en sus propios puntos de vista y fuentes.
											Estamos ubicados en el paque "Vicente Leon" de la ciudad de
										    Cotopaxi-Latacunga </span>
									</div>
								</section>
							</section>
						</div>
					</section>

				<!-- parte donde estan los iconos de las redes sociales olgerrrrr -->
					<footer id="footer">
						<div class="inner">
							<ul class="icons">
								<li><a href="https://www.facebook.com/olgeralexander.toaquizapucuji/" class="icon brands alt fa-facebook-f"><span class="label">Facebook</span></a></li>
								<li><a href="https://instagram.com/olger_toaquiza?igshid=1uc0cva8ywi4i" class="icon brands alt fa-instagram"><span class="label">Instagram</span></a></li>
							</ul>
							<ul class="copyright">
							<li>&copy; Todos los derechos reservados</li><li>Diseñado: <a >Olger Toaquiza y Roberth Cedeño</a></li>
							</ul>
						</div>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>

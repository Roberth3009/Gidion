<?php
require_once 'conexion.php';
?>
<!DOCTYPE HTML>

<html>
	
	<head>
		<title>OLGER-MASCHA</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
		
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header" class="alt">
						<a href="index.php" class="logo"><strong>GASTRONOMIA MASCHA</strong> <span>||EAT DELICIOUS|| </span></a>
						<nav>
							<a href="#menu">MENÚ </a>
							
						</nav>
						
					</header>

				<!-- Menu -->
					<nav id="menu">
						<ul class="links">
							<li><a href="index.php">INICIO</a></li>
							<li><a href="landing.php">RECETAS DE LOS PLATOS</a></li>
							<li><a href="generic.php">LATACUNGA</a></li>
							<li><a href="elements.php">PLATOS DE LOS CANTONES</a></li>
						</ul>
						<ul class="actions stacked">
							<li><a href="https://latacungaturismo.com/" class="button primary fit">"Municipio Latacunga"</a></li>
							

						</ul>
					</nav>

				<!-- Banner -->
					<section id="banner" class="major">
						<div class="inner">
							<span class="image">
								<img src="images/fondobello.jpg" alt="" />
							</span>
							<header class="major">
								<h1>Bienvenidos a las Recetas de la Gastronomia Latacungueña</h1>
							</header>
							<div class="content">
								<p> En nombre de lo creadores de la pagina, les damos la más sincera bienvenida a 
									nuestra página web, en la que, esperamos, encontrarán toda la información 
									que necesiten acerca de nuestras actividades.
									Esta web quiere ser también testigo del crecimiento de la gastronomia mascha, 
									desde sus orígenes hasta su incursión en aquellos sectores demandados
									 por la sociedad.
									Pero el objetivo principal de este canal de comunicación es 
									plasmar los valores que nos respaldan: el compromiso social, la máxima 
									calidad y la voluntad de servicio, así como nuestro interés por todas aquellas
									 ventajas que nos ofrece la tecnología. Todo ello tiene una presencia destacada
									  en esta página web y en nuestras propias decisiones.
									<br>
									<br>
									<br>
									"Disfruten de esta pagina web que les 
										va a servir mucho para poder conocer los diferentes recetas de los platos de comida 
										que tiene la cicudad de latacunga  
										pencil de los andes"</p>
								
								<ul class="actions">
									<li><a href="#one" class="button next scrolly">CONTINUAR</a></li>
								</ul>
							</div>
						</div>
					</section>

				<!-- Main -->
					<div id="main">

						<!-- One -->
							<section id="one" class="tiles">
								<article>
									<span class="image">
										<img src="images/Chugchucara.jpg" alt="" />
									</span>
									<header class="major">
										<h3><a href="landing.php" class="link">"CHUGCHUCARAS"</a></h3>
										<p>Plato delicioso ven y conoce la receta y el precio y deja tu comentario...</p>
									</header>
								</article>
								<article>
									<span class="image">
										<img src="images/hornado.jpg" alt="" />
									</span>
									<header class="major">
										<h3><a href="landing.php" class="link">"HORNADO"</a></h3>
										<p>Plato delicioso ven y conoce la receta y el precio y deja tu comentario...</p>
									</header>
								</article>
								<article>
									<span class="image">
										<img src="images/yaguar.jpg" alt="" />
									</span>
									<header class="major">
										<h3><a href="landing.php" class="link">"YAGUARLOCRO"	</a></h3>
										<p>Plato delicioso ven y conoce la receta y el precio y deja tu comentario...</p>
									</header>
								</article>
								<article>
									<span class="image">
										<img src="images/tortillas.jpg" alt="" />
									</span>
									<header class="major">
										<h3><a href="landing.php" class="link">"TORTILLAS DE MAIZ "</a></h3>
										<p>Plato delicioso ven y conoce la receta y el precio y deja tu comentario...</p>
									</header>
								</article>
								<article>
									<span class="image">
										<img src="images/empanadas.jpg" alt="" />
									</span>
									<header class="major">
										<h3><a href="landing.php" class="link">"EMPANADAS DE VIENTO"</a></h3>
										<p>Plato delicioso ven y conoce la receta y el precio y deja tu comentario...</p>
									</header>
								</article>
								<article>
									<span class="image">
										<img src="images/allullas.jpg" alt="" />
									</span>
									<header class="major">
										<h3><a href="landing.php" class="link">"ALLULAS"</a></h3>
										<p>Plato delicioso ven y conoce la receta y el precio y deja tu comentario...</p>
									</header>
								</article>
							</section>

						<!-- Two -->
							<section id="two">
								<div class="inner">
									<header class="major">
										<h2>LATACUNGA</h2>
									</header>
									<p>Latacunga, también conocida como San Vicente Mártir de Latacunga,
										 es una ciudad ecuatoriana; cabecera cantonal del Cantón Latacunga
										  y capital de la Provincia de Cotopaxi, así como la urbe más grande
										   y poblada de la misma. Se localiza al centro-norte de la Región 
										   interandina del Ecuador, en la hoya del río Patate, atravesada por 
										   los ríos Cutuchi y Pumacunchi, a una altitud de 2750 m s. n. m. y
										 con un clima frío andino de 12 °C en promedio.</p>
									<ul class="actions">
										<li><a href="generic.php" class="button next">VER MÁS...</a></li>
									</ul>
								</div>
							</section>

					</div>

				<!-- Contact -->
					<section id="contact">
						<div class="inner">
							<section>
								<form method="POST" action="registro.php">
									<div class="fields">
										<div class="field half">
											<label for="name">Nombre</label>
											<input type="text" name="name" id="name" required />
										</div>
										<div class="field half">
											<label for="email">Em@il</label>
											<input type="text" name="email" id="email" required/>
										</div>
										<div class="field">
											<label for="message">Escriba su comentario</label>
											<textarea name="message" id="message" rows="6" required> </textarea>
										</div>
									</div>
									<ul class="actions">
										<li><input type="submit" value="Enviar Mensaje" class="primary" /></li>
										<li><input type="reset" value="Limpiar" /></li>
									</ul>
								</form>
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

				<!-- Footer -->
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
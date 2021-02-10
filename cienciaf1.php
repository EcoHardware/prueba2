<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="Estilos/header.css">
	<link rel="stylesheet" href="Estilos/producto.css">
	<link rel="stylesheet" href="Estilos/styles.css">
	<link rel="stylesheet" href="Estilos/footer.css">
	<title>BooKiller - Carbono Modificado</title>
</head>
<body>

	<a href="#" id="scroll" style="display: none;"><span></span></a><!--Al pulsar el boton de scroll up, nos lleva aqui-->

	<nav>
	    <div class="imagen">
	        <a href="index.php"><img class="logo" src="Imagenes/Logo.png" alt="Logo empresa"></a>
	    </div>
	    <ul class="nav-links">
			<li><a href="libros.php">Libros</a></li>
			<li><a href="manga.php">Manga</a></li>
			<li><a href="formulario.php">Formulario</a></li>
			<li><a href="ocio.php">Ocio</a></li>
	    </ul>
	    <div class="burger">
	        <div class="line1"></div>
	        <div class="line2"></div>
	        <div class="line3"></div>
	    </div>
	</nav>

	<section class="info">
		<div id="imglibro">
			<img src="Imagenes/cienciaf1.jpg" alt="CARBONO MODIFICADO">
		</div>
		<div id="texto">
			<h2>CARBONO MODIFICADO</h2>
			<li><b>ISBN:</b> 06121</li>
			<li><b>AUTOR:</b> Richard Morgan</li>
			<li><b>GENERO:</b> Ciencia Ficción</li>
			<li><b>EDITORIAL:</b> Victor Gollancz Ltd</li>
		</div>
	</section>

	<div>
		<button id="mostrar" onclick="myFunction()">Mostrar Sinopsis</button> <!--Pequeño boton hecho con JavaScript que nos permite mostrar y ocultar cierta informacion con la interaccion del usuario -->
	</div>
	<div id="sinopsis">
	  	<p>Transcurre quinientos años en el futuro, en un universo en el que el Protectorado de las Naciones Unidas supervisa una serie de planetas extrasolares colonizados por humanos, presentando a Takeshi Kovacs, un antiguo soldado de élite de la ONU y nativo de Harlan, un planeta poblado por un keiretsu japonés con mano de obra de Europa Oriental.La historia se desarrolla en un mundo de estilo ciberpunk y con fuertes características de distopía, en el que la identidad humana puede almacenarse en un medio digital y descargarse en otros cuerpos físicos, comúnmente conocidos como fundas. Los cuerpos o "fundas" pueden ser naturales, siendo la propia o de otras persona, y pueden ser sintéticas...</p>
	</div>	

	<footer>
		<div id="info">
			<nav class="redes">
				<a href="https://www.facebook.com/dudas.pegas.7/" target="_blank"><img src="Imagenes/facebook.png" alt="FACEBOOK"></a>
				<a href="https://twitter.com/hardware_eco" target="_blank"><img src="Imagenes/twitter.png" alt="TWITTER"></a>
				<a href="https://www.instagram.com/eco.hardware/" target="_blank"><img src="Imagenes/instagram.png" alt="INSTAGRAM"></a>
				<a href="https://wa.me/688660077" target="_blank"><img src="Imagenes/whatsapp.png" alt="WHATSAPP"></a>
			</nav>
			<p>BooKiller©</p>
			<div class="w3c">
				<img src="Imagenes/w3ccss.png" alt="W3C CSS">
				<img src="Imagenes/w3chtml.png" alt="W3C HTML">		
			</div>
		</div>
		<h2 id="ubicacion">¿Donde estamos?</h2>
		<div id="mapa"> <!--Importamos el mapa desde Google maps -->
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1451.020328217631!2d-2.951459708438086!3d43.334338297988715!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd4e5b269a943841%3A0xacbb9da78016e9da!2sDegollene-Andramariturri%20Kalea%2C%206-8%2C%2048950%20Erandio%2C%20Bizkaia!5e0!3m2!1ses-419!2ses!4v1612882499670!5m2!1ses-419!2ses" width="400" height="250" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
		</div>
		<div id="extra">
			<div id="faq">
				<h2 id="ubicacion">Preguntas frecuentes</h2>
				<li id="pregunta">¿Se pueden comprar libros online?</li>
				<li id="respuesta">Actualmente no, pero estamos trabajando en ello</li>
				<li id="pregunta">¿Cuantos libros puedo alquilar simultaneamente?</li>
				<li id="respuesta">El numero de libros que se pueden aquilar simultaneamente es 3</li>
				<li id="pregunta">¿Cuantos dias puedo tener un libro alquilado?</li>
				<li id="respuesta">El numero de dias que se puede tener un libro en alquiler es 30</li>
				<li id="pregunta">¿Se relizan entregas de libros a domicilio?</li>
				<li id="respuesta">Debido a la situacion de pandemia que vivimos este servicio no esta disponible</li>

			</div>
			<div id="contacto">
				<h2 id="ubicacion">Contactanos</h2>
				<div id="contacto-interior">
					<img src="Imagenes/casa.png" alt="Direccion"><p>Degollene-Andramariturri Kalea, 6-8</p>
				</div>
				<div id="contacto-interior">
					<img src="Imagenes/reloj.png" alt="Horario"><p>09:30-14:00 16:30-21:00</p>
				</div>
				<div id="contacto-interior">
					<img src="Imagenes/telefono.png" alt="Telefono"><p>688 66 00 77</p>
				</div>
				<div id="contacto-interior">
					<img src="Imagenes/email.png" alt="Email"><p>bookillersl@gmail.com</p>
				</div>
			</div>
		</div>
	</footer>	

	<button class="button-to-top button-to-top_hidden" type="button">⯅</button> <!--Boton  que aparece al hacer scroll y nos lleva a la parte superior -->
	<script src="Javascript/app.js"></script>	
</body>
</html>
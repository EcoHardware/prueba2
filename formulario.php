<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="Estilos/styles.css">
	<link rel="stylesheet" href="Estilos/header.css">
	<link rel="stylesheet" href="Estilos/formulario.css">
	<title>BooKiller - Formulario</title>
</head>
<body>
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

	<div id="main">
  		<h1>Encuesta de satisfacción</h1>
  		<form id="survey-form" action="Php/guardar.php" method="POST">
   			<div class="form-group">
      			<label class="pregunta" for="name">Nombre<span class="obligatorio">*</span></label><br>
      			<input class="field" name="name" type="text" placeholder="Introduce tu nombre" required/> <!--usar el atributo required al final hace que no se pueda dejar en blanco-->
    		</div>
    		<div class="form-group">
     			  <label class="pregunta" for="telephone">Telefono<span class="obligatorio">*</span></label><br>
      			<input class="field" name="telefono" type="number" placeholder="Introduce tu telefono" required/> <!--usar el type email nos obliga a introducir un formato de email valido-->
    		</div>
    		<div class="form-group">
      			<label class="pregunta" for="number">Edad<span class="obligatorio">*</span></label><br>
      			<input class="field" name="number" type="number" min="1" max="99" placeholder="Introduce tu edad" required/> <!--usar el type number hace que solo se puedan introducir numeros-->
    		</div>
    		<div class="form-group">
      			 <label class="pregunta" for="dropdown">Género</label><br> <!--dropdown crear una lista desplegable con distintas opciones-->
      			 <select  class="field" name="dropdown" name="gender">
        			<option value="" disabled selected>Selecciona una opción</option> <!--esto crea un placeholder para el dropdown-->
        			<option value="hombre">Hombre</option> <!--diferentes opciones para el dropdown-->
        			<option value="mujer">Mujer</option>
        			<option value="otro">Otro</option>
      			</select>
    		</div>
    		<div class="form-group">
            <label class="pregunta" for="valoracion">Como valorarías el trabajo de nuestro equipo?<span class="obligatorio">*</span></label>
      			<br>
      			<input class="radio" type="radio" name="valoracion" value="10"> Excelente<br> <!--con class radio solo se puede elegir una opcion-->
      			<input class="radio" type="radio" name="valoracion" value="7"> Bueno<br>
      			<input class="radio" type="radio" name="valoracion" value="5"> Normal<br>
      			<input class="radio" type="radio" name="valoracion" value="3"> Mejorable<br>
      			<input class="radio" type="radio" name="valoracion" value="1"> Malo<br>
    		</div>
    		<div class="form-group">
            <label class="pregunta" for="mejora">Que aspectos mejorarías de nuestra web?<span class="obligatorio">*</span></label>
      			<br>
      			<input type="checkbox" class="checkbox" name="mejoras" value="Diseño"> Diseño<br> <!--con class checkbox se pueden marcar mas de una opcion-->
            <input type="checkbox" class="checkbox" name="mejoras" value="Categorias"> Categorias<br>
      			<input type="checkbox" class="checkbox" name="mejoras" value="Productos"> Mas productos<br>
      			<input type="checkbox" class="checkbox" name="mejoras" value="Contacto"> Mas métodos de contacto<br>
    		</div>
       		<div class="form-group">
            <label class="pregunta" for="recomendacion">Nos recomendarias a un amigo o familiar?<span class="obligatorio">*</span></label>
      			<br>
      			<input type="radio" class="radio" name="recomendacion" value="Si"> Si<br>
            <input type="radio" class="radio" name="recomendacion" value="Quizas"> Quizás<br>
      			<input type="radio" class="radio" name="recomendacion" value="No"> No<br>
    		</div>
    		<div class="form-group">
     	 		   <label for="comentario">Deja un comentario</label>
      			 <textarea name="comment" class="field"></textarea> <!--con class field creamos un campo en el que el usuario puede escribir-->
    		</div>
    		<div class="form-group">
      			<button class="field" id="submit" type="submit" value="enviar">Enviar</button> <!--boton para enviar los resultados del formulario-->
    		</div>
  		</form>
	</div>

  <button class="button-to-top button-to-top_hidden" type="button">⯅</button> <!--Boton  que aparece al hacer scroll y nos lleva a la parte superior -->
	<script src="Javascript/app.js"></script>	
</body>
</html>
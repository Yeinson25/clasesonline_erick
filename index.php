<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="styles.css">
	<style type="text/css" media="screen">
		#mi_estilo li {
			/*cuando es por id*/
			display: inline;
			padding-left: 3px;
			padding-right: 3px;
			background-color: yellow;
		}
		.otros_estilos {
			/*cuando es por clase*/
			font-family: Arial;
		}
		a {
			/*cuando es por etiqueta*/
			text-decoration: none;
			color: red;
			font-family: Arial;
			font-size: 50px;

		}
	</style>
</head>
<body>
	<center><h1>Erick</h1><a href="" title="">Sal de aquí</a></center><!-- títulos -->
	<br><!-- salto de línea -->
	<hr><!-- dibujar una línea -->
	<p class="otros_estilos"><!-- párrafos -->
		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
	</p>
	<!-- viñetas o de listas -->
	<ul id="mi_estilo">
		<li><span> | </span>Primero</li>
		<li><span> | </span>Segundo</li>
		<li><span> | </span>Tercer</li>
	</ul>
	<ol>
		<li>uno</li>
		<li>dos</li>
		<li>tres</li>
	</ol>
	<font>
		<!-- para colocar estilos de letras -->
	</font>
	<!-- atributos de la etiqueta -->
	<a href="enlace_prueba.html" title="Click aquí para probar enlace">Click aquí</a><!-- links/enlaces -->
	<strong>Negrita</strong>
	<b>Otra negrita</b>
	<img src="imagenes/membresia_plus.png" alt="aquí debería aparecer una imagen"><!-- imagen -->
	<video src="" autobuffer autoloop loop controls poster="/images/video.png"></video>
	<section class="otros_estilos">
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>		
	</section>
	<mark>Mi texto</mark><!-- pintar fonde de texto -->
	
	<marquee>Bienvenido</marquee><!-- marquesina para frase que recorra la página de derecha a izquiersa -->

	<!-- Tablas -->
<!-- 
		_____________________________
		|_______|_______|______|_____|
		|_______|_______|______|_____|
		|_______|_______|______|_____|
		|_______|_______|______|_____|
		|_______|_______|______|_____|
		|_______|_______|______|_____|
		|_______|_______|______|_____|
 -->
 <!-- tr son para las filas
 td son para las columnas
 y las etiquetas td van dentro de las etiquetas tr -->
<table bgcolor="#C0C0AB" border="1" align="center" height="100%" width="60%">
	<tr>
		<td bgcolor="yellow" colspan="2">kk</td>
		<td>kk</td>
		<td>kk</td>
	</tr>
	<tr>
		<td>kk</td>
		<td>kk</td>
		<td>kk</td>
		<td rowspan="2" bgcolor="blue">kk</td>
	</tr>
	<tr>
		<td>kk</td>
		<td>kk</td>
		<td>kk</td>
		
	</tr>
	<tr>
		<td>kk</td>
		<td>kk</td>
		<td>kk</td>
		<td>kk</td>
	</tr>
    </table>
    <br> 
<table bgcolor="#C0C0AB" border="1" align="center" height="100%" width="60%" >
	<tr>
		<td>flash</td>
		<td>flash</td>
		<td bgcolor="brown" colspan="2">flash</td>

	</tr>
	<tr>
		<td>flash</td>
		<td rowspan="2" bgcolor="red">flash</td>
		<td>flash</td>
		<td>flash</td>
		
	</tr>
	<tr>
		<td rowspan="2" bgcolor="green">flash</td>
		<td>flash</td>
		<td>flash</td>
		
	</tr>
	<tr>
		
		<td bgcolor="pink" colspan="2">flash</td>
		<td>flash</td>
	</tr>
</table>












<br><br><br><br><br><br><br><br>












</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Curriculum</title>
	<link rel="stylesheet"  type="text/css" href="css/estilos.css">
	
</head>
<body>
<section id="header">
	<div class="mi_header">
		<center>
			<h1>Currículum</h1>
			<br>
			<small><i>Llene sus datos para el registro del curriculum</i></small>
		</center>
	</div>
</section>
<section id="formulario">
	<div class="formulario">
		<table align="center">
			<thead>
				<tr>
					<th colspan="4">Datos Personales</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<th>Nombres</th>
					<td><input type="text" name="nombres" placeholder="Ej: Erick José" required="required" title="Ingrese sus nombres" id="nombres"></td>
					<th>Apellidos</th>
					<td><input type="text" name="apellidos" placeholder="Ej: Carvajal Rojas" required="required" title="Ingrese sus apellidos" id="apellidos"></td>
				</tr>
				<tr>
					<th>Nacionalidad</th>
					<td>
						<input type="radio" name="nacionalidad" checked="checked" value="V" title="Seleccione si es Venezolana(o)"> Venezolana(o) &nbsp;&nbsp;&nbsp;
						<input type="radio" name="nacionalidad" value="E" title="Seleccione si es Extranjera(o)"> Extranjera(o)
					</td>
					<th>Cédula</th>
					<td>
						<input type="number" name="cedula" value="" placeholder="Ej: 12345678" id="cedula" title="Ingrese su cédula" required="required" max="999999999" min="100000">
					</td>
				</tr>
				<tr>
					<th>Estado Civil</th>
					<td colspan="3"> 
						<input type="radio" name="estado_civil" value="soltera(o)" title="seleccione si su estado civil es soltera(o)"> Soltera(o) &nbsp;&nbsp;&nbsp;&nbsp;
						<input type="radio" name="estado_civil" value="casada(o)"  title="seleccione si su estado civil es casada(o)"> Casada(o)&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="radio" name="estado_civil" value="divorciada(o)" title="seleccione si su estado civil es divorciada(o)"> Divorciada(o)&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="radio" name="estado_civil" value="concubina(o)" title="seleccione si su estado civil es concubina(o)"> Concubina(o)&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="radio" name="estado_civil"value="viuda(o)" title="seleccione si su estado civil es viuda(o)"> Viuda(o)
					</td>

				</tr>
			</tbody>
		</table>


	</div>
</section>
<section id="footer">
	
</section>
</body>
</html>

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
				<tr>
					<th>Correo</th>
					<td>
					<input type="email" name="correo" value="" placeholder="Ej: example@example.com" id="correo" title="Ingrese su correo" required= "required">
					</td>
					<th>Número Celular</th>
					<td>
						<select name="codigo" title="Seleccione un código" required="required" >
							<option value="0414">0414</option>
							<option value="0424">0424</option>
							<option value="0416">0416</option>
							<option value="0426">0426</option>
							<option value="0412">0412</option>
						</select>
						<input type="text" name="celular" value="" placeholder="Ej: 1234567" id="celular" title="Ingrese su número celular" required= "required" minlength="7" maxlength="7">
					</td>
				</tr>
				<tr>
					<th>Número Local</th>
					<td>
						<input type="text" name="Local" value="" placeholder="Ej: 1234567" id="local" title="Ingrese su número local" required= "required" minlength="11" maxlength="11">
					</td>
					<th>Dirección</th>
					<td>
					<textarea name="direccion" placeholder="Ej: Av. Sendrea" rows="10" cols="40"></textarea>
					</td>
				</tr>
				<tr>
					<th colspan="4">Datos Académicos</th>
				</tr>

				<tr>
					<th>Año</th>
					<td>
						<input type="number" name="anio1" value="" placeholder="Ej: 1994" id="anio1" title="Ingrese el año del titulo" required="required" minlength="4" maxlength="4">
					</td>
					<th>Titulo</th>
					<td>
						<input type="text" name="titulo1" value="" placeholder="Ej: Ingenieria informática" id="titulo1" title="Ingrese el nombre del titulo" required="required">
					</td>
				</tr>
				<tr>
				<th>Ciudad/País</th>
					<td>
						<input type="text" name="ciudad_pais1" value="" placeholder="Ej: santiago de chile " id="ciudad_pais1" title="Ingrese la ciudad-pais de la universidad" required="required">
					</td>
					<th>Universidad o institución</th>
					<td>
						<input type="text" name="institucion1" value="" placeholder="Ej: Simon Rodriguez" id="institucion1"title="Ingrese el nombre de la universidad" required="required">
					</td>
				</tr>
				<tr>
					<th>Año</th>
					<td>
						<input type="number" name="anio2" value="" placeholder="Ej: 1994" id="anio2" title="Ingrese el año del titulo" required="required" minlength="4" maxlength="4">
					</td>
					<th>Titulo</th>
					<td>
						<input type="text" name="titulo2" value="" placeholder="Ej: Ingenieria informática" id="titulo2" title="Ingrese el nombre del titulo" required="required">
					</td>
				</tr>
				<tr>
				<th>Ciudad/País</th>
					<td>
						<input type="text" name="ciudad_pais2" value="" placeholder="Ej: santiago de chile " id="ciudad_pais2" title="Ingrese la ciudad-pais de la universidad" required="required">
					</td>
					<th>Universidad o institución</th>
					<td>
						<input type="text" name="institucion2" value="" placeholder="Ej: Simon Rodriguez" id="institucion2"title="Ingrese el nombre de la universidad" required="required">
					</td>
				</tr>
				<tr>
					<th>Año</th>
					<td>
						<input type="number" name="anio3" value="" placeholder="Ej: 1994" id="anio3" title="Ingrese el año del titulo" required="required" minlength="4" maxlength="4">
					</td>
					<th>Titulo</th>
					<td>
						<input type="text" name="titulo3" value="" placeholder="Ej: Ingenieria informática" id="titulo3" title="Ingrese el nombre del titulo" required="required">
					</td>
				</tr>
				<tr>
				<th>Ciudad/País</th>
					<td>
						<input type="text" name="ciudad_pais3" value="" placeholder="Ej: santiago de chile " id="ciudad_pais3" title="Ingrese la ciudad-pais de la universidad" required="required">
					</td>
					<th>Universidad o institución</th>
					<td>
						<input type="text" name="institucion3" value="" placeholder="Ej: Simon Rodriguez" id="institucion3"title="Ingrese el nombre de la universidad" required="required">
					</td>
				</tr>
				<tr>
					<th colspan="4">Habilidades Académicas</th>
				</tr>
				<tr>
					<th>Inglés</th>
					<td>
						<input type="range" name="ingles" value="00"  id="ingles" title="Indique su nivel de ingles">
					</td>
				
					<th>Otro Idioma</th>
					<td>
						<input type="range" name="otro_idioma" value="00"  id="otro_idioma" title="Indique su nivel de otro idioma">
						<input type="text" name="idioma"
						id="idioma" title="Indique su otro idioma" placeholder="Ej aleman" required="required" >
					</td>
				</tr>
				<tr>
					<th>Ofimática</th>
					<td colspan="3">
						<ul>
							<li>
								<b>Word</b>
								<input type="range" min="0" max="100"name="word" value="00" id="word" title="Indique su rango de habilidad en word">
							</li>
							<li>
								<b>Excel</b>
								<input type="range" min="0" max="100"name="excel"value="00" id="excel" title="Indique su nivel en excel">
							</li>
							<li>
								<b>PowerPoint</b>
								<input type="range" min="0" max="100"name="powerpoint"value="00" id="powerpoint" title="Indique su nivel de powerpoint">
							</li>
						</ul>
					</td>
					
				</tr>
				<tr>
					<th colspan="4">Referencias</th>
				</tr>
				<tr>
					<th>Nombres</th>
					<td>
						<input type="text" name="nombre" placeholder="Ej Jose Luis" id="nombre" titile="Indique su nombre">
					</td>
					<th>Teléfono</th>
					<td>
						<input type="text" name="telefono" placeholder="Ej 04140281235" id="telefono" title="Indique el número de teléfono">
					</td>
				</tr>
				<tr>
					<th>Nombres</th>
					<td>
						<input type="text" name="nombre2" placeholder="Ej Pedro Jose" id="nombre2" title="Indique su nombre">
					</td>
					<th>Teléfono</th>
					<td>
						<input type="text" name="teléfono2" placeholder="Ej 04140289423" id="teléfono2" title="Indique el número de teléfono">
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

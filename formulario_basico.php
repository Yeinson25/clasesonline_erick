<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<h1>Formulario básico</h1>
<br>
<form name="formulario" action="#" method="post" accept-charset="utf-8">
	<table width="50%" >
		<caption>Mostrando elementos de formularios</caption>
		<thead>
			<tr>
				<th>Etiqueta</th>
				<th>Elemento</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>text</td>
				<td><input type="text" name="apellidos" value="" placeholder="Ej: Martínez" id="apellidos" title="Ingrese sus apellidos" maxlength="5" max="5" required="required" ></td>
			</tr>
			<tr>
				<td>number</td>
				<td><input type="number" name="edad" value="" placeholder="Ej: 20" id="edad" title="Ingrese su edad" required="required" max="99" min="1"></td>
			</tr>
			<tr>
				<td>email</td>
				<td><input type="email" name="correo" value="" placeholder="Ej: example@example.com" id="correo" title="Ingrese su correo" required="required" ></td>
			</tr>
			<tr>
				<td>color</td>
				<td><input type="color" name="color" value="" placeholder="Ej: 20" id="color" title="Ingrese su color favorito" required="required"></td>
			</tr>
			<tr>
				<td>search</td>
				<td><input type="search" name="busqueda" value="" placeholder="Ej: 20" id="busqueda" title="Ingrese su busqueda" required="required"></td>
			</tr>
			<tr>
				<td>password</td>
				<td><input type="password" name="clave" value="" placeholder="Ej: Miclave" id="clave" title="Ingrese su clave" required="required" max="99" min="1"></td>
			</tr>
			<tr>
				<td>file</td>
				<td><input type="file" name="mi_archivo" title="Ingrese el archivo" multiple="multiple"></td>
			</tr>
			<tr>
				<td>range</td>
				<td><input type="range" name="rango" value="60"></td>
			</tr>
			<tr>
				<td>radio Cesar  </td>
				<td>
					<input type="radio" name="sexo" checked="checked" value="M" title="Seleccione si es Masculino"> Masculino &nbsp;&nbsp;&nbsp;
					<input type="radio" name="sexo" value="F" title="Seleccione si es Femenino"> Femenino &nbsp;&nbsp;&nbsp;
					<input type="radio" name="sexo" value="PND" title="Seleccione si Prefiere NO decir"> Prefiero No decir</td>
			</tr>
			<tr>
				<td>checkbox</td>
				<td>
					<input type="checkbox" name="manzana" value="manzana" title="Seleccione si le gusta la manzana"> Manzana <br>
					<input type="checkbox" name="pera" value="pera" title="Seleccione si le gusta la Pera"> Pera <br>
					<input type="checkbox" name="uva" value="uva" title="Seleccione si le gusta la Uva"> Uva <br>
					<input type="checkbox" name="naranja" value="naranja" title="Seleccione si le gusta la Naranja" checked="checked"> Naranja <br>

				</td>
			</tr>
			<tr>
				<td>select</td>
				<td>
					<select name="frutas" title="Seleccione una fruta" required="required" >
						<option value="manzana">Manzana</option>
						<option value="pera">Pera</option>
						<option value="uva">Uva</option>
						<option value="naranja">Naranja</option>
					</select>

				</td>
			</tr>
			<tr>
				<td>select multiple</td>
				<td>
					<select name="frutas" title="Seleccione una fruta" multiple="multiple" required="required" >
						<option value="manzana">Manzana</option>
						<option value="pera">Pera</option>
						<option value="uva">Uva</option>
						<option value="naranja">Naranja</option>
					</select>

				</td>
			</tr>
			<tr>
				<td>textarea</td>
				<td>
					<textarea name="direccion" placeholder="Ej: Av. Sendrea" rows="5" cols="30"></textarea>
				</td>
			</tr>
			<tr>
				<td>button atributo</td>
				<td>
					<input type="button" name="click" value="click">
				</td>
			</tr>
			<tr>
				<td>button etiqueta type=reset</td>
				<td>
					<button type="reset" name="limpiar">Limpiar</button>

				</td>
			</tr>
			<tr>
				<td>submit input</td>
				<td>
					<input type="submit" name="enviar" value="enviar">
				</td>
			</tr>
			<tr>
				<td>reset input</td>
				<td>
					<input type="reset" name="limpiar2" value="limpiar2">
				</td>
			</tr>
		</tbody>
	</table>
</form>

<br><br><br><br><br><br><br><br><br>



</body>
</html>
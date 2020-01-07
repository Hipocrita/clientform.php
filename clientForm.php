	<html>
	<head>
		<title>Hotel Roberto Cifre</title>
		<body>
			<h1>Hotel Cifre
			</h1>
			<p>
			<h1>
			Registrese para ser cliente
			</h1>
			<br>
			<form action="formValidation.php" method="POST">
			<p>
			<label for="nombre">Nombre</label>
			<input type="text" name="nombre">
			<p>
			<label for="apellidos">Apellidos:</label>
			<input type="text" name="apellidos">
			<p>
			<label for="email">Email</label>
			<input type="text" name="email">
			<p>
			<label for="edad">Edad:</label>
			<input type"integer" name="edad" min="1" max="120">
			<p>
			<label for="pais">Pais de nacimiento:</label>
			<input type="text" name="país">
			<p>
			<label for="entrada">Fecha de entrada:</label>
			<input type="date" name="entrada" id="entrada"
			min="date">
			<br>
			<label for="end">Fecha de salida:</label>
			<input type="date" name="salida" id="salida"
			min="date">
			<p>
			<label for="deposito">Deposito para reserva de la habitación:</label>
			<input type="number" id="deposito" name="deposito" min="" max="">
			<p>
			Género
			<br>
			<select name="genero" multiple>
				<option value="femenino">Femenino</option>
				<option value="masculino">Masculino</option>
			</select>
			<p>
			Tipo de habitación
			<br>
			<select name="habitacion" multiple>
				<option value="individual">Individual</option>
				<option value="doble">Doble</option>
				<option value="separadas">Dos camas separadas</option>
				<option value="triple">Tres camas</option>
				<option value="cuadruple">Cuatro camas</option>
			</select>
			<p>			
			<label for="condiciones">*Acepto la <a href="https://www.websiteplanet.com/es/blog/haz-que-tu-politica-de-privacidad-cumpla-con-el-gdpr/">política de privacidad</a></label>
			<input type="checkbox" name="condiciones" required>
			<input type="submit" value="Enviar">
		</form>
		</body>
	</head>
	</html>
		
			
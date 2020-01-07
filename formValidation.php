<?php
// Public static final - Variables fijas
$Dmax = 100;

// Variables - Tipo de datos
$nombre=$_POST["nombre"];
$apellidos=$_POST["apellidos"];
$contador=$_POST["apellidos"];
$email=$_POST["email"];
$edad=$_POST["edad"];
$pais=$_POST["pais"];
$entrada=["entrada"];
$salida=["salida"];
$deposito=$_POST["deposito"];
$genero=["genero"];
$habitacion=["habitacion"];

hoy
today

if(empty($nombre)){
	echo "Rellene el campo Nombre";
	<br>
}else{ 
	echo "Etiqueta nombre correcta";
}
<p>
if (empty($_POST['apellidos'])){
	echo "Rellene el campo Apellidos";
	<br>
}elseif (str_word_count($contador)==2) {
	echo "Etiqueta apellidos correcta";
	<br>
}else{
	echo "Escriba sus dos apellidos por favor";
}
<p>
if (empty($email)){
	echo "Rellene el campo Email";
	<br>
}else{
	echo "Etiqueta email correcta";
}
<p>

if(empty($edad)){
	echo "Rellene el campo Edad";
	<br>
}else{ 
	echo "Etiqueta edad correcta";
}
<p>

if(empty($pais)){
	echo "Rellene el campo País de nacimeiento";
	<br>
}else{ 
	echo "Etiqueta país correcta";
}
<p>

if(empty($_POST["entrada"])) {
	echo "Rellene el campo Fecha de entrada";
	<br>
}elseif (($_POST["entrada"])) > ($_POST["salida"])) {
	echo "La fecha de salida tiene que ser posterior a la entrada";
	<br>

}else{
	echo "Etiqueta fecha de entrada correcta";
}
<p>

if(empty($_POST["salida"])) {
	echo "Rellene el campo Fecha de salida";
	<br>
}elseif (($_POST["entrada"])) > ($_POST["salida"])) {
	echo "La fecha de salida tiene que ser posterior a la entrada";
	<br>

}else{
	echo "Etiqueta fecha de salida correcta";
}
<p>

if (($_POST["deposito"]) < $Dmax) {
	echo "La  reserva de la habitación tiene que ser mínimo de 100€";
	<br>
}else{
	echo "Reserva realizada correctamente, abono anticipado de %deposito € - (($_POST['deposito']*0.85148 £";
}
<p>

if(empty($_POST["genero"])) {
	echo "Rellene el campo Genero";
	<br>
}else{ 
	echo "Etiqueta género correcta";
}
<p>

if (empty($_POST["habitacion"])) {
	echo "Rellene el campo Tipo de habitación";
	<br>
}else{
	echo "Etiqueta habitación correcta";
}

?>
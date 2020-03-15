<?php<?php
	//conexion con la base de datos y el servidor
	$link = mysql_connect("localhost","root","") or die("<h2>No se encuentra el servidor</h2>");
	$db = mysql_select_db("formulario",$link) or die("<h2>Error de Conexion</h2>");

	//obtenemos los valores del formulario
	$email = $_POST['emailuser'];
	$pass = $_POST['pass'];
	

	//Obtiene la longitus de un string
	$req = (strlen($email)*strlen($pass)*)) or die("");

	//se confirma la contraseña
	if ($pass != $rpass) {
		die('Las contraseñas no coinciden, Verifique <br /> <a href="index.html">Volver</a>');
	}

	//se encripta la contraseña
	$contraseñaUser = md5($pass);

	//ingresamos la informacion a la base de datos
	mysql_query("INSERT INTO datos VALUES('','$nombres','$email','$passwordUser')",$link) or die("<h2>Error Guardando los datos</h2>");
	echo'
		<script>
			location.href="index.html";
		</script>
	'


?>
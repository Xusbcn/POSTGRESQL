
<?php 
session_start(); 
session_destroy(); 
?>
<html>
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
</head> 
<body> 
<h1>TIENDA APPLE</h1> 
<form action="productos.php" method="post"> 
Introducir Nombre	<input name="nombre" type="text"><br>
introducir Email	<input name="mail" type="text"><br>
introducir Telefono	<input name="tel" type="text"><br>
introducir Direccion Postal	<input name="postal" type="text"><br>
<input name="ingresar" type="Submit" value="ingresar"> 
</form> 
</body> 
</html> 

<?php 
error_reporting(0);
session_start(); //Inicio sesion 


if(isset($_POST['nombre'])){ 
$nombre = $_POST['nombre']; 
$_SESSION['usuario'] = $nombre; 

 
}

if(isset($_POST['mail'])){ 
$mail = $_POST['mail']; 
$_SESSION['correo'] = $mail; 
}

if(isset($_POST['tel'])){ 
$telefono = $_POST['tel']; 
$_SESSION['telefono'] = $telefono; 
}

if(isset($_POST['postal'])){ 
$cp = $_POST['postal']; 
$_SESSION['cp'] = $cp; 
}




if(isset($_POST['agregar'])){ //Si se envió el primer formulario 
$claves = array_keys($_POST); 
$producto = $claves[1]; 
if(!is_array($_SESSION['pedido'])) //Si no es un array 
{
$_SESSION['pedido'] = array();
}
if(array_key_exists("$producto",$_SESSION['pedido'])){ 
$cantidad = $_SESSION['pedido']["$producto"]; 
$_SESSION['pedido']["$producto"] = ++$cantidad; 
} 
else { 
$_SESSION['pedido']["$producto"] = 1; 
} 
} 

?> 


<!DOCTYPE html>
<html>
<head>
	<title></title>

</head>
<body>

<form action="productos.php" method="post"> 
<input type="hidden" name="agregar"> 


Producto: <b>IPHONE</b>
<input type="submit" name="iphone" id="button1" value="Añadir al carrito"><br><br>


Producto: <b>MAC Pro</b>
<input type="submit" name="mac" id="button2" value="Añadir al carrito"><br><br>

Producto: <b>IPOD</b>
<input type="submit" name="ipod" id="button3" value="Añadir al carrito"><br><br>

Producto: <b>IPAD</b>
<input type="submit" name="ipad" id="button4" value="Añadir al carrito"><br><br>

Producto: <b>CARGADOR</b>
<input type="submit" name="cargador" id="button5" value="Añadir al carrito"><br><br>



</form> 
<form action="productos.php" method="get"> 
<h1>TU PEDIDO</h1> 


<?php 
if(!empty($_SESSION['pedido'])){ //Si hay productos en el carrito
foreach($_SESSION['pedido'] as $prod => $unidades) { 
echo "$unidades unidades del producto $prod<br>"; }
//echo "<input type='Submit' name='$prod' value='Quitar'><br>"; } 
?> 

</form> 
<form action="finalizar.php" method="post"> 
<input type='Submit' name='Comprar' value="Confirmar compra"> 
</form> 
<?php 
} 
?> 
</body>
</html>

<?php 

session_start(); 

echo "<h1>Muchas gracias por su compra su compra señor " .$_SESSION['usuario']. " Acaba de comprar:</h1>"; 


foreach($_SESSION['pedido'] as $productos => $unidades) { 
echo "<p>$unidades $productos</p>"; 
} 
?>
<h2>Gracias por su compra</h2> 
<h2>Vuelva pronto</h2> 
<a href="usuari.php">SALIR</a>
<!--Ponemos el link hacia la primera pantalla porque el cliente pueda generar un nuevo pedido.-->
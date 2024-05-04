<?php 
 error_reporting(0); 
 session_start(); 
?> 
<!DOCTYPE html> 
<html> 
 <head> 
 <meta charset="UTF-8"> 
 <title></title> 
 <link href="Estilo.css" rel="stylesheet"> 
 </head> 
 <body> 
 <header> 
 <?php include 'encabezado.php'; ?> 
 </header> 
 <section> 
 <table border="1" width="600" cellspacing="10" cellpadding="1"> 
 <tr> 
 <th>DESCRIPCION DEL PRODUCTO</th> 
 <th>STOCK</th> 
 <th>PRECIO</th> 
 </tr> 
 <?php 
 
 if(isset($_SESSION['misProductos'])){ 
    foreach ($_SESSION['misProductos'] as $producto) { 
    ?>  
    <tr> 
    <td><?php echo $producto['descripción']; ?></td> 
    <td><?php echo $producto['stock']; ?></td> 
    <td><?php echo '$'.number_format($producto['precio'],2); ?></td> 
    </tr> 
    <?php 
    } 
   }else 
   echo '<p id="centrado">No hay productos en la canasta..!!!</p>'; 
   ?> 
   </table> 
   </section> 
   <footer> 
   <p id="centrado"> 
   <a href="index.php">Seguir comprando..!!</a>| 
   <a href="destruir.php">Cerrar sesión</a> 
   </p>  
   <?php include 'pie.php'; ?> 
   </footer> 
   </body> 
   </html>
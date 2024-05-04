<?php 
session_start(); 
error_reporting(0); 
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
            if (isset($_POST['txtDescripcion'])) { 
                if (isset($_SESSION['misProductos'])) 
                $productos = $_SESSION['misProductos']; 

            $productos[$_POST['txtDescripcion']] = array( 
                'descripción' => $_POST['txtDescripcion'], 
                'stock' => $_POST['txtStock'], 
                'precio' => $_POST['txtPrecio'] 
            ); 
            $_SESSION['misProductos'] = $productos; 
        } 
        header('location:listadoProductos.php'); 
        ?>  
</table> 
</section> 
<footer> 
<p id="centrado"> 
    <a href="index.php">Seguir comprando..!!</a> 
</p>  
<?php include 'pie.php'; ?> 
</footer> 
</body> 
</html>
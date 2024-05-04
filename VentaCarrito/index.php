<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href="estilo.css" rel="stylesheet">
</head>
<body>
    <header>
        <?php include 'encabezado.php'; ?>
    </header>
    <section>
    <?php
        error_reporting(0);
        session_start();
        include 'capturaDatos.php'; 
        $producto = getProducto();
        
        include 'seleccionaProducto.php';       
    ?>
        <form name="frmSeleccion"method="POST" action='index.php'>
        <table border="1" width="550" cellspacing="10" cellpadding="1">
            <tr>
                <td width="200">Seleccione un producto</td>
                <td width="300">
                    <select name="selProducto" onchange="this.form.submit()">
                        <option value="p001" <?php echo $selP1;?>>Gaseosa</option>
                        <option value="p002" <?php echo $selP2;?>>Mayonesa en sobre</option>
                        <option value="p003" <?php echo $selP3;?>>Chocolate para niños</option>
                        <option value="p004" <?php echo $selP4;?>>Fideos</option>
                        <option value="p005" <?php echo $selP5;?>>Conservas</option>
                        <option value="p006" <?php echo $selP6;?>>Chocolate</option>
                        <option value="p007" <?php echo $selP7;?>>Cafe 300mg.</option>
                        <option value="p008" <?php echo $selP8;?>>Mayonesa pote</option>
                        <option value="p009" <?php echo $selP9;?>>Crema Dental</option>
                        <option value="p010" <?php echo $selP10;?>>Cubito de pollo</option>
                    </select>
                </td>
                <td rowspan="3">
                    <?php
                        if ($_POST[selProducto]) { ?>
                            <img src="fotosProductos/<?php echo getProducto();?>.jpg"
                                 width="120" height="120"/>
                </td>
            </tr>
            <tr>
                <td>Cantidad</td>
                <td><input type="text" name="txtCantidad" value="" /></td>
                <td></td>
            </tr>
            <tr>
                <td id="btn"><input type="submit" value="Comprar"
                            onclick = "this.form.action = 'canasta.php'"
                            name='btnComprar'/></td>
                <td></td>
                <td></td>
            </tr>
        </table>
        </form>
    </section>
    <footer>
        <?php include('pie.php'); ?>
    </footer>
    <?php } ?>
</body>
</html>
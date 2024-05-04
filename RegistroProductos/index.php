<!DOCTYPE html> 
<html> 
 
<head> 
    <meta charset="UTF-8"> 
    <title></title> 
    <link href="Estilo.css" rel="stylesheet"> 
</head> 
 
<body> 
    <header> 
        <?php error_reporting(0); 
        include 'encabezado.php'; ?> 
    </header> 
    <section> 
        <?php 
        include('capturaDatos.php'); 
        ?> 
        <form name="frmPrincipal" method="POST" 
action="agregarProducto.php"> 
            <table border="1" width="100" cellspacing="0" cellpadding="1"> 
                <tr> 
                    <td id="a">Descripción del Producto</td> 
                    <td><input type="text" name="txtDescripcion" 
value="<?php echo getDescripcion(); ?>" size="60" /> 
                    </td> 
                </tr> 
                <tr> 
                    <td id="a">Stock</td> 
                    <td><input type="text" name="txtStock" value="<?php echo 
getStock(); ?>" /></td> 
                </tr> 
                <tr> 
                    <td id="a">Precio de producto</td> 
                    <td><input type="text" name="txtPrecio" value="<?php 
echo getPrecio(); ?>" /></td> 

</tr> 
                <tr> 
                    <td><input type="submit" name="btnListado" 
onclick="this.form.action = 'listadoProductos.php'" 
                            value="Ver listado de productos" /> 
                    </td> 
                    <td id="btn"><input type="submit" name="btnRegistrar" 
onclick="this.form.action = 'agregarProducto.php'" 
                            value="Registrar producto" /></td> 
                </tr> 
            </table> 
        </form> 
    </section> 
    <footer> 
        <?php include 'pie.php'; ?> 
    </footer> 
</body> 
 
</html> 

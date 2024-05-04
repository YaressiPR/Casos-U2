<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="estilo_index.css" />
</head>
<body>
    <section>
        <?php
        error_reporting(0);
        session_start();

        if (!isset($_SESSION['admin'])){
        ?>
            <form name="frmLogin" method="POST" action="login.php">
            <table border="3" width="100" cellspacing="0" cellpadding="1">
            <tr>
                <td colspan="3">
                    <p id="titulo">Acesso</p>
                </td>
            </tr>
            <tr>
                <td id="derecha" width="150">Usuario</td>
                <td><input type="text" name="txtUsuario"
                           value="" /></td>
                <td id=centrado rowspan="4">
                    <img src="index.png" width="200" height="200" />
                </td>
            </tr>
            <tr>
                <td id="derecha">Clave</td>
                <td>
                    <input type="password" name="txtClave" maxlength="4" />
                </td>
            </tr>
            <tr>
                <td></td>
                <td id="box">
                    <input type="checkbox" name="" value="ON" />
                           Recordar la clave
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input id="boton" type="submit"
                           name="btnLogin" value=" LOGIN " />
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                <?php
                    }else{
                        header('location:principal.php');
                    }
                    if (isset($_SESSION['error'])){
                        echo $_SESSION['error'];
                        unset($_SESSION['error']);
                    }
                ?>
                </td>
            </tr>
            </table>
            </form>
    </section>
</body>
</html>
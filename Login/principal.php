<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONTROL DE CLIENTES</title>
    <link rel="stylesheet" href="estilo_index.css" />
</head>
<body>
    <header>
        <?php
            session_start();
            require 'encabezado.php';
            echo "<p id='centrado'>";
            echo 'Bienvenido > '.$_SESSION['admin'].'<br>';
            echo "|<a href='cerrar.php'> Cerrar Sesion </a>|";
            echo '</p>';
        ?>
    </header>
    <section>
        <table border="1" width="550" cellspacing="5">
            <tr>
                <td><a href="#">
                        <img src="icono_cliente.png"
                             width="60" height="60" /></a>
                </td>
                <td><a href="#">Registro de clientes</a></td>
            </tr>
            <tr>
                <td><a href="#">
                    <img src="icono_lista.png"
                         width="60" height="60" /></a>
                </td>
                <td><a href="#">>Listado de Clientes</a></td>
            </tr>
            <tr>
                <td><a href="javascript:close()">
                        <img src="icono_salida.png"
                             width="60" height="60" /></a>
                </td>
                <td><a href="javascript:close()">Salir</a></td>
            </tr>
        </table>
    </section>
    <footer>
    <?php require 'pie.php'; ?>
    </footer>
</body>
</html>
<?php
    session_start();
?>

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
        <form method="POST" action="pregunta1.php">
            <table border="1" width="700"
                   cellspacing="10" cellpadding="0">
            <tr>
                <td id="c1">Nombres y apellidos</td>
                <td><input type="text" name="txtNombres"
                           size="50" /></td>
            </tr>
            <tr>
                <td id="c1">Numero DNI</td>
                <td><input type="text" name="txtDNI"
                           size="30" maxlength="8" /></td>
            </tr>
            <tr>
                <td id="c1">Empezar con la encuesta >>></td>
                <td id ="btn"><input type="submit" value="Encuesta" /></td>
            </tr>
            </table>
        </form>
    </section>
    <footer>
    <?php include 'pie.php';?>
    </footer>
</body>
</html>
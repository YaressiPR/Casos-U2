<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="estilo.css" rel="stylesheet">
    </head>
    <body>
        <header>
            <h3 id="centrado">VOTACION DE CANDIDATAS</h3>
            <h2 id="titulo">REYNA DE PRIMAVERA 2015</h2>
        </header>  
        <section>
            <?php
                error_reporting(0);
                session_start();
                $total = $_SESSION['total'];
                $pcandidata1 = ($_SESSION['candidata1']*100)/$total;
                $pcandidata2 = ($_SESSION['candidata2']*100)/$total;
                $pcandidata3 = ($_SESSION['candidata3']*100)/$total;
                $pcandidata4 = ($_SESSION['candidata4']*100)/$total;
            ?>
            <form name="frmVotacion" method="POST" action="conteo.php">
                <table border="1" width="600"
                        cellspacing="10" cellpadding="1">
                <tr>
                    <td id="centrado"><img src="candidata1.png" width="130" height="140"/></td>
                    <td id="centrado"><img src="candidata2.png" width="130" height="140"/></td>
                </tr>
                <tr>
                    <td id="centrado">Marisol Romero 19 años<br>
                    <input type="submit" value="Votar" name="btnBoton1"/><br>
                    TOTAL DE VOTOS: <?php echo $_SESSION['candidata1']; ?><br>
                    PORCENTAJE DE VOTOS: <?php echo round($pcandidata1,2);?>%
                    </td>
                    <td id="centrado">Cesia Alfaro 22 años<br>
                    <input type="submit" value="Votar" name="btnBoton2" /><br>
                    TOTAL DE VOTOS:<?php echo $_SESSION['candidata2']; ?><br>
                    PORCENTAJE DE VOTOS:<?php echo round($pcandidata2,2); ?>%
                    </td>
                </tr>
                <tr>
                    <td id="centrado"><img src="candidata3.png" width="130" height="140"/></td>
                    <td id="centrado"><img src="candidata4.png" width="130" height="140"/></td>
                </tr>
                <tr>
                    <td id="centrado">Micaela Borja 20 años<br>
                    <input type="submit" value="Votar" name="btnBoton3" /><br>
                    TOTAL DE VOTOS:<?php echo $_SESSION['candidata3'];?><br>
                    PORCENTAJE DE VOTOS:<?php echo round($pcandidata3,2);?>%
                    </td>   
                    <td id="centrado">Karla Guerrero 21 años<br>
                    <input type="submit" value="Votar" name="btnBoton4" /><br>
                    TOTAL DE VOTOS: <?php echo $_SESSION['candidata4'];?><br>
                    PORCENTAJE DE VOTOS:<?php echo round($pcandidata4,2);?>%
                    </td>
                </tr>
                </table>
            </form>
            <?php
                $arreglo = array('Marisol Romero'=>$_SESSION['candidata1'],
                                 'Cesia Alfaro'=>$_SESSION['candidata2'],
                                 'Micaela Borja'=>$_SESSION['candidata3'],
                                 'Karla Guerrero'=>$_SESSION['candidata4']);
                arsort($arreglo);
                reset($arreglo);
                list($candidata,$puntaje)=each($arreglo);
            ?>
            <table border="1" width="600" cellspacing="10" cellpadding="1">
                <tr>
                    <td id="ganadora">TOTAL DE VOTANTES:
                        <?php echo $_SESSION['total']; ?>
                    </td>
                </tr>
                <tr>
                    <td id="ganadora">GANADORA:<?php echo $candidata; ?>
                        (<?php echo $puntaje; ?> votos)
                    </td>
                </tr>
            </table>
        </section>
        <footer>
            <h5 id="centrado">Todos los derechos reservados @2015
                                Diseñado por M@nuel Torres</h5>
        </footer>
    </body>
</html>

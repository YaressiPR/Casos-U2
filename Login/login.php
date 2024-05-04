<?php
    session_start();

    if ($_POST['txtUsuario']=='pmtorres' and $_POST['txtClave']=='php')
        $_SESSION['admin']=$_POST['txtUsuario'];
    else
        $_SESSION['error']='Usuario incorrecto';

    header('location:index.php');
?>
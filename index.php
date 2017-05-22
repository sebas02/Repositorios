<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script src="Recursos/JS/gestionSignOff.js" type="text/javascript"></script>
        <script src="Recursos/JS/gestionLogIn.js" type="text/javascript"></script>
        <script src="Recursos/JS/gestionProspecto.js" type="text/javascript"></script>
        <link href="Recursos/CSS/estilos.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <?php
        session_start();
        if (isset($_SESSION['nickname'])) {
            include 'Vista/masterPage.php';
        } else {
            include 'Vista/logIn.php';
            echo 'Holaaaaaaa Mundoooo';
        }
        ?>
    </body>
</html>

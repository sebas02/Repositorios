
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
            echo 'holaaaa todos jajajaja';
			echo 'holllllalalallalalalalal';
        }
        ?>
    </body>
</html>

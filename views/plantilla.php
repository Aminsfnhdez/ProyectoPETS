<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Backend Admin</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <?php
        include "modulos/header.php";

        include "modulos/menu.php";

        include "modulos/footer.php";

        if(isset($_GET["ruta"])){

            if ($_GET["ruta"] == "inicio" || 
                $_GET["ruta"] == "perfil" || 
                $_GET["ruta"] == "mascotas" || 
                $_GET["ruta"] == "medicamentos") {
                include "modulos/" . $_GET["ruta"] . ".php";
            }

        }
    ?>
</body>
</html>
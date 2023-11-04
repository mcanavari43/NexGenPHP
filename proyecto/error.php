<?php 
require_once('conf/globalConfig.php');
 ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ---IMPORT HEADERS--- -->
    <?php require('layout/_headers.php') ?>
    <!-- ---IMPORT HEADERS--- -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NextGen - Contacto</title>
</head>

<body>
    <!-- ---IMPORT NAV--- -->
    <?php require('layout/_navbar.php') ?>
    <!-- ---IMPORT NAV--- -->

    <!-- -----------------------------BODY----------------------------- -->

    <div class="contentCustomized animate__animated animate__bounceIn">
        <div class="container containerCustomized mt-8">
            <h1>Disculpe las molestias</h1>

        </div>

        <div class="container containerCustomized mt-3">

            <div class="error-box">
                <img src="img/error.gif"></img>
                <div class="error-text">
                    <p>Estamos realizando algunas tareas de mantenimiento.</p>
                    <p>Por favor regrese en unos minutos</p>
                    <br>
                    <h4>Enlaces recomendados:</h4>
                    <a href="<?php echo BASE_URL ?>empresa.php">> Nuestra empresa</a>
                </div>
            </div>
        </div>
    </div>


    <!-- -----------------------------BODY----------------------------- -->

    <!-- ---IMPORT FOOTER--- -->
    <?php require('layout/_footer.php') ?>
    <!-- ---IMPORT FOOTER--- -->
    
    <!-- ---IMPORT WHATSAPP--- -->
    <?php require('layout/_whatsappIcon.php') ?>
    <!-- ---IMPORT WHATSAPP--- -->

    <!-- ---IMPORT JS--- -->
    <?php require('js/_bootstrap.js') ?>
    <!-- ---IMPORT JS--- -->
</body>

</html>
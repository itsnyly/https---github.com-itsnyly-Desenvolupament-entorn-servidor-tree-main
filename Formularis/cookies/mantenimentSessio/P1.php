<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pàgina 1</title>
</head>
<body>
    <h1>Pàgina 1</h1>
    <?php
        $_SESSION["elMeuNom"] = "Nil";
        $_SESSION["elMeuCognom"] = "Torrent";
    ?>
</body>
</html>
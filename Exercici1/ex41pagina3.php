<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina3</title>
</head>
<body>
    <p>Nombre ocult:</p>
    <?php
        session_start();
        echo $_SESSION["ocult"];
    ?>
</body>
</html>
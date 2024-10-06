<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex2 - Pg2</title>
</head>
<body>
    <h1>ENREGISTRA FRASE 2</h1>
    <?php
        session_start();
        $_SESSION["frase1"] = $_POST["frase1"];
    ?>
    <form method="post" action="ex42pagina3.php">
        <input type="text" name="frase2" required>
        <input type="submit" value="Enregistra">
    </form>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex2 - Pg3</title>
</head>
<body>
    <h1></h1>
    <a href="ex42pagina1.php">Retorna a la pàgina 1</a>
    <?php
        session_start();
        $_SESSION["frase2"] = $_POST["frase2"];

        $array1 = explode(" ", $_SESSION["frase1"]);
        $array2 = explode(" ", $_SESSION["frase2"]);

        $common_words = array_intersect($array1, $array2);

        if (empty($common_words)) {
            echo "<p>No hi ha cap coincidència.</p>";
        } else {
            foreach ($common_words as $word) {
                echo "<p>La paraula '$word' està a les dues frases.</p>";
            }
        }

    ?>
</body>
</html>
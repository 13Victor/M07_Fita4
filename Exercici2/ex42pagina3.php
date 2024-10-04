<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina3</title>
</head>
<body>
    <p>Coincidencies:</p>
    <a href="ex42pagina1.php">Retorna a la pàgina 1</a>
    <?php
        session_start();
        $_SESSION["frase2"] = $_POST["frase2"];

        $array1 = explode(" ", $_SESSION["frase1"]);
        $array2 = explode(" ", $_SESSION["frase2"]);

        $common_words = array_intersect($array1, $array2);

        if (empty($common_words)) {
            echo "No hi ha cap coincidència";
        } else {
            foreach ($common_words as $word) {
                echo "La paraula $word està a les dues frases<br>";
            }
        }

    ?>
</body>
</html>
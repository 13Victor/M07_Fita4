<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex1 - Pg3</title>
</head>
<body>
    <h1>ENDEVINA EL NOMBRE</h1>    
    
    <form method="post" action="ex41pagina3.php">
        <label for="endevina">Introdueix un nombre:</label>
        <input type="number" name="endevina" required>
        <input type="submit" value="Endevina">
    </form>

    <?php

    session_start();
    if (isset($_POST["endevina"])) {

        $endevina = (int)$_POST["endevina"];
        $ocult = $_SESSION["ocult"];
        if ($endevina < $ocult) {
            echo "<p>El nombre és més gran que $endevina.</p>";
        } elseif ($endevina > $ocult) {
            echo "<p>El nombre és més petit que $endevina.</p>";
        } else {
            echo "<p>Felicitats! Has endevinat el nombre: $ocult.</p>";
            echo '<a href="ex41pagina1.php">Jugar de nou</a>';
            exit();
        }
    }
    ?>

</body>
</html>

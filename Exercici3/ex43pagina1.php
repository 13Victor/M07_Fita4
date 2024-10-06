<?php
    session_start();

    if (isset($_POST['lletra'])) {
        $lletra = $_POST['lletra'];
        
        if (!isset($_SESSION['escrit'])) {
            $_SESSION['escrit'] = "";
        }

        $_SESSION['escrit'] .= $lletra;
    }

    if (isset($_POST['accio']) && $_POST['accio'] === 'esborrar') {
        $_SESSION['escrit'] = "";
    }
?>

<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex3</title>
    <style>

        .teclat {
            margin-top: 20px;
            width: 550px;
        }
        .tecla {
            font-size: 20px;
            width: 50px;
            height: 50px;
            margin: 5px;
            border: 1px solid #000;
            cursor: pointer;
            border-radius: 10px;
            background-color: #f0f0f0;
        }
        .tecla:hover {
            background-color: #ccc;
        }
        .teclat-form {
            display: inline-block;
        }
    </style>
</head>
<body>

    <h1>Màquina d'escriure virtual</h1>

    <input type="text" value="<?php 
        if (isset($_SESSION['escrit'])) {
            echo $_SESSION['escrit'];
        } else {
            echo '';
        }
    ?>" readonly size="50">
    <div class="teclat">
        <?php
        $lletres = range('A', 'Z');

        foreach ($lletres as $lletra) {
            echo "<form class='teclat-form' method='post' action='ex43pagina1.php'>";
            echo "<input type='hidden' name='lletra' value='$lletra'>";
            echo "<input type='submit' class='tecla' value='$lletra'>";
            echo "</form>";
        }
        echo "<form class='teclat-form' method='post' action='ex43pagina1.php'>";
        echo "<input type='hidden' name='lletra' value=' '>";
        echo "<input type='submit' class='tecla' value='_'>";
        echo "</form>";
        
        ?>
    </div>

    <div style="margin-top: 20px;">
        <form method="post" action="ex43pagina1.php">
            <input type="hidden" name="accio" value="esborrar">
            <input type="submit" value="Esborrar text">
        </form>
    </div>

</body>
</html>

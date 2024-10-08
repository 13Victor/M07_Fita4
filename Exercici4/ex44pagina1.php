<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #display_texto {
            width: 500px;
            background: #999;
            border-radius: 10px;
            padding: 10px;
        }
    </style>
</head>
<body>
    <form method="post">
        <textarea name="text" id="text" rows="10" cols="50" required></textarea><br>
        <input type="submit" value="Afegeix">
    </form>

    <?php
    session_start();

    if (isset($_POST["text"])) {
        $nou_text = $_POST["text"];
        
        if (!isset($_SESSION["text"])) {
            $_SESSION["text"] = "";
        }
        
        $_SESSION["text"] .= $nou_text . "<br>";
    }

    $text = isset($_SESSION["text"]) ? $_SESSION["text"] : "";
    echo "<div id='display_texto'><p>$text</p></div>";
    ?>
</body>
</html>

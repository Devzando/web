<html>
<head>
    <title>Leitura de Frase</title>
</head>
<body>
    <form method="post" action="./a.php">
        <label for="frase">Digite uma frase:</label>
        <input type="text" name="frase">
        <input type="submit" value="Enviar">
    </form>
    <?php
        if(isset($_POST["frase"])){
            $frase = $_POST["frase"];
            echo "Frase lida: " . $frase;
        }
    ?>
</body>
</html>
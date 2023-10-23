<html>
<head>
    <title>Leitura de Frase</title>
</head>
<body>
    <form method="post" action="./d.php">
        <label for="frase">Digite uma frase:</label>
        <input type="text" name="frase">
        <input type="submit" value="Enviar">
    </form>
    <?php
        if(isset($_POST["frase"])){
            $frase = $_POST["frase"];
            $count = strlen($frase);
            for($i = 0; $i < strlen($frase); $i++){
                for($x = 1; $x < $count; $x++){
                    echo "&nbsp;";
                }
                $count--;
                echo $frase[$i] . "<br>";
            }
        }
    ?>
</body>
</html>
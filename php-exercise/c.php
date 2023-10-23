<html>
<head>
    <title>Leitura de Frase</title>
</head>
<body>
    <form method="post" action="./c.php">
        <label for="frase">Digite uma frase:</label>
        <input type="text" name="frase">
        <input type="submit" value="Enviar">
    </form>
    <?php
        if(isset($_POST["frase"])){
            $frase = $_POST["frase"];
            $count = 0;
            echo $frase[0] . "<br>";
            for($i = 1; $i < strlen($frase); $i++){
                for($x = 0; $x < $i; $x++){
                    echo "&nbsp;";
                }
                echo $frase[$i] . "<br>";
            }
        }
    ?>
</body>
</html>
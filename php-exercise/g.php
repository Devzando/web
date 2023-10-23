<html>
<head>
    <title>Leitura de Frase</title>
</head>
<body>
    <form method="post" action="./g.php">
        <label for="frase">Digite uma frase:</label>
        <input type="text" name="frase">
        <input type="submit" value="Enviar">
    </form>
    <?php
        if(isset($_POST["frase"])){
            $frase = $_POST["frase"];
            for($i = 0; $i < strlen($frase); $i++){
                if(
                    $frase[$i] != 'a' 
                    && $frase[$i] != 'e' 
                    && $frase[$i] != 'i' 
                    && $frase[$i] != 'o' 
                    && $frase[$i] != 'u'
                    && $frase[$i] != 'A'
                    && $frase[$i] != 'E'
                    && $frase[$i] != 'I'
                    && $frase[$i] != 'O'
                    && $frase[$i] != 'U'
                ){
                    echo $frase[$i];
                }
            }
        }
    ?>
</body>
</html>
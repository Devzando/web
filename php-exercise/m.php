<html>

<head>
    <title>Leitura de Frase</title>
</head>

<body>
    <form method="post" action="./m.php">
        <label for="frase">Digite uma frase:</label>
        <input type="text" name="frase">
        <input type="submit" value="Enviar">
    </form>
    <?php
    if (isset($_POST["frase"])) {
        $frase = $_POST["frase"];
        $palavras = [];
        $count = 0;
       
        for($i = 0; $i < strlen($frase); $i++){
            echo $frase[$i] . '<br>';
        }

        echo '<br>';

        for($i = 0; $i < strlen($frase); $i++){
            if($i == 0){
                echo $frase[$i] . '<br>';
            }else {
                for($x = 0; $x < $i; $x++){
                    echo '&nbsp;';
                }
                echo $frase[$i] . '<br>'; 
            }
        }
    }
    ?>
</body>

</html>
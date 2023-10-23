<html>

<head>
    <title>Leitura de Frase</title>
</head>

<body>
    <form method="post" action="./x.php">
        <label for="frase">Digite uma frase:</label>
        <input type="text" name="frase">
        <input type="submit" value="Enviar">
    </form>
    <?php
    if (isset($_POST["frase"])) {
        $frase = $_POST["frase"];
        $count = 0;
        $palavras = [];
        $palavra = "";
        $palavraImpar = false;
       
        for($i = 0; $i < strlen($frase); $i++){
            if($frase[$i] != " "){
                $palavra = $palavra . $frase[$i];
            }

            if($frase[$i] == " " || $i == strlen($frase) - 1){
                $palavras[$count] = $palavra;
                $count++;
                $palavra = "";
            }
        }

        for($i = 0; $i < strlen($palavras[0]); $i++){
            echo $palavras[0][$i] . '<br>';
        }

        echo '<br>';

        if(count($palavras) > 1){
            for($i = 0; $i < strlen($palavras[count($palavras)-1]); $i++){
                echo $palavras[count($palavras)-1][$i] . '<br>';
            }
        }

    }
    ?>
</body>

</html>
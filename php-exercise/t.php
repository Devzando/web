<html>

<head>
    <title>Leitura de Frase</title>
</head>

<body>
    <form method="post" action="./t.php">
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

        if(count($palavras) % 2 != 0){
            echo "Palavra do meio: " . $palavras[(count($palavras)-1) / 2];
        }else{
            echo "Frase com quantidade de palavras par";
        }
    }
    ?>
</body>

</html>
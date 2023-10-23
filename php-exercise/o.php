<html>

<head>
    <title>Leitura de Frase</title>
</head>

<body>
    <form method="post" action="./o.php">
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
        $troca = true;
       
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

        foreach($palavras as $item){
            if($troca) {
                for($i = 0; $i < strlen($item); $i++){
                    echo $item[$i];
                }
                $troca = false;
            }else{
                for($i = strlen($item) - 1; $i >= 0; $i--){
                    echo $item[$i] ;
                }
                $troca = true;
            }
            echo " ";
        }

    }
    ?>
</body>

</html>
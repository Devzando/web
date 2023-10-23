<html>
<head>
    <title>Leitura de Frase</title>
</head>
<body>
    <form method="post" action="./k.php">
        <label for="frase">Digite uma frase:</label>
        <input type="text" name="frase">
        <label for="palavra1">Digite uma palavra:</label>
        <input type="text" name="palavra1">
        <label for="palavra2">Digite uma palavra:</label>
        <input type="text" name="palavra2">
        <input type="submit" value="Enviar">
    </form>
    <?php
        if(isset($_POST["frase"])){
            $frase = $_POST["frase"];
            $palavra1 = $_POST["palavra1"];
            $palavra2 = $_POST["palavra2"];
            $palavras = [];
            $palavra = "";
            $palavraValida = "";
            $count = 0;

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
                if($item == $palavra1){
                    $item = $palavra2;
                }
                echo $item . " ";
            }



            // for($i = 0; $i < count($palavras); $i++){
            //     for($x = 0; $x < strlen($palavras[$i]); $x++){
            //         if($i[$x] != $palavra1[$x]){
            //             $palavraValida = "";
            //             break;
            //         }
            //         $palavraValida = $palavra1;
            //     }
            //     if(strlen($palavraValida) > 0){
            //         $palavras[$i] = $palavra2;
            //         for($x = 0; $x < count($palavras); $x++){
            //             echo $palavras[$x] . " ";
            //         }
            //         break;
            //     }
            // }

        }
    ?>
</body>
</html>
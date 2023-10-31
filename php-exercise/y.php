<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Questão Y</title>
    <link rel="stylesheet" href="questoes.css">
</head>

<body>
    <h1>Resposta da Questão</h1>
    <form method="post" action="./y.php">
        <label for="frase">Digite uma frase:</label>
        <input class="input-text" type="text" name="frase">
        <div class="btn-container">
            <input type="submit" value="Enviar">
        </div>
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
            if($i == 0){
                echo $palavras[0][$i] . '<br>';
            }else {
                for($x = 0; $x < $i; $x++){
                    echo '&nbsp;';
                }
                echo $palavras[0][$i] . '<br>'; 
            }
        }

        echo '<br>';
        
        $count = strlen($palavras[count($palavras)-1]);
        if(count($palavras) > 1){
            for($i = 0; $i < strlen($palavras[count($palavras)-1]); $i++){
                for($x = 1; $x < $count; $x++){
                    echo "&nbsp;";
                }
                $count--;
                echo $palavras[count($palavras)-1][$i] . '<br>'; 
            }
        }

    }
    ?>
</body>

</html>
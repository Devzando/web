<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Questão J</title>
    <link rel="stylesheet" href="questoes.css">
</head>

<body>
    <h1>Resposta da Questão</h1>
    <form method="post" action="./j.php">
        <label for="frase">Digite uma frase:</label>
        <input class="input-text" type="text" name="frase">
        <div class="btn-container">
            <input type="submit" value="Enviar">
        </div>
    </form>
    <?php
        if(isset($_POST["frase"])){
            $frase = $_POST["frase"];
            $palavras = [];
            $palavra = "";
            $count = 0;
            $posicaoArray = 0;
            $maiorPalavra = 0;
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

            for($i = 0; $i < count($palavras); $i++){
                if(strlen($palavras[$i]) > $maiorPalavra){
                    $maiorPalavra = strlen($palavras[$i]);
                    $posicaoArray = $i;
                }
            }

            if(count($palavras) == 0){
                echo "A maior palavra é: " . $frase;
            }else{
                echo "A maior palavra é: " . $palavras[$posicaoArray];
            }

        }
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Questão O</title>
    <link rel="stylesheet" href="questoes.css">
</head>

<body>
    <h1>Resposta da Questão</h1>
    <form method="post" action="./o.php">
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
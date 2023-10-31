<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Questão M</title>
    <link rel="stylesheet" href="questoes.css">
</head>

<body>
    <h1>Resposta da Questão</h1>
    <form method="post" action="./m.php">
        <label for="frase">Digite uma frase:</label>
        <input class="input-text" type="text" name="frase">
        <div class="btn-container">
            <input type="submit" value="Enviar">
        </div>
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
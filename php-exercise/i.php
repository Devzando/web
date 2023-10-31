<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Questão I</title>
    <link rel="stylesheet" href="questoes.css">
</head>

<body>
    <h1>Resposta da Questão</h1>
    <form method="post" action="./i.php">
        <label for="frase">Digite uma frase:</label>
        <input class="input-text" type="text" name="frase">
        <div class="btn-container">
            <input type="submit" value="Enviar">
        </div>
    </form>
    <?php
        if(isset($_POST["frase"])){
            $frase = $_POST["frase"];
            $palavrasContadas = 1;
            for($i = 0; $i < strlen($frase); $i++){
                if($frase[$i] === " "){
                    $palavrasContadas++;
                }
            }
            if($palavrasContadas == 1){
                echo "A frase tem $palavrasContadas palavra.";
            }else{
                echo "A frase tem $palavrasContadas palavras.";
            }
        }
    ?>
</body>
</html>
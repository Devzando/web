<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Questão N</title>
    <link rel="stylesheet" href="questoes.css">
</head>

<body>
    <h1>Resposta da Questão</h1>
    <form method="post" action="./n.php">
        <label for="frase">Digite uma frase:</label>
        <input class="input-text" type="text" name="frase">
        <label for="caractere">Digite um caractere:</label>
        <input class="input-text" type="text" name="caractere">
        <div class="btn-container">
            <input type="submit" value="Enviar">
        </div>
    </form>
    <?php
    if (isset($_POST["frase"])) {
        $frase = $_POST["frase"];
        $caractere = $_POST["caractere"];
        $count = 0;
       
        for($i = 0; $i < strlen($frase); $i++){
            if($frase[$i] == $caractere){
                $count++;
            }
        }

        echo 'O caractere ' . $caractere . ' aparece ' . $count . ' vezes na frase ' . $frase;
    }
    ?>
</body>

</html>
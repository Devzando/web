<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Questão C</title>
    <link rel="stylesheet" href="questoes.css">
</head>

<body>
    <h1>Resposta da Questão</h1>
    <form method="post" action="./c.php">
        <label for="frase">Digite uma frase:</label>
        <input class="input-text" type="text" name="frase">
        <div class="btn-container">
            <input type="submit" value="Enviar">
        </div>
    </form>
    <?php
        if(isset($_POST["frase"])){
            $frase = $_POST["frase"];
            $count = 0;
            echo $frase[0] . "<br>";
            for($i = 1; $i < strlen($frase); $i++){
                for($x = 0; $x < $i; $x++){
                    echo "&nbsp;";
                }
                echo $frase[$i] . "<br>";
            }
        }
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Questão D</title>
    <link rel="stylesheet" href="questoes.css">
</head>

<body>
    <h1>Resposta da Questão</h1>
    <form method="post" action="./d.php">
        <label for="frase">Digite uma frase:</label>
        <input class="input-text" type="text" name="frase">
        <div class="btn-container">
            <input type="submit" value="Enviar">
        </div>
    </form>
    <?php
        if(isset($_POST["frase"])){
            $frase = $_POST["frase"];
            $count = strlen($frase);
            for($i = 0; $i < strlen($frase); $i++){
                for($x = 1; $x < $count; $x++){
                    echo "&nbsp;";
                }
                $count--;
                echo $frase[$i] . "<br>";
            }
        }
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Questão B</title>
    <link rel="stylesheet" href="questoes.css">
</head>

<body>
    <h1>Resposta da Questão</h1>
    <form method="post" action="./b.php">
        <label for="frase">Digite uma frase:</label>
        <input class="input-text" type="text" name="frase">
        <div class="btn-container">
            <input type="submit" value="Enviar">
        </div>
    </form>
    <?php
    if (isset($_POST["frase"])) {
        $frase = $_POST["frase"];
        for ($i = 0; $i < strlen($frase); $i++) {
            echo $frase[$i] . "<br>";
        }
    }
    ?>
</body>

</html>
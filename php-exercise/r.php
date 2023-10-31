<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Questão R</title>
    <link rel="stylesheet" href="questoes.css">
</head>

<body>
    <h1>Resposta da Questão</h1>
    <form method="post" action="./r.php">
        <label for="frase">Digite uma frase:</label>
        <input class="input-text" type="text" name="frase">
        <div class="btn-container">
            <input type="submit" value="Enviar">
        </div>
    </form>
    <?php
    if (isset($_POST["frase"])) {
        $frase = $_POST["frase"];
        $posicaoVogal = 0;
        $posicaoAchada = false;

        $vogaisMin = ["a", "e", "i", "o", "u"];
        $vogaisMai = ["A", "E", "I", "O", "U"];

        for ($i = strlen($frase)-1; $i >= 0; $i--) {
            for ($x = 0; $x < count($vogaisMin); $x++) {
                if ($frase[$i] == $vogaisMin[$x] || $frase[$i] == $vogaisMai[$x]) {
                    $posicaoVogal = $i;
                    $posicaoAchada = true;
                    break;
                }
            }
            if ($posicaoAchada) {
                break;
            }
        }
        echo 'A última vogal está na posição: ' . $posicaoVogal . '<br>';

    }
    ?>
</body>

</html>
<html>

<head>
    <title>Leitura de Frase</title>
</head>

<body>
    <form method="post" action="./r.php">
        <label for="frase">Digite uma frase:</label>
        <input type="text" name="frase">
        <input type="submit" value="Enviar">
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
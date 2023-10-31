<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Questão P</title>
    <link rel="stylesheet" href="questoes.css">
</head>

<body>
    <h1>Resposta da Questão</h1>
    <form method="post" action="./p.php">
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
        $palavra = "";
        $palavraValida = "";
        $count = 0;

        $vogaisMin = ["a", "e", "i", "o", "u"];
        $vogaisMai = ["A", "E", "I", "O", "U"];
        $letrasMai = [
            "A", "B", "C",
            "D", "E", "F",
            "G", "H", "I",
            "J", "K", "L",
            "M", "N", "O",
            "P", "Q", "R", "S",
            "T", "U", "V",
            "W", "X", "Y", "Z"
        ];
        $letrasMin = [
            "a", "b", "c",
            "d", "e", "f",
            "g", "h", "i",
            "j", "k", "l",
            "m", "n", "o",
            "p", "q", "r", "s",
            "t", "u", "v",
            "w", "x", "y", "z"
        ];

        for($i = 0; $i < strlen($frase); $i++){
            for($x = 0; $x < count($letrasMai); $x++){
                if($frase[$i] == $letrasMai[$x]){
                    $frase[$i] = $letrasMin[$x];
                }
            }
        }

        for ($i = 0; $i < strlen($frase); $i++) {
            for ($x = 0; $x < count($vogaisMin); $x++) {
                if ($frase[$i] == $vogaisMin[$x]) {
                    $frase[$i] = $vogaisMai[$x];
                }
            }
            echo $frase[$i];
        }

    }
    ?>
</body>

</html>
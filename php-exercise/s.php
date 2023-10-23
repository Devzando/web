<html>

<head>
    <title>Leitura de Frase</title>
</head>

<body>
    <form method="post" action="./s.php">
        <label for="frase">Digite uma frase:</label>
        <input type="text" name="frase">
        <input type="submit" value="Enviar">
    </form>
    <?php
    if (isset($_POST["frase"])) {
        $frase = $_POST["frase"];
        $indicesSomas = 0;
        $vogalAchada = false;
        

        $vogaisMin = ["a", "e", "i", "o", "u"];
        $vogaisMai = ["A", "E", "I", "O", "U"];

        for ($i = 0; $i < strlen($frase); $i++) {
            for ($x = 0; $x < count($vogaisMin); $x++) {
                if ($frase[$i] == $vogaisMin[$x] || $frase[$i] == $vogaisMai[$x]) {
                    $vogalAchada = true;
                    break;
                }else{
                    $vogalAchada = false;
                }
            }
            if($vogalAchada == false){
                $indicesSomas += $i;
            }
        }
        echo 'A soma dos indices: ' . $indicesSomas . '<br>';

    }
    ?>
</body>

</html>
<html>

<head>
    <title>Leitura de Frase</title>
</head>

<body>
    <form method="post" action="./l.php">
        <label for="frase">Digite uma frase:</label>
        <input type="text" name="frase">
        <input type="submit" value="Enviar">
    </form>
    <?php
    if (isset($_POST["frase"])) {
        $frase = $_POST["frase"];
        $palavras = [];
        $palavra = "";
        $palavraValida = "";
        $count = 0;

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

        for($i = 0; $i < strlen($frase); $i++){
            if($frase[$i] != " "){
                $palavra = $palavra . $frase[$i];
            }

            if($frase[$i] == " " || $i == strlen($frase) - 1){
                $palavras[$count] = $palavra;
                $count++;
                $palavra = "";
            }
        }

        foreach($palavras as $item){
            for($i = 0; $i < count($letrasMin); $i++){
                if($item[0] == $letrasMin[$i]){
                    $item[0] = $letrasMai[$i];
                }
            }

            echo $item . " ";
        }
       
    }
    ?>
</body>

</html>
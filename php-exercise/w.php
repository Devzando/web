<html>

<head>
    <title>Leitura de Frase</title>
</head>

<body>
    <form method="post" action="./w.php">
        <label for="frase">Digite uma frase:</label>
        <input type="text" name="frase">
        <input type="submit" value="Enviar">
    </form>
    <?php
    if (isset($_POST["frase"])) {
        $frase = $_POST["frase"];
        $palavraCripto = "";
        $count = 0;
       

        $letrasMin = [
            "a", "b", "c",
            "d", "e", "f",
            "g", "h", "i",
            "j", "k", "l",
            "m", "n", "o",
            "p", "q", "r", "s",
            "t", "u", "v",
            "w", "x", "y", "z", " "
        ];
        $letrasMai = [
            "A", "B", "C",
            "D", "E", "F",
            "G", "H", "I",
            "J", "K", "L",
            "M", "N", "O",
            "P", "Q", "R", "S",
            "T", "U", "V",
            "W", "X", "Y", "Z", " "
        ];
        $letrasMinParaCripto = [
            "n?", "l>", "f~", 
            "p~", "d[", "m~", 
            "g=", "x<", "t|", 
            "j{", "s}", "r}", 
            "o]", "i)", "v]", 
            "b{", "a~", "e:", "c}", 
            "k]", "w#", "h)", 
            "z:", "q!", "u%", "y)", "!!"
        ];

        $letrasMaiParaCripto = [
            "V]", "X<", "L<", 
            "U~", "K|", "G=", 
            "F<", "T~", "H+", 
            "Z?", "I[", "R)", 
            "Y[", "D~", "N}", 
            "W]", "Q!", "B#", "C{", 
            "S^", "J+", "P^", 
            "M=", "A@", "O{", "E=", "??"
        ];
        
       
        for($i = 0; $i < strlen($frase); $i++){
            for($x = 0; $x < count($letrasMinParaCripto); $x++){
                if(substr($frase, $count, 2) == $letrasMinParaCripto[$x]){
                    $palavraCripto = $palavraCripto . $letrasMin[$x];
                    $count = $count + 2;
                    break;
                }else if(substr($frase, $count, 2)== $letrasMaiParaCripto[$x]) {
                    $palavraCripto = $palavraCripto . $letrasMai[$x];
                    $count = $count + 2;
                    break;
                }
            }

        }

        echo $palavraCripto;
    }
    ?>
</body>

</html>
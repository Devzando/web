<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Questão V</title>
    <link rel="stylesheet" href="questoes.css">
</head>

<body>
    <h1>Resposta da Questão</h1>
    <form method="post" action="./v.php">
        <label for="frase">Digite uma frase:</label>
        <input class="input-text" type="text" name="frase">
        <div class="btn-container">
            <input type="submit" value="Enviar">
        </div>
    </form>
    <?php
    if (isset($_POST["frase"])) {
        $frase = $_POST["frase"];
        $palavra = "";

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
            for($x = 0; $x < count($letrasMin); $x++){
                if($frase[$i] == $letrasMin[$x] ){
                    $palavra = $palavra . $letrasMinParaCripto[$x];
                    break;
                }else if($frase[$i] == $letrasMai[$x]){
                    echo 'entrou';
                    $palavra = $palavra . $letrasMaiParaCripto[$x];
                    break;
                }
            }

        }

        echo $palavra;

    }
    ?>
</body>

</html>
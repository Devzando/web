<html>

<head>
    <title>Leitura de Frase</title>
</head>

<body>
    <form method="post" action="./n.php">
        <label for="frase">Digite uma frase:</label>
        <input type="text" name="frase">
        <label for="caractere">Digite um caractere:</label>
        <input type="text" name="caractere">
        <input type="submit" value="Enviar">
    </form>
    <?php
    if (isset($_POST["frase"])) {
        $frase = $_POST["frase"];
        $caractere = $_POST["caractere"];
        $count = 0;
       
        for($i = 0; $i < strlen($frase); $i++){
            if($frase[$i] == $caractere){
                $count++;
            }
        }

        echo 'O caractere ' . $caractere . ' aparece ' . $count . ' vezes na frase ' . $frase;
    }
    ?>
</body>

</html>
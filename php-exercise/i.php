<html>
<head>
    <title>Leitura de Frase</title>
</head>
<body>
    <form method="post" action="./i.php">
        <label for="frase">Digite uma frase:</label>
        <input type="text" name="frase">
        <input type="submit" value="Enviar">
    </form>
    <?php
        if(isset($_POST["frase"])){
            $frase = $_POST["frase"];
            $palavrasContadas = 1;
            for($i = 0; $i < strlen($frase); $i++){
                if($frase[$i] === " "){
                    $palavrasContadas++;
                }
            }
            if($palavrasContadas == 1){
                echo "A frase tem $palavrasContadas palavra.";
            }else{
                echo "A frase tem $palavrasContadas palavras.";
            }
        }
    ?>
</body>
</html>
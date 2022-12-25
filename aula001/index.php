<!-- <!DOCTYPE html>
<html>
    <link rel="stylesheet" href="style.css">
    <body>

        <form action="" method="post">
            <div><label for="idval1">Digite um valor</label><input type="number" name="valor1" id="idval1" required></div>
            <div><label for="idval2">Digite o segundo valor: </label><input type="number" name="valor2" id="idval2" required>

            <button type="submit">ENVIAR</button>
        </form></input></div>

    </body>
</html> -->

<?php

    require_once('ClassOperacao.php');
    // include_once('ClassOperacao.php');

    $operacao1 = new operacao(20, 15);

    $totalSoma = $operacao1->soma();
    print $totalSoma; 

?>
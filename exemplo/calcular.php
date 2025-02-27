<?php
    $numero = $_POST['numero'];
    
    if ($numero > 0) {
        echo "O número é positivo.";
    } elseif ($numero < 0) {
        echo "O número é negativo.";
    } else {
        echo "O número é zero.";
    }

?>

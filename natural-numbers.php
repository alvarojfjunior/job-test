<?php

    $total = 0;
    for ($i=1; $i < 1000 ; $i++) {
        if (($i % 3 == 0) || ($i % 5 == 0) ) {
            $total = $total + $i;
        }
    }

    echo "A soma de todos os múltiplos de 3 ou 5 abaixo de 1000 é {$total}";
?>

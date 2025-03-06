<?php

$brinquedos = 6;
$altura_carlito = 120;
$alturas = [200, 90, 100, 123, 120, 169];

$quantidade_brinquedos = 0;
for ($i = 0; $i < $brinquedos; $i++) {
    if ($altura_carlito >= $alturas[$i]) {
        $quantidade_brinquedos++;
    }
}

echo $quantidade_brinquedos;
?>

<?php

$cabine = readline();
$alunos = readline();

$capacidade = $cabine - 1;
$viagens = $alunos / $capacidade;

if ($alunos % $capacidade > 0) {
    $viagens = (int)($viagens) + 1;
} else {
    $viagens = (int)($viagens);
}

echo $viagens;
?>

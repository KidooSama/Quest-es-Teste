<?php
$fatu = [
    'SP' => 67836.43,
    'RJ' => 36678.66,
    'MG' => 29229.88,
    'ES' => 27165.48,
    'Outros' => 19849.53
];
$fatuTotal = array_sum($fatu);
foreach ($fatu as $estado => $valor){
    $percentual = ($valor / $fatuTotal) * 100;
    echo "O percentual de representação de $estado é: " . number_format($percentual, 2, ',', '.') . "%\n";
}
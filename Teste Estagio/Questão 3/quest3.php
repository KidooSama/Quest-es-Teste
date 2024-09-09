<?php

$jsonData = file_get_contents('fatu.json');
$fatuData = json_decode($jsonData, true);

$fatu = $fatuData['faturamento'];

$menorFatu = PHP_INT_MAX;
$maiorFatu = PHP_INT_MIN;
$totalFatu = 0;
$diasComFatu = 0;
$dAcimaMedia = 0;


foreach ($fatu as $dia) {
    if ($dia['valor'] > 0) {  
        if ($dia['valor'] < $menorFatu) {
            $menorFatu = $dia['valor'];
        }
        if ($dia['valor'] > $maiorFatu) {
            $maiorFatu = $dia['valor'];
        }
        $totalFatu += $dia['valor'];
        $diasComFatu++;
    }
}

$mediaMensal = $totalFatu / $diasComFatu;

foreach ($fatu as $dia) {
    if ($dia['valor'] > 0 && $dia['valor'] > $mediaMensal) {
        $dAcimaMedia++;
    }
}
echo "Menor faturamento: R$ " . number_format($menorFatu, 2, ',', '.') . "\n";
echo "Maior faturamento: R$ " . number_format($maiorFatu, 2, ',', '.') . "\n";
echo "Número de dias com faturamento acima da média: $dAcimaMedia\n";
?>

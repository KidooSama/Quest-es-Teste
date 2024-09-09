<?php
$strOriginal = "Olá meu nome é Talles, torço bastante para nos conhecermos XD";
$strInvertida = "";
$compr = strlen($strOriginal);
for ($i = $compr - 1; $i >= 0; $i--) {

    $strInvertida .= $strOriginal[$i];
}

echo "String original: " . $strOriginal . "\n";
echo "String invertida: " . $strInvertida . "\n";
?>

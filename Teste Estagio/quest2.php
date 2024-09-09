<?php
echo "Informe um número: ";
$numero = intval(readline()); 

$a = 0;
$b = 1;

if ($numero == $a || $numero == $b) {
    echo "O número $numero pertence à sequência de Fibonacci.\n";
} else {
    while ($b < $numero) {
        $temp = $b;
        $b = $a + $b;
        $a = $temp;
    }

    if ($b == $numero) {
        echo "O número $numero pertence à sequência de Fibonacci.\n";
    } else {
        echo "O número $numero NÃO pertence à sequência de Fibonacci.\n";
    }
}
?>

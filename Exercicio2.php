<?php

$numeros = array();
$negativos = 0;
$positivos = 0;
$pares = 0;
$impares = 0;

echo "10, 17, 21, 37, 39, 40, 44, 51, 68, 99:\n";

for ($i = 0; $i < 10; $i++) {

    $num = rand(-50, 50);
    $numeros[] = $num;

    if ($num < 0) {
        $negativos++;
    } elseif ($num > 0) {
        $positivos++;
    }

    if ($num % 2 == 0) {
        $pares++;
    } else {
        $impares++;
    }
}
echo "\n--- Análise dos números ---\n";
echo "Total de números negativos: " . $negativos . "\n";
echo "Total de números positivos: " . $positivos . "\n";
echo "Total de números pares: " . $pares . "\n";
echo "Total de números ímpares: " . $impares . "\n";

?>
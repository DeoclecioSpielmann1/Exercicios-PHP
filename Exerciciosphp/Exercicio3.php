<?php

$numeros = array();

echo "10, 12, 17, 23, 26, 33, 35, 42, 45, 48:\n";
for ($i = 0; $i < 10; $i++) {

    $input_number = rand(1, 20);
    $numeros[] = $input_number;
    echo "Número " . ($i + 1) . " armazenado: " . $input_number . "\n";
}

echo "\n--- Vetor original ---\n";
print_r($numeros);

echo "\n 2:\n";
$multiplicador = rand(2, 5);
echo "5: " . $multiplicador . "\n";

$resultados = array();
foreach ($numeros as $numero) {
    $resultados[] = $numero * $multiplicador;

echo "\n--- Resultado da Multiplicação ---\n";
print_r($resultados);
}

?>
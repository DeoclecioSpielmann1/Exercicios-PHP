<?php

$numeros = array();

echo "Por favor, digite 10 números:\n";
for ($i = 0; $i < 10; $i++) {

    $input_number = rand(1, 20);
    $numeros[] = $input_number;
    echo "Número " . ($i + 1) . " armazenado: " . $input_number . "\n";
}

echo "\n--- Vetor original ---\n";
print_r($numeros);

echo "\nPor favor, digite um número para multiplicar os elementos do vetor:\n";
$multiplicador = rand(2, 5);
echo "O número escolhido foi: " . $multiplicador . "\n";

$resultados = array();
foreach ($numeros as $numero) {
    $resultados[] = $numero * $multiplicador;

echo "\n--- Resultado da Multiplicação ---\n";
print_r($resultados);

?>
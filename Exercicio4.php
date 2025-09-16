<?php

$vetor_a = array();
$vetor_b = array();
$resultados = array();

echo "Por favor, digite 10 números para o PRIMEIRO vetor:\n";
for ($i = 0; $i < 10; $i++) {
    $input_a = rand(1, 10);
    $vetor_a[] = $input_a;
    echo "Número " . ($i + 1) . " armazenado: " . $input_a . "\n";
}

echo "\nPor favor, digite 10 números para o SEGUNDO vetor:\n";
for ($i = 0; $i < 10; $i++) {

    $input_b = rand(1, 10);
    $vetor_b[] = $input_b;
    echo "Número " . ($i + 1) . " armazenado: " . $input_b . "\n";
}
echo "\n--- Resultado da Multiplicação ---\n";
for ($i = 0; $i < 10; $i++) {
    $multiplicacao = $vetor_a[$i] * $vetor_b[$i];
    $resultados[] = $multiplicacao;
    echo "Posição " . $i . ": " . $vetor_a[$i] . " x " . $vetor_b[$i] . " = " . $multiplicacao . "\n";
}
echo "\n--- Vetor de Resultados ---\n";
print_r($resultados);

?>
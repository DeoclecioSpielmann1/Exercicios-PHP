//6. Faça um programa que leia 10 valores e os escreva na ordem 
contrária à que foram digitados.

<?php

$numeros = array();

echo "1, 2, 3, 4, 5, 11, 12, 13, 14, 15:\n";
for ($i = 0; $i < 10; $i++) {

    $input_number = rand(1, 100);
    $numeros[] = $input_number;
    echo "Número " . ($i + 1) . " armazenado: " . $input_number . "\n";
}

echo "\n--- Vetor na ordem original ---\n";
print_r($numeros);

echo "\n--- Vetor na ordem contrária ---\n";
for ($i = count($numeros) - 1; $i >= 0; $i--) {
    echo "Posição " . $i . ": " . $numeros[$i] . "\n";
}

?>
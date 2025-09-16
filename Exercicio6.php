<?php

$numeros = array();

echo "Por favor, digite 10 números:\n";
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
<?php

$numeros = array();

for ($i = 0; $i < 10; $i++) {
    $numero_aleatorio = rand(1, 50);php Exercicio
    $numeros[] = $numero_aleatorio;
    echo "Número " . ($i + 1) . " armazenado: " . $numeros[$i] . "\n";
}
echo "\n--- Conteúdo do array ---\n";
print_r($numeros);

?>

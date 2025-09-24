//4.Crie dois vetores, cada um com capacidade para armazenar 10 
números. Solicite ao usuário que entre com os valores nestes dois 
vetores.
//O programa deverá mostrar a multiplicação dos dados dos vetores, em 
cada um de suas respectivas posições.
//Ex. vetor_a[0] * vetor_b[0] e assim por diante.

<?php

$vetor_a = array();
$vetor_b = array();
$resultados = array();

echo "2, 7, 11, 12, 19, 22, 23, 25, 28, 30:\n";
for ($i = 0; $i < 10; $i++) {
    $input_a = rand(1, 10);
    $vetor_a[] = $input_a;
    echo "Número " . ($i + 1) . " armazenado: " . $input_a . "\n";
}

echo "\n3, 5, 10, 13, 16, 20, 24, 26, 27, 29:\n";
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
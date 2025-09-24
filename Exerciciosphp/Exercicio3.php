//3. Digite 10 valores númericos e armazene em um vetor. Em seguida, 
solicite ao usuário um número para multiplicar todos os elementos 
do vetor.
//O programa deverá exibir o resultado da multiplicação do número 
dado pelo usuário em todos os elementos armazenados.

<?php

$numeros = array();
$multiplicador;

echo "--- Geração dos 10 Valores ---\n";

for ($i = 0; $i < 10; $i++) {
    $num_gerado = rand(1, 20);
    $numeros[] = $num_gerado;
    echo "Valor " . ($i + 1) . " (Gerado): " . $num_gerado . "\n";
}

echo "\n--- Vetor Original ---\n";
print_r($numeros);

$multiplicador = rand(2, 5);
echo "\n--- Multiplicador Solicitado ---\n";
echo "O número multiplicador será: " . $multiplicador . "\n";

$resultados = array();

foreach ($numeros as $numero) {
    $resultados[] = $numero * $multiplicador;
}

echo "\n--- Resultado da Multiplicação ---\n";
print_r($resultados);

?>
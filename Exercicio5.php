<?php

$meses = array(
    1 => 'Janeiro',
    2 => 'Fevereiro',
    3 => 'Março',
    4 => 'Abril',
    5 => 'Maio',
    6 => 'Junho',
    7 => 'Julho',
    8 => 'Agosto',
    9 => 'Setembro',
    10 => 'Outubro',
    11 => 'Novembro',
    12 => 'Dezembro'
);

$numero_digitado = rand(1, 13);
echo "Você digitou o número: " . $numero_digitado . "\n";

if (array_key_exists($numero_digitado, $meses)) {
    $nome_mes = $meses[$numero_digitado];
    echo "O mês correspondente é: " . $nome_mes . "\n";
} else {
    echo "Número inválido. Por favor, digite um número entre 1 e 12.\n";
}

?>
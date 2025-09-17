<?php

$numero_mes = date('3');

$nome_mes = match ($numero_mes) {
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
    12 => 'Dezembro',
    default => 'Mês inválido',
};

echo "O mês atual é: " . $nome_mes;

?>
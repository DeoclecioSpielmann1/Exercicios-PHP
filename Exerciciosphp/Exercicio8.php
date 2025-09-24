//8. Crie um programa para cadastrar 10 registros (em uma matriz), 
conforme abaixo:
 //no. registro, modelo, fabricante, cor,portas,ano
 //0.Uno, Fiat, prata, 4, 2014
 //1.Fiesta, Ford, preto, 2, 2015
 //2.Doblo, Fiat, verde, 4, 2013
 //3.Celta, GM, preto, 2,2012
 //4.March, Nissan, prata,2,2015
 //5.Corsa, GM, branco,2,2010
 //6.Ranger, Ford,prata 4,2012
 //7.Trail Blazer, branco,GM,4,2014
 //8.Ecosport, Ford,preto, 4, 2013
 //9.Tucson, Hyundai, vinho,4, 2012

<?php

$carros = array(
    array(0, "Uno", "Fiat", "prata", 4, 2014),
    array(1, "Fiesta", "Ford", "preto", 2, 2015),
    array(2, "Doblo", "Fiat", "verde", 4, 2013),
    array(3, "Celta", "GM", "preto", 2, 2012),
    array(4, "March", "Nissan", "prata", 2, 2015),
    array(5, "Corsa", "GM", "branco", 2, 2010),
    array(6, "Ranger", "Ford", "prata", 4, 2012),
    array(7, "Trail Blazer", "GM", "branco", 4, 2014),
    array(8, "Ecosport", "Ford", "preto", 4, 2013),
    array(9, "Tucson", "Hyundai", "vinho", 4, 2012)
);

echo "--- Listagem de Veículos ---\n";

echo "\n--- a) Modelos e Anos ---\n";
foreach ($carros as $carro) {
    echo "Modelo: " . $carro[1] . " | Ano: " . $carro[5] . "\n";
}

echo "\n--- b) Veículos Cor Prata ---\n";
foreach ($carros as $carro) {
    if ($carro[3] == "prata") {
        echo "Modelo: " . $carro[1] . "\n";
    }
}

echo "\n--- c) Veículos, Cor e Portas ---\n";
foreach ($carros as $carro) {
    echo "Modelo: " . $carro[1] . " | Cor: " . $carro[3] . " | Portas: " . $carro[4] . "\n";
}

echo "\n--- d) Veículos da Ford ---\n";
foreach ($carros as $carro) {
    if ($carro[2] == "Ford") {
        echo "Modelo: " . $carro[1] . "\n";
    }
}

echo "\n--- e) Veículos Ano >= 2013 ---\n";
foreach ($carros as $carro) {
    if ($carro[5] >= 2013) {
        echo "Modelo: " . $carro[1] . " | Ano: " . $carro[5] . "\n";
    }
}

?>
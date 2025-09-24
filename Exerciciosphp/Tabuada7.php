//Exercício:
 //Tabuada
 //Objetivo:
 //Mostrar a tabuada do 7, sendo:
 //Multiplicando 1 a 10
 //Multiplicador 7

<?php
echo "### 7\n\n";

for ($i = 1; $i <= 10; $i++) {
    $resultado = 7 * $i;
    echo "7 x " . $i . " = " . $resultado . "\n";
}
?>
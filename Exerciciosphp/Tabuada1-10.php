//Exercício:
 //Tabuada Avançada
 //Objetivo:
 //Mostrar a tabuada do 1 ao 10, sendo:
 //Multiplicando 1 a 10
 //Multiplicador 1 ao 10

<?php
for ($multiplicador = 1; $multiplicador <= 10; $multiplicador++) {
    echo "### 10 " . $multiplicador . "\n\n";

    for ($i = 1; $i <= 10; $i++) {
        $resultado = $multiplicador * $i;
        echo $multiplicador . " x " . $i . " = " . $resultado . "\n";
    }

    echo "\n---\n\n";
}
?>
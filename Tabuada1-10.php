<?php
for ($multiplicador = 1; $multiplicador <= 10; $multiplicador++) {
    echo "### Tabuada do " . $multiplicador . "\n\n";

    for ($i = 1; $i <= 10; $i++) {
        $resultado = $multiplicador * $i;
        echo $multiplicador . " x " . $i . " = " . $resultado . "\n";
    }

    echo "\n---\n\n";
}
?>
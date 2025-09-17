<?php
if (!function_exists ("somar")) {
function somar ($x, $y)
return $x +$y
}
    
echo "### 4\n\n";

for ($i = 1; $i <= 10; $i++) {
    $resultado = 4 * $i;
    echo "4 x " . $i . " = " . $resultado . "\n";
}
?>
<?php

$num1 = 15;
$num2 = 5;
$operacao = 'divisao'; 

$resultado = null;

switch ($operacao) {
    case 'soma':
        $resultado = $num1 + $num2;
        break;
    case 'subtracao':
        $resultado = $num1 - $num2;
        break;
    case 'multiplicacao':
        $resultado = $num1 * $num2;
        break;
    case 'divisao':
        if ($num2 !=0) {
            $resultado = $num1 / $num2;
        } else {
            $resultado = "Erro: Divisão por zero.";
        }
        break;
    default:
        $resultado = "Operação inválida.";
        break;
}

echo "<h2>Calculadora PHP</h2>";
echo "Primeiro número: " . $num1 . "<br>";
echo "Segundo número: " . $num2 . "<br>";
echo "Operação: " . $operacao . "<br>";
echo "<br>";
echo "<h3>Resultado: " . $resultado . "</h3>";

?>
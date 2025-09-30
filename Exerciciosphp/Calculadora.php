//Calculadora.php

<?php

$num1 = 15;
$num2 = 5;
$operacao = 'divisao';

$resultado = null;
$operador = '';

switch ($operacao) {
    case 'soma':
        $resultado = $num1 + $num2;
        $operador = '+';
        break;
    case 'subtracao':
        $resultado = $num1 - $num2;
        $operador = '-';
        break;
    case 'multiplicacao':
        $resultado = $num1 * $num2;
        $operador = 'x';
        break;
    case 'divisao':
        if ($num2 != 0) {
            $resultado = $num1 / $num2;
            $operador = '/';
        } else {
            $resultado = "Erro: Divisão por zero não é permitida.";
            $operador = '/';
        }
        break;
    default:
        $resultado = "Erro: Operação inválida.";
        $operador = '?';
        break;
}

echo "<h2>Calculadora PHP</h2>";
echo "Primeiro número: <strong>" . $num1 . "</strong><br>";
echo "Segundo número: <strong>" . $num2 . "</strong><br>";
echo "Operação solicitada: <strong>" . strtoupper($operacao) . "</strong><br>";
echo "<br>";

echo "<h3>Cálculo: " . $num1 . " " . $operador . " " . $num2 . " = " . $resultado . "</h3>";

?>
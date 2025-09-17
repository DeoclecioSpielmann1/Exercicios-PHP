<?php

$alunos = array();
$soma_notas = 0;
$maior_nota = -1;
$nome_maior_nota = "";

echo "Digite o nome e a nota de 10 alunos:\n";

for ($i = 0; $i < 10; $i++) {

    $nome = "Aluno" . ($i + 1);
    $nota = rand(0, 10);
   
    $alunos[] = array(
        'nome' => $nome,
        'nota' => $nota
    );
  
    $soma_notas += $nota;

    if ($nota > $maior_nota) {
        $maior_nota = $nota;
        $nome_maior_nota = $nome;
    }
}

$media_classe = $soma_notas / 10;

echo "\n--- Resultados da Classe ---\n";
echo "Média de nota da classe: " . number_format($media_classe, 2) . "\n";
echo "Aluno(a) com a maior nota: " . $nome_maior_nota . " (" . $maior_nota . ")\n";

?>
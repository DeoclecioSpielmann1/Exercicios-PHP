//7. Utilizando vetores, cadastre 10 pessoas, sendo que você deverá 
utilizar um vetor para cadastrar cada pessoa.
//Obtenha seguintes dados do usuário: nome, cidade, idade, sexo. Ao 
final do cadastro e armazenamento seu programa deverá exibir:
 //1. Uma listagem de todos os nomes e idades das pessoas 
cadastradas;
 //2. Uma listagem de todos os nomes de quem mora em Santos;
 //3. Uma listagem de todos os nomes de quem tem mais de 18 anos;
 //4. E quantas pessoas cadastradas são do sexo masculino.

<?php

$pessoas = array();
$total_masculino = 0;

for ($i = 0; $i < 10; $i++) {
    $nomes_mock = array("Ana", "Bruno", "Carla", "Daniel", "Eva", "Fábio", "Gabriela", "Henrique", "Isabela", "João");
    $cidades_mock = array("Santos", "São Paulo", "Rio de Janeiro", "Santos", "Santos", "Campinas", "Santos", "São Paulo", "Rio de Janeiro", "Campinas");
    $idades_mock = array(22, 17, 30, 18, 25, 19, 16, 40, 21, 15);
    $sexos_mock = array("feminino", "masculino", "feminino", "masculino", "feminino", "masculino", "feminino", "masculino", "feminino", "masculino");


    $pessoa = array(
        'nome' => $nomes_mock[$i],
        'cidade' => $cidades_mock[$i],
        'idade' => $idades_mock[$i],
        'sexo' => $sexos_mock[$i]
    );

    $pessoas[] = $pessoa;

    if ($pessoa['sexo'] == 'masculino') {
        $total_masculino++;
    }
}

echo "\n--- Análise do Cadastro ---\n";

echo "\n1. Nomes e Idades:\n";
foreach ($pessoas as $pessoa) {
    echo $pessoa['nome'] . " - " . $pessoa['idade'] . " anos\n";
}

echo "\n2. Pessoas que moram em Santos:\n";
foreach ($pessoas as $pessoa) {
    if ($pessoa['cidade'] == 'Santos') {
        echo $pessoa['nome'] . "\n";
    }
}

echo "\n3. Pessoas com mais de 18 anos:\n";
foreach ($pessoas as $pessoa) {
    if ($pessoa['idade'] > 18) {
        echo $pessoa['nome'] . "\n";
    }
}

echo "\n4. Total de pessoas do sexo masculino: " . $total_masculino . "\n";

?>
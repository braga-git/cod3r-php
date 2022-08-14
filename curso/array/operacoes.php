<div class="titulo">Operações</div>

<?php

$dados1 = [
    "nome" => "Jose",
    "idade" => 28
];

$dados2 = [
    "naturalidade" => "Fortaleza"
];

$dados2["endereco"] = "Rua A";

$dadosCompletos = $dados1 + $dados2;
print_r($dadosCompletos);

echo '<br>' . is_array($dadosCompletos); // saber se variável é array
echo '<br>' . count($dadosCompletos); // contar quantas chave tem na array

echo '<br>';
$indice = array_rand($dadosCompletos); // selecionar chaves aleatoriamente
echo "$indice = $dadosCompletos[$indice]";
echo '<br>';
echo "{$dadosCompletos['idade']}";
echo '<br>';
echo "${dadosCompletos['idade']}";
echo '<br>';

unset($dadosCompletos); 
echo '<br>';
var_dump($dadosCompletos);
echo '<br>';

$impares = [1, 3, 5, 7, 9];
$pares = [0, 2, 4, 6, 8];

$decimais = $pares + $impares;
echo '<br>';
print_r($decimais);

$decimais = array_merge($pares, $impares); // junta as chaves, mas não em ordem
echo '<br><br>';
print_r($decimais);

sort($decimais); // organiza as chaves em ordem
echo '<br><br>';
print_r($decimais);
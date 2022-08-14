<div class="titulo">Multidimensionais</div>

<?php

$dados = [
    [
        "nome" => "Roberto",
        "idade" => 26,
        "naturalidade" => "São Paulo"
    ],
    [
        "nome" => "Maria",
        "idade" => 25,
        "naturalidade" => "Bahia"
    ]
    ];

print_r($dados);
echo '<br><br>' . $dados[0]['idade'];
echo '<br><br>' . $dados[1]['idade'];
    
    $dados[] = [
        "nome" => "Florinda",
        "idade" => 30,
        "naturalidade" => "Cidade do México"
    ];

echo '<br><br>';
print_r($dados);
echo '<br><br>' . $dados[2]['idade'];

echo '<br><br>' . $dados[2]["vizinhos"] = "Chaves";
echo '<br><br>';
print_r($dados[2]);

unset($dados[1]);
echo '<br><br>';
print_r($dados);

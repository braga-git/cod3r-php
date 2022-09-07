<div class="titulo">Closure e Callable</div>

<?php

$soma1 = function($a, $b){
    return $a + $b;
};

function soma2($a, $b){
    return $a + $b;
}

echo $soma1(2, 3) . ' ';
echo is_callable($soma1) ? 'Sim' : 'Não' . '<br>';

echo '<br><hr>';

echo soma2(3, 3) . ' ';
echo is_callable("soma2") ? 'Sim' : 'Não' . '<br>';

echo '<br><hr>';

var_dump($soma1);

echo '<br><hr>';

function executar1($a, $b, $op, callable $funcao){
    $resultado = $funcao($a, $b) ?? 'Nada';
    echo "$a $op $b = $resultado <br>";
}

executar1(2, 3, '+', $soma1);
executar1(2, 3, '+', "soma2");

echo '<hr>';

function executar2($a, $b, $op, Closure $funcao){
    $resultado = $funcao($a, $b) ?? 'Nada';
    echo "$a $op $b = $resultado <br>";
}

executar2(100, 100, '+', $soma1);
executar2(3000, 3000, '+', "soma2");

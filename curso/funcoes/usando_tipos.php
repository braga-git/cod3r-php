<div class="titulo">Usando Tipos</div>

<?php

function somar1($a, $b) {
    echo "<span> Somando $a + $b = </span>";
    return $a + $b;
}

echo somar1(1, 2) . '<br>';
echo somar1(1.5, 2.3) . '<br>';
echo somar1(1, '4dois') . '<br>';

echo '<hr>';

function somar2(int $a, int $b){
    echo "<span> Somando $a + $b = </span>";
    return $a + $b;
}

echo somar2(1, 2) . '<br>';
echo somar2(1.5, 2.3) . '<br>';
// echo somar2(1, '4dois') . '<br>';

echo '<hr>';

function somar3($c, $d): int{
    echo "<span> Somando $c + $d = </span>";
    return $c + $d;
}

echo somar3(1, 2) . '<br>';
echo somar3(1.5, 2.3) . '<br>';
echo somar3(1, '4dois') . '<br>';

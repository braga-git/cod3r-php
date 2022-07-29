<div class="titulo">Desafio Equação</div>

<?php

$numerador_fracao1 = (6 * (3 + 2)) ** 2;
$denominador_fracao1 = 3 * 2;

$numerador_fracao2 = (1-5) * (2-7);
$denominador_fracao2 = 2;

$denominador_fracao3 = 10 ** 3;

$fracao1 = $numerador_fracao1 / $denominador_fracao1;

$fracao2 = ($numerador_fracao2 / $denominador_fracao2) ** 2;

$numerador_fracao3 = ($fracao1 - $fracao2) ** 3;

$fracao3 = $numerador_fracao3 / $denominador_fracao3;


echo 'Numerador fração 1 = ' . $numerador_fracao1 . '<br>';
echo 'Denominador fração 1 = ' . $denominador_fracao1 . '<br>';
echo 'Fração 1 = ' . $fracao1 . '<br>';
echo 'Numerador fração 2 = ' . $numerador_fracao2 . '<br>';
echo 'Denominador fração 2 = ' . $denominador_fracao2 . '<br>';
echo 'Fração 2 = ' . $fracao2 . '<br>';
echo 'Numerador fração 3 = ' . $numerador_fracao2 . '<br>';
echo 'Denominador fração 3 = ' . $denominador_fracao2 . '<br>';
echo 'Fração 3 = ' . $fracao3 . '<br>';

echo '<br>';

// Teste de um jeito mais rápido

$fr1 = (6 * (3 + 2)) ** 2 / (3 * 2);
$fr2 = (((1 - 5) * (2 - 7)) / 2) ** 2;
$fr3 = ($fr1 - $fr2) ** 3 / 10 ** 3;

echo 'Fração 1 = ' . $fr1 . '<br>';
echo 'Fração 2 = ' . $fr2 . '<br>';
echo 'Fração 3 = ' . $fr3 . '<br>';


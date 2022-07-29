<div class="titulo">Básico</div>

<?php

// variável obrigatoriamente começa com $

$numeroA = 13;
echo $numeroA,'<br>';
var_dump($numeroA);

echo '<br>';

$a = 3; // '=' > atribuição
$b = 16; 
$soma = $a + $b;

echo $a, '<br>';
echo $b, '<br>';
echo $soma, '<br>'; 

echo $Soma; // variáveis SÃO case sensitive - erro

echo isset($soma), '<br>';

unset($soma);
var_dump($soma);

$variavel = 10;
echo '<br>' . $variavel;

$variavel = "Agora sou uma string!";
echo '<br>' . $variavel;



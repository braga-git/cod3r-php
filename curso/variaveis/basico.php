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

// Nomes de variável

$var = 'valida';  
$var2 = 'valida';
$VAR3 = 'valida';
$_var_4= 'valida';
$vâr5 = 'valida'; // evitar acento
// $6var = 'invalida';
// $%var7 = 'invalida';
// $var8% = 'invalida';

echo '<br>' . $_SERVER;
echo '<br>';
echo '<br>' . var_dump($_SERVER);
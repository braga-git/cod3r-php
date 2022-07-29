<div class="titulo">Valor vs Referência</div>

<?php

// Atribuição por valor
$variavel = 'valor inicial';
echo $variavel;

$variavelValor = $variavel;
echo "<br> $variavel";

$variavelValor = 'novo valor';
echo "<br> $variavel, $variavelValor";

// Atribuição por Referência
$variavelReferencia = &$variavel;
$variavelReferencia = 'mesma referência';
echo "<br> $variavelReferencia, $variavel";
<div class="titulo">Atribuições</div>

<?php

// PHP = tipagem fraca - variáveis não possuem TIPO associado

$title = 'Atribuições';

$numero = 10;
echo '<br>' . $numero;

$numero = $numero - 3;
echo '<br>' . $numero;

$numero = $numero + 1.5;
echo '<br>' . $numero;

$numero--; // decremento de uma variável - #$numero = $numero - 1;
echo '<br>' . $numero;
--$numero; // decremento de uma variável - #$numero = $numero - 1;
echo '<br>' . $numero;

++$numero; // incremento de uma variável - #$numero = $numero + 1;
echo '<br>' . $numero;
$numero++; // incremento de uma variável - #$numero = $numero + 1;
echo '<br>' . $numero;

$numero -= 5; // subtração
echo '<br>' . $numero;
$numero += 5; // adição
echo '<br>' . $numero;
$numero *= 5; // multiplicação 
echo '<br>' . $numero;
$numero /= 2; // divisão
echo '<br>' . $numero;
$numero %= 8; // módulo/resto
echo '<br>' . $numero;
$numero **= 2; // potenciação/exponenciação
echo '<br>' . $numero;

$numero .= 2; // concatenação - NÃO É OPERAÇÃO MATEMÁTICA
echo '<br>' . $numero;

$texto = 'Esse é um texto';
echo '<br>' . $texto;
$texto = $texto . ' qualquer';
echo '<br>' . $texto;
$texto = $texto . ' de verdade';
echo '<br>' . $texto;

// $variavelInexistente = 'valor inexistente';
echo '<br>' . $variavelInexistente;
var_dump($variavelInexistente);
$valor = $variavelInexistente ?? 'valor default';
echo '<br>' . $valor;
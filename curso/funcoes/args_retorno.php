<div class="titulo">Argumentos e Retorno</div>

<?php

function obterMensagem(){
    return 'Seja bem-vindo(a)!';
}

echo obterMensagem();

$m = obterMensagem();
echo "<br> $m <br><br>";
var_dump(obterMensagem());

function obterMensagemComNome($nome){
    return "Bem vindo, {$nome}!";
}

echo '<br><br>', obterMensagemComNome('Wagner');

function soma($a, $b){
    return $a + $b;
}

echo '<br><br>', soma (4, 5);

function trocaValor($a, $novoValor){
    $a = $novoValor;
}

$variavel = 1;
trocaValor($variavel, 3);

echo '<br>', $variavel;

function trocaValorDeVerdade(&$a, $novoValor){
    $a = $novoValor;
}

trocaValorDeVerdade($variavel, 5);
echo '<br>', $variavel;


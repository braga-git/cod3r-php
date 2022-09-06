<div class="titulo">Desafio Palindromo</div>

<?php

function palindromo($string){
    for(;;){
        if($string === strrev($string)){
            echo "é um palindromo";
        }
        else {
            echo "não é um palindromo";
        } break;
    }
}

echo palindromo('malayala');

function palindromoResposta($palavra){
    $ultimoIndice = strlen($palavra) - 1;
    for($i = 0; $i <= $ultimoIndice; $i++){
        if($palavra[$i] !== $palavra[$ultimoIndice - $i]){
            return 'Não';
        } 
    } return 'Sim';
}
<div class="titulo">Desafio Pi</div>

<?php

echo pi();
$pi = 3.14;
$piErrado = 2.8;

echo '<br><br>';

var_dump($pi);
var_dump(pi());

echo '<br>';

if ($pi == pi()) {
    echo "<br> Iguais!";
} else {
    echo "<br> Diferentes!";
}

// Desafio

echo "<br><br> Desafio: <br>";

if(var_dump($pi <=> pi())){
    echo "<br> Iguais!";
} else if($pi < 3.14){
    echo "<br> MENOR - Diferentes!";
} else if($pi > pi()){ 
    echo "<br> MAIOR - Diferentes!";
}

// Resposta

echo "<br><br> Resposta: <br>";

echo $pi - pi();
echo '<br>' . $pi - $piErrado;

if($pi - pi() <= 0.01){
    echo '<br> Praticamente iguais!';
} 

if($pi - $piErrado <= 0.01){
    echo '<br> Praticamente iguais!';
} else {
    echo '<br> Valor errado!';
}

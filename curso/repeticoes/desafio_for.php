<div class="titulo">Desafio For</div>

<?php

$array = ['#', '##', '###', '####', '#####'];

for($i = 0; $i < count($array); $i++){
    echo "{$array[$i]} <br>";
}

echo '<br><hr><br>';

$impressao = '';
for($cont = 1; $cont <= 5; $cont++) {
    $impressao .= '#';
    echo "$impressao <br>";
}

echo '<br><hr><br>';

for($impressao2 = '#'; $impressao2 !== '######'; $impressao2 .= '#') {
    echo "$impressao2 <br>";
}
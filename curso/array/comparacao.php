<div class="titulo">Comparação Arrays</div>

<?php

$arr1 = ['nome' => 'Maria', 'idade' => 20];
$arr2 = ['nome' => 'Maria', 'idade' => 20];
var_dump($arr1 == $arr2); 
var_dump($arr1 === $arr2);

// idênticos

echo '<br>';

$arr3 = ['idade' => 20, 'nome' => 'Maria'];
var_dump($arr1 == $arr3); // iguais, mesmo mudando a ordem
var_dump($arr1 === $arr3); // estritamente diferentes, por conta da ordem
echo '<br>';
var_dump($arr1 != $arr3); // não são diferentes, mesmo por conta da ordem
var_dump($arr1 !== $arr3); // são diferentes, por conta da ordem

echo '<br>';
$arr4 = ['idade' => '20', 'nome' => 'Maria'];
var_dump($arr1 == $arr4); // são iguais, mesmo com o tipo diferente (se for do mesmo valor)
var_dump($arr1 === $arr4); // estritamente diferentes

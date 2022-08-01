<div class="titulo">Operadores Lógicos</div>

<?php

echo "<p>T ou F</p><hr>";
var_dump(true);
var_dump(false);
echo '<br>';
var_dump(!true); // not
var_dump(!false);
echo '<br>';
var_dump(!!true);
var_dump(!!false);
echo '<br>';
var_dump(!!!true);
var_dump(!!!false);

echo "<br><br><p> Tabela Verdade 'AND' </p><hr>";
var_dump(true && true);
var_dump(true && false);
var_dump(false && true);
var_dump(false && false);

var_dump(true and true);
var_dump(true and false);
var_dump(false and true);
var_dump(false and false);

echo "<br><br><p> Tabela Verdade 'OR' (OU) </p><hr>";
var_dump(true || true);
var_dump(true || false);
var_dump(false || true);
var_dump(false || false);

var_dump(true or true);
var_dump(true or false);
var_dump(false or true);
var_dump(false or false);

echo "<br><br><p> Tabela Verdade 'XOR' (OU Exclusivo) </p><hr>";
var_dump(true xor true);
var_dump(true xor false);
var_dump(false xor true);
var_dump(false xor false);

var_dump(true != true);
var_dump(true != false);
var_dump(false != true);
var_dump(false != false);

echo "<br><br><p> Exemplo </p><hr>";
$idade = 64;
$sexo = 'M';

if($idade >= 60 && $sexo === 'F'){
    echo 'Pode se aposentar';
} else if($idade >= 65 && $sexo === 'M'){
    echo 'Pode se aposentar';
} else {
    echo 'Vai ter que trabalhar mais um pouco.';
}
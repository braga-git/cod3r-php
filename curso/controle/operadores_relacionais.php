<div class="titulo">Operadores Relacionais</div>

<?php 

var_dump(1 == 1); // true
echo'<br>'; 
var_dump(1 > 1); //false
echo'<br>';
var_dump(1 >= 1); // true
echo'<br>'; 
var_dump(1 < 1); //false
echo'<br>';
var_dump(1 <= 1); //true
echo'<br>';
var_dump(1 != 1); // false
echo'<br>';
var_dump(1 <> 1); // false
echo'<br>';

var_dump(1 == '1'); // true
echo'<br>';
var_dump(1 === '1'); // false - igualdade estrita (tipos)
echo '<br>';
var_dump(1 != '1'); // false
echo'<br>';
var_dump(1 !== '1'); // true - diferença estrita (tipos)
echo'<br><br>';

echo "<p> Relacionais no If/Else </p><hr>";
$idade = 19;
if($idade < 18){
    echo "Menor de idade <br>";
} else if($idade < 65) {
    echo "Adulto <br>";
} else {
    echo "Terceira idade!";
}

echo '<br>';

echo "<p> Spaceship </p><hr>";
var_dump(1 <=> 0);
var_dump(1 <=> 1);
var_dump(0 <=> 1);

echo '<br><br>';

echo "<p> Valores podem ser 'TRUE' ou 'FALSE' </p><hr>";
var_dump(!!5);
var_dump(!!0);
var_dump(!!"");
var_dump(!!" ");



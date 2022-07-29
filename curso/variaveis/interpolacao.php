<div class="titulo">Interpolação</div>

<?php

// Interpolar = interpretar o valor de uma variável dentro de um contexto. p/ ex.: string
// "" = interpreta o valor de uma variável
// '' = NÃO interpreta

$numero = 10;
echo $numero;

echo '<br> $numero';
echo "<br> $numero";
echo "<br> $numero + 1";

$texto = "A sua nota é: $numero";
echo "<br> $texto";

$objeto = 'caneta';
echo "<br> Eu tenho 5 $objetos";
echo "<br> Eu tenho 5 {$objeto}s.";

echo "<br> Eu tinha 5 { $objeto}s, mas perdi 3 {$objeto }s."; 
// {espaço antes = problema} - {espaço depois = pode}

echo '<br>';
echo "$numero + 1"; // Operação matemática não funciona na interpolação (PHP)
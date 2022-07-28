<div class="titulo">Tipo String</div>

<?php 

echo 'Eu sou uma string', '<br>';

var_dump("Eu também");
// String lenght calcula o acento como comprimento da string, por isso 10 caractéres

echo '<br>';

// concatenação

echo "Nós também" . ' somos', '<br>'; 
echo ("Nós também" . ' somos'), '<br>'; 
echo '<br>', "Também aceito", " vírgulas";

echo '<br>' , "'Teste'" . ' "Teste"' . ' \'Teste\'' . " \"Teste\"" . " \\\\ ";

print("<br> Também existe a função \"print\"");
print "<br> Também existe a função \"print\"";

// Algumas funções

echo '<br>';
echo '<br>' . strtoupper('maximizado');
echo '<br>' . strtolower('MINIMIZADO');
echo '<br>' . ucfirst('só a primeira letra');
echo '<br>' . ucwords('todas as palavras');
echo '<br>' . strlen('Quantas letras?');
echo '<br>' . mb_strlen('Eu também', "utf-8");
echo '<br>' . substr('Só uma parte mesmo' , 7, 6); //parte
echo '<br>' . str_replace('isso' , 'aquilo' , 'Trocar isso isso'); 
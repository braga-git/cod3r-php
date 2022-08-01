<div class="titulo">If Else</div>

<?php 

if(false) 

echo "Sentença avulsa <br>";

{
    echo "Serei impresso? <br>";
    echo "Serei impresso novamente? <br>";
}

if(false); // ; = sentença de código vazia
{
    echo "Serei impresso? <br>";
    echo "Serei impresso novamente? <br>";
}

echo '<br>';

if (false)
    echo "Verdadeiro <br>";
else
    echo "Falso <br>";
echo "Fim <br>";

echo '<br>';

if (false) {
    echo "Passo A <br>";
}
else if(true) {
    echo "Passo B <br>";
}
else {
    echo "Último passo <br>";
}
echo "Fim <br>";

echo '<br>';

if (false) {
    echo "Passo A <br>";
}
else if(false) {
    echo "Passo B <br>";
}
else if(false) {
    echo "Passo C <br>";
}
else if(false) {
    echo "Passo D <br>";
}
else {
    echo "Último passo <br>";
}
echo "Fim <br>";
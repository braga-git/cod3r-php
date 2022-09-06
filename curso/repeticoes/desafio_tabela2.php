<div class="titulo">Desafio Tabela 2</div>

<form action="#" method="post">
    <input type="number" min="0" value=<?= $_POST['linhas'] ?> name="linhas" id="linhas">
    <input type="number" min="0" value=<?= $_POST['colunas'] ?>  name="colunas" id="colunas">
    <button>Enviar</button>
</form>

<table>
<?php

$linhas = intval($_POST['linhas']);
$colunas = intval($_POST['colunas']);

if(!$linhas) $linhas = 10;
if(!$colunas) $colunas = 10;

$num = 1;
for($i = 0; $i < $linhas; $i++){
    echo "<tr>";
    for($j = 0; $j < $colunas; $j++){
        echo "<td> $num </td>";
        $num++;
    }
    echo "</tr>";
}
?>
</table>

<style>
    table {
        border: 1px solid #444;
        border-collapse: collapse;
    }

    table tr {
        border: 1px solid #444;
    }

    table td {
        border: 1px solid #444;
    }
</style>


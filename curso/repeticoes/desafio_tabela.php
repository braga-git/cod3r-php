<div class="titulo">Desafio Tabela</div>

<?php
    $matriz = [
        ['01', '02', '03', '04', '05'],
        ['06', '07', '08', '09', '10'],
        ['11', '12', '13', '14', '15'],
        ['16', '17', '18', '19', '20'],
    ];

    foreach($matriz as $linha){
        foreach($linha as $valor){
             echo "$valor";
        }
        echo '<br>';
    }

    echo '<br>';

?>

<table>
    <?php
        foreach($matriz as $linha){
            echo '<tr>';
            foreach($linha as $valor){
                echo "<td> $valor </td>";
            }
            echo '</tr>';
        }
    ?>
</table>

<table>
    <?php
        foreach($matriz as $index => $linha){
            $style = $index % 2 === 1 ? $style = 'background-color: lightblue;' : '';
            echo "<tr style ='{$style}'>";
            foreach($linha as $valor){
                echo "<td> $valor </td>";
            }
            echo '</tr>';
        }

        echo '<br>';

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


<style>
    li {
        list-style-type: none;
    }
</style>

<div class="titulo">Desafio</div>

<ul>
    <li> <?php echo " 1 + 1 = " . (1 + 1); ?> </li>
    <li> 1 + 1 = <?= 1 + 1 ?> </li>
    <li> <?= "4 + 4 = " . (4 + 4) ?> </li>
    <li> 4 + 4 = <?php echo 4 + 4; ?> </li>
    <li> 8 + 8 = <?= 16 ?> </li>
    <li> <?= '8 + 8 = 1' . (3 + 3) ?> </li>
</ul>

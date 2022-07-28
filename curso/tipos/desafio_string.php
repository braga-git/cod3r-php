<div class="titulo">Desafio String</div>

<?php

// !Abc

echo substr("!AbcaBcabc", 1, 3), '<br>';

echo strpos('!AbcaBcabc', 'abc'), '<br>';

echo stripos('!AbcaBcabc', 'abc'), '<br>';

echo strpos(strtolower('!AbcaBcabc'), 'abc'), '<br>';
echo strpos(strtolower('!AbcaBcabc'), strtolower('ABC')), '<br>';



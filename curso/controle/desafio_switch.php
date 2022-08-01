<div class="titulo">Desafio Switch</div>

<form action="#" method="post">
    <input type="text" name="param">
    <select name="conversao" id="conversao">
        <option value="km-milha">Km > Milha</option>
        <option value="milha-km">Milha > Km</option>
        <option value="metro-km">Metro > Km</option>
        <option value="km-metro">Km > Metros</option>
        <option value="cel-fah">Celsius > Fahrenheit</option>
        <option value="fah-cel">Fahrenheit > Celsius</option>
    </select>

    <button>Calcular</button>

</form>

<style>
    form > * {
        font-size: 1.8rem;
    }
</style>

<?php

/*

$param = $_POST['param'];
$conversao = $_POST['conversao'];
$paramConvertido = 0;


switch ($conversao){
    case 'km-milha':
        $paramConvertido = $param * 0.62;
        echo "<br> $param Km são $paramConvertido Milhas.";
        break;
    case 'milha-km':
        $paramConvertido = $param * 1.609;
        echo "<br> $param Milhas são $paramConvertido Km.";
        break;
    case 'metro-km':
        $paramConvertido = $param / 1000;
        echo "<br> $param metros são $paramConvertido Km.";
        break;
    case 'km-metro':
        $paramConvertido = $param * 1000;
        echo "<br> $param Km são $paramConvertido metros.";
        break;
    case 'cel-fah':
        $paramConvertido = ($param * 1.8) + 32;
        echo "<br> $param graus Celsius são $paramConvertido graus Fahrenheit.";
        break;
    case 'fah-cel':
        $paramConvertido = $param - 32 * 0.56;
        echo "<br> $param graus Fahrenheit são $paramConvertido graus Celsius.";
        break;
}

*/

const FATOR_KM_MILHA = 0.621371;
const FATOR_METRO_KM = 1000;
const FATOR_CEL_FAH = 1.8;

$param = $_POST['param'] ?? 0;
switch ($_POST ['conversao']) {
    case 'km-milha':
        $distancia = $param * FATOR_KM_MILHA;
        $mensagem = "$param Km = $distancia Milhas";
        break;
    case 'milha-km':
        $distancia = $param / FATOR_KM_MILHA;
        $mensagem = "$param Milhas = $distancia Km";
        break;
    case 'metro-km':
        $distancia = $param / FATOR_METRO_KM;
        $mensagem = "$param Metros = $distancia Km";
        break;
    case 'km-metro':
        $distancia = $param * FATOR_METRO_KM;
        $mensagem = "$param Km = $distancia Metros";
        break;
    case 'cel-fah':
        $conversao = $param * FATOR_CEL_FAH + 32;
        $mensagem = "{$param}°C = {$conversao}F";
        break;
    case 'fah-cel':
        $conversao = ($param - 32) / FATOR_CEL_FAH;
        $mensagem = "{$param}F = {$conversao}°C";
        break;
    default:
        $mensagem = "Nenhum valor calculado!";
}

echo "<p>$mensagem</p>";
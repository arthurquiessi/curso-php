<div class="titulo">Desafio Switch</div>

<form action="#" method="post">
    <input type="text" name="param" id="">
    <select name="conversao" id="conversao">
        <option value="km-milha">KM - Milha</option>
        <option value="milha-km">Milha - KM</option>
        <option value="metro-km">Metro - KM</option>
        <option value="km-metro">KM - Metro</option>
        <option value="c-f">Celsius-Fahrenheit</option>
        <option value="f-c">Fahrenheit - Celsius</option>
    </select>
    <button>Calcular</button>
</form>

<style>
    form > * {
        font-size: 1.8rem;
    }
</style>

<?php

const FATOR_KM_MILHA = 1.609;
const FATOR_METRO_KM = 1000;

const FATOR_TEMP_UM = 1.8;
const FATOR_TEMP_DOIS = 32;


$param = (float) $_POST['param'] ?? 0;
$resultado = 0.0;

if ($param != "") {
    switch ($_POST['conversao']) {
        case 'km-milha':
            $resultado = $param / FATOR_KM_MILHA;
            $res = number_format($resultado, 2);
            $valor = "$param km = $res milha";
            break;
        case 'milha-km':
            $resultado = $param * FATOR_KM_MILHA;
            $res = number_format($resultado, 2);
            $valor = "$param milha = $res km";
            break;
        case 'metro-km':
            $resultado = $param / FATOR_METRO_KM;
            $res = number_format($resultado, 2);
            $valor = "$param metro = $res km";
            break;
        case 'km-metro':
            $resultado = $param * FATOR_METRO_KM;
            $res = number_format($resultado, 2);
            $valor = "$param km = $res metro";
            break;
        case 'c-f':
            $resultado = (FATOR_TEMP_UM * $param) + FATOR_TEMP_DOIS;
            $valor = "$param °C = $resultado °F";
            break;
        case 'f-c':
            $resultado = ($param - FATOR_TEMP_DOIS) / FATOR_TEMP_UM;
            $valor = "$param °F = $resultado °C";
            break;
        default:
            $valor = "Valor não convertido";
    }

    echo "<p>$valor</p>";
}




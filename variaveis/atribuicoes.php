<div class="titulo">Atribuições</div>

<?php
$title = 'atribuições';

$numero = 10;
echo '<br>' . $numero;
$numero = $numero - 3;
echo '<br>' . $numero;
$numero = $numero + 1.5;
echo '<br>' . $numero;
$numero--; // $numero = $numero - 1
echo '<br>' . $numero;
--$numero; // $numero = $numero - 1
echo '<br>' . $numero;
$numero++; // $numero = $numero + 1
echo '<br>' . $numero;
++$numero; // $numero = $numero + 1
echo '<br>' . $numero;

$numero -= 5; // $numero = $numero - 5
echo '<br>' . $numero;
$numero += 5; // $numero = $numero + 5
echo '<br>' . $numero;
$numero *= 5; // $numero = $numero * 5
echo '<br>' . $numero;
$numero /= 2; // $numero = $numero / 2
echo '<br>' . $numero;
$numero %= 6; // $numero = $numero % 6
echo '<br>' . $numero;
$numero **= 2; // $numero = $numero ** 2
echo '<br>' . $numero;

$texto = 'Esse é um texto';
echo '<br>' . $texto;
$texto = $texto . ' qualquer';
echo '<br>' . $texto;

// $variavelInexistente = 'valor existente';
echo '<br>' . $variavelInexistente;
$valor = $variavelInexistente ?? 'valor Default';
echo '<br>' . $valor;


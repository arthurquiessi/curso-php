<div class="titulo">Valor Vs. Referência</div>

<?php
$variavel  = 'valor inicial';
echo $variavel;

//atribuição por valor
$variavelValor = $variavel;
echo "<br>$variavelValor";
$variavelValor = "novo valor";
echo "<br>$variavel";
echo " $variavelValor";

//atribuição por referência
$variavelReferencia = &$variavel;
echo "<br>$variavel $variavelReferencia";
$variavelReferencia = 'mesma referência';

echo "<br>$variavel $variavelReferencia";

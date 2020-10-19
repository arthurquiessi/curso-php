<div class="titulo">Constantes</div>

<?php
// utilizar constantes com letras maiúsculas
define('TAXA_DE_JUROS', 5.9);
echo TAXA_DE_JUROS;
// constantes não usam $ antes da variável

const NOVA_TAXA = 2.5;
echo '<br>' . NOVA_TAXA;

$valorVariavel = 2.8;
// define('NOVISSIMA_TAXA', $valorVariavel);
// const NOVISSIMA_TAXA = $valorVariavel; // Não funciona
const NOVISSIMA_TAXA = 2.8 + 1.2;
echo '<br>' . NOVISSIMA_TAXA;

echo '<br>' . PHP_VERSION;
echo '<br>' . PHP_INT_MAX;

echo '<br>Linha:' . __LINE__;
echo '<br>' . __FILE__;
echo '<br>' . __DIR__;



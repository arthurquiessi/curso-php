<div class="titulo">Desafio For</div>

<?php
$impressao = '';
for ($i = 0; $i < 5; $i++) { 
    $impressao .= '#';
    echo "{$impressao} <br>";
}

echo '<br>';

for ($impressao1 = '#'; $impressao1 !== '######'  ; $impressao1 .= '#') { 
    echo "{$impressao1} <br>";
}
<div class="titulo">Operações Aritméticas</div>

<?php
echo 1 + 1, '<br>';
var_dump(1 + 1);
echo '<br>';

echo 1 + 2.5, '<br>';
echo 10 - 2, '<br>';
echo 2 * 5, '<br>';
echo 7 / 4, '<br>';
echo intdiv(7, 4), '<br>'; // TIRA as casas decimais
echo round(7 / 4), '<br>'; // Arrendonda para qual estiver mais perto
echo 7 % 4, '<br>'; // Resto (Módulo)
echo 7 / 0.00000000001, '<br>'; 
// echo intdiv(7 / 0), '<br>'; // #Erro!
echo 4 ** 2, '<br>'; // Exponeciação

// Precedência
// () => ** => / * % => + -


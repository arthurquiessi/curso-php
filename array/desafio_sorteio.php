<div class="titulo">Desafio Sorteio</div>

<?php
$nomes = ["Elza", "Rapunzel", "Branca de Neve", "Cinderela"];

$sorteio = array_rand($nomes);
echo "<h1 center>A princesa é: $nomes[$sorteio]</h1>";

?>

<style>
    [center] {
        display: flex;
        justify-content: center;
    }
</style>
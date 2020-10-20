<div class="titulo">Desafio Operadores Lógicos</div>

<!-- Dois trabalhos -> terça e quinta!
- Se os dois forem executados -> TV 50' e sorvete
- Se apenas um for executados -> TV 32' e sorvete
- Se nenhum for executado -> Fica em casa mais saudável -->

<form action="#" method="post">
    <div>
        <label for="t1">Trabalho 1 (Terça):</label>
        <select name="t1" id="t1">
            <option value="1">Executado</option>
            <option value="0">Não Executado</option>
        </select>
    </div>
    <div>
        <label for="t2">Trabalho 2 (Quinta):</label>
        <select name="t2" id="t2">
            <option value="1">Executado</option>
            <option value="0">Não Executado</option>
        </select>
    </div>
    <button>Executar</button>
</form>

<style>
    button, select {
        font-size: 1.8rem;
    }
</style>

<?php
$rec1 = $_POST['t1'];
$rec2 = $_POST['t2'];

$var1 = ((bool) $rec1);
$var2 = ((bool) $rec2);

// var_dump($var1, $var2);

if ($var1 && $var2) {
    echo "<p>Compra TV 50' e tomar um sorvete pra comemorar</p>";
} elseif ($var1 || $var2) {
    echo "<p>Compra TV 32' e tomar um sorvete pra comemorar</p>";
} else {
    echo "<p>Fica em casa mais saudável</p>";
}
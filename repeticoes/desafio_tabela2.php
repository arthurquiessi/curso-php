<div class="titulo">Desafio Tabela 2</div>

<form action="#" method="post">
    <label for="linhas">Número de linhas:</label>
    <input type="text" name="linhas">
    <label for="colunas">Número de colunas:</label>
    <input type="text" name="colunas">
    <button>Gerar</button>
</form>

<table>
<?php
$linhas = intval($_POST['linhas']);
$colunas = intval($_POST['colunas']);
$num = 1;

for ($tr = 0; $tr < $linhas; $tr++) { 
    echo "<tr>";
    for ($td = 0; $td < $colunas; $td++) { 
        echo "<td>$num</td>"; 
        $num++;
    }
    echo "</tr>";
}
?>
</table>

<style>
    table {
        border: 1px solid #444;
        border-collapse: collapse;
        margin: 20px 0px;
    }

    table tr {
        border: 1px solid #444;
    }

    table td {
        padding: 10px 20px;
    }
</style>
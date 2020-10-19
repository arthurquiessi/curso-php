<div class="titulo">IF Else</div>

<?php
if(true) // true ele executa tudo que está na sequência
    echo "Serei impresso?"; 
    echo " Serei impresso novamente?";

if(false) // false não executa o próximo associado, mas o segundo sim
    echo "Serei impresso?";
    echo "<br>Serei impresso novamente?";

if(true) {
    echo "<br>Verdadeiro<br>"; 
} else {
    echo "Falso";
}

if(false) {
    echo "Passo A <br>";
} elseif(true) {
    echo "Passo B <br>";
} else {
    echo "Ultimo passo";
}
<?php

$altura = 1.70;
$peso = 120;
$imc = $peso / $altura ** 2;

if ($imc < 18.5) {
    echo "Magreza.";
} else if ($imc <= 18.5 && $imc <= 24.9) {
    echo "Normal.";
} else if ($imc <= 25.0 && $imc <= 29.9) {
    echo "Sobrepeso.";
} else if ($imc <= 30.0 && $imc <= 39.9) {
    echo "Obesidade.";
} else {
    echo "Obesidade Grave.";
}

echo PHP_EOL;
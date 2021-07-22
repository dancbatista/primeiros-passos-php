<?php

$contador = 1;

while($contador <= 15){
    echo "#$contador" . PHP_EOL;
    $contador = $contador + 1;
}

echo PHP_EOL;

for ($novoContador = 1; $novoContador <= 10; $novoContador++) {
    if ($novoContador == 8) {
        break;
    }
    
    echo "#$novoContador" . PHP_EOL;

}
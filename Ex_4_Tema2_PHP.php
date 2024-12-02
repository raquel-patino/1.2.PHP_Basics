<?php
declare(strict_types = 1);

contadorNumero(15,2);

function contadorNumero( int $numero, int $contador) {
$vuelta=1;
    while ($i < $numero && $i+$contador <=$numero){
        if ($numero!=15) {
            $numero=10;
        }
        echo "Esta es la vuelta $vuelta = " . ($i+= $contador). "<br>"; 
        $vuelta++;
    }
}

?>

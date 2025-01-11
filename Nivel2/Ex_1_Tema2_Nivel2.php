<?php
declare(strict_types=1);

echo precioLlamada(50);

function precioLlamada (float $minutos) : float {
    if ($minutos <= 3) {
        $precio=0.10;
        return $precio;
    } else {
        $precio= (($minutos - 3) * 0.05) + 0.10;
        return $precio;
    }
}

?>
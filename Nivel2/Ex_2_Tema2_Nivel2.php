<?php
declare (strict_types=1);

echo (precioChocolate(5) + precioChicles(3) + precioCaramelos(4));

function precioChocolate( int $chocolates) : int {
    return $chocolates * 1;

}

function precioChicles( int $chicles) : float {
    return $chicles * 0.5;
}

function precioCaramelos (int $caramelos) : float {
    return $caramelos * 1.5;
}

?>
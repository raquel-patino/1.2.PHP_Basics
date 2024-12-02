<?php

isBitten();

function isBitten () {

    if ($bitten = rand(0, 1) === 1){
        echo "Me ha mordido";
    }else {
        echo "No me ha mordido";
    }
}

?>


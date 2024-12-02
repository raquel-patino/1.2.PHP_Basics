<?php
declare(strict_types = 1);

echo gradoEstudiante (40);

function gradoEstudiante (int $grado) : string{

    if ($grado== 60){
$resultado= "Primera Divisió";
    }else if(($grado>=45) && ($grado<=59)) {
$resultado= "Segona Divisió";
    }else if(($grado>=33) && ($grado<=44)){
$resultado= "Tercera Divisió";
    }else {
$resultado="Estudiante suspenso";
}

return $resultado;
}


?>

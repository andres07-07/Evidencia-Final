<?php
$usernames = ["Dario", "Yohan", "Albear", "Marlon", "Felipe"];
$passwords = ["Dario123", "Yohan123", "Albear123", "Marlon123", "Felipe123"];

$usuario = readline("Ingrese su usuario :\n");
$contraseña = readline("Ingrese su contraseña :\n");

if (($usuario === $usernames[0] && $contraseña === $passwords[0]) || ($usuario === $usernames[1] && $contraseña === $passwords[1]) || ($usuario === $usernames[2] && $contraseña === $passwords[2]) || ($usuario === $usernames[3] && $contraseña === $passwords[3]) || ($usuario === $usernames[4] && $contraseña === $passwords[4])) :
    echo "Ingreso exitoso\n";
    $empleados = [];
    $respuesta1 = readline("¿Desea registrar nuevos empleados? (S/N) :\n");
    if ($respuesta1 == "S") :
        $numeroEmpleados = intval(readline("¿Cuantos empleados desea registrar? :\n"));
        for ($i = 0; $i < $numeroEmpleados; $i++) {
            $nombre = readline("Nombre: ");
            $dni = intval(readline("DNI. "));
            $genero = readline("Genero : (M / F) ");
            $edad = intval(readline("Edad : "));
            $estatura = floatval(readline("Estatura (m): "));
            $peso = floatval(readline("Peso (kg): "));
            $fumador = readline("¿Fuma? (S/N) :");

            $empleados[] = ['nombre' => $nombre, 'dni' => $dni, 'genero' => $genero, 'edad' => $edad, 'estatura' => $estatura, 'peso' => $peso, 'fumador' => $fumador];
        }
    else :
        echo "Adios";
    endif;
    $buscar = readline("Ingrese nombre o DNI de empleado: ");
    foreach ($empleados as $empleado) {
        if ($empleado['nombre'] == $buscar || $empleado['dni'] == $buscar) :
            echo "Empleado encontrado:\n";
            echo "Edad: " . $empleado['edad'] . "\n";
            echo "Genero: " . $empleado['genero'];
            break;
        endif;
    }
else :
    echo "Usuario o contraseña incorrectos";
endif;
?>
<?php
if (isset($_POST['usuario'])) {
    $Usuario = $_POST['usuario'];
    $password = $_POST['password'];
    $Edad = $_POST['edad'];

    $leyenda = array();


    if ($Usuario !== "luis" || $password !== "mendoza") {
        array_push($leyenda, "Los datos son incorrectos");
    }

    if ($password !== "mendoza") {
        array_push($leyenda, "La contraseña es incorrecta");
    }

    if (!is_numeric($Edad) || $Edad < 18) {
        array_push($leyenda, "Debes ser mayor de 18 años");
    }

    if (count($leyenda) > 0) {
        echo "<div class='error'>";
        foreach ($leyenda as $mensaje) {
            echo "<li>" . $mensaje . "</li>";
        }
        echo "</div>";
    } else {
        echo "<div class='correcto'>Datos correctos</div>";
    }
}
?>


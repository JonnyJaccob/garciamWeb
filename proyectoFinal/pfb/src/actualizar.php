<?php
    $cadena = $_POST['cadena'];

    $servidor = "localhost";
    $basedatos = "music";
    $usuario = "root";
    $password = "";
    $con = mysqli_connect($servidor,$usuario,$password,$basedatos) or die("No se pudo conectar a localhost");
    $consulta = $cadena."";
    //echo $consulta;
    $registros = mysqli_query($con,$consulta) or die("Problemas con el select");
    $result = mysqli_fetch_array($registros, MYSQLI_ASSOC);
    echo json_encode($result);

?>
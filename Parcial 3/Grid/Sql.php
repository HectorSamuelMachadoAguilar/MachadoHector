<?php
$servidor = "localhost";
$basedatos = "programacionweb";
$usuario = "root";
$password = "";

$con = mysqli_connect($servidor,$usuario,$password,$basedatos) or die("No se pudo conectar a localhost");
$consulta = "select * from compradores";
$registros = mysqli_query($con,$consulta) or die("Problema en el select");
$result = mysqli_fetch_all($registros, MYSQLI_ASSOC);

mysqli_free_result($registros);
mysqli_close($con);
echo json_encode($result);
?>
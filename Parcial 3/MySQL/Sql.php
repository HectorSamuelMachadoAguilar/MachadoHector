<?php
$servidor = "localhost";
$basedatos = "ejemplo";
$usuario = "root";
$password = "";
$con = mysqli_connect($servidor,$usuario,$password,$basedatos) or die("No se pudo conectar a localhost");
$consulta = "select * from empleado";
$registros = mysqli_query($con,$consulta) or die("Problema en el select");

//Resultado como array asociativo
//while ($result = mysqli_fetch_array($registros,MYSQLI_ASSOC)) {
//    printf($result['id'].' '.$result['nombre'].' '.$result['apellido'].'<br>');
//}

//Resultado como array númerico
//while ($result = mysqli_fetch_array($registros,MYSQLI_NUM)) {
//  printf('Id: '.$result[0].'--Nombre: '.$result[1].'--Apellido: '.$result[2].'<br>');
//}

//Resultado de la consulta como una matriz
$result = mysqli_fetch_all($registros);

mysqli_close($con);
echo json_encode($result);
?>
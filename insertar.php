<?php
include("conexion.php");
$conexion = conectar();
$nombre =$_POST['nombre'];
$apaterno = $_POST['apaterno'];
$amaterno = $_POST['amaterno'];
$direccion = $_POST['direccion'];
$tel = $_POST['tel'];

$sql="INSERT INTO alumno VALUES(null,'$nombre','$apaterno','$amaterno','$direccion','$tel')";
$ejecutar =mysqli_query($conexion, $sql);

if($ejecutar){
    Header("Location: index.php");
}else{
    echo $ejecutar;
}
?>
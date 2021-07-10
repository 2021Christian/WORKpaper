<?php
include('../conect.php');

$response = new stdClass();
$datos=[];
$i=0;

$sql="select * from articulos where activo=1";
$result=mysqli_query($cx, $sql);

while($row=mysqli_fetch_array($result)){
    $obj=new stdClass();
    $obj->id = $row['id'];
    $obj->marca=$row['marca'];
    $obj->modelo=$row['modelo'];
    $obj->descripcion=$row['descripcion'];
    $obj->precioUnit=$row['precioUnit'];
    $obj->precioLista=$row['precioLista'];
    $obj->fotoart=$row['fotoart'];
    $datos[$i] = $obj;
    $i++;
}
$response->datos=$datos;

mysqli_close($cx);
header('Content-Type: application/json');
echo json_encode($response);
?>
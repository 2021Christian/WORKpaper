<?php

$response = new stdClass();

if(!isset($pedido)){
$sql="insert into carritos (descripcion,monto, id_estado) values (descr,precioUnit,0)";
$result=mysqli_query($cx, $sql);

$sql2="select idcarrito from carritos where descripcion=descr";
$pedido=mysqli_query($cx, $sql2);

$sql3 ="insert into articulocarro values($id_carrito, id_articulo, $cantidad)";
$result3=mysqli_query($cx, $sql3);
}
else{
    $sql4="select id_articulo from articuloscarro where id_carrito=$id_carrito";
    $id_art=mysqli_query($cx, $sql4);
    if($id_articulo==$id_art){
        //sumar uno a cantidad
    }
    else{
        //guardar id_carrito, id_aticulo, cantidad, precioActual
    }
}

mysqli_close($cx);
header('Content-Type: application/json');
echo json_encode($response);
?>
<?php

include("conectar.php");

$Comuna=$_GET['txtComuna'];

$consultaAgregar="INSERT INTO comuna(nombre) VALUES ('$Comuna');";

$resultado=mysqli_query($con,$consultaAgregar);

if($resultado){

?>
    
    <script>alert("Comuna registrada con éxito");</script>

<?php
    header("Location: index.php");
    mysqli_close($con);

}else{
    echo "No se pudo insertar";
    header("Location: index.php");}

?>
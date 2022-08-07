<?
include("conectar.php");
$consultaEliminarTabla="TRUNCATE TABLE comuna";
$resultado= mysqli_query($con, $consultaEliminarTabla);
if($resultado){
echo "Tabla eliminada con éxito";
mysqli_close($con);
}else{
echo "No se pudo Eliminar";
header("Location: index.php");
}
?>
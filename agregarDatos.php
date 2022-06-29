<?
include("conectar.php");
$Comuna=$_GET['txtComuna'];
$consultaAgregar="INSERT INTO comuna(nombre) VALUES ('$Comuna');";
$resultado=mysqli_query($con,$consultaAgregar);
if($resultado){
echo "<script>
    alert('Comuna registrada con éxito'); 
    window.location= 'index.php'
</script>";
mysqli_close($con);
}else{
echo "<script>alert('No se pudo insertar'); windows.history.go(-1);</script>";
header("Location: index.php");}
?>
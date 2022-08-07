<?php 
	include("conectar.php");
	$id=$_GET['id'];
	$consultaEliminar="DELETE FROM comuna WHERE id = '$id'";
	$resultado= mysqli_query($con, $consultaEliminar);
	if($resultado){
	echo "Comuna eliminada con éxito";
	mysqli_close($con);
	}else{
	echo "No se pudo insertar";
	header("Location: index.php");
	}
 ?>

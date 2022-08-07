<?php
	include("conectar.php");
	$id=$_POST['txtID'];
	$Comuna=$_POST['txtComuna'];
	$consultaActualizar="UPDATE comuna SET nombre='$Comuna' WHERE id = '$id';";
	$resultado= mysqli_query($con, $consultaActualizar);
	if($resultado){
	echo "Comuna actualizada con éxito";
	mysqli_close($con);
	}else{
	echo "No se pudo insertar";
	header("Location: index.php");
	}
?>

<?php 
	include("conectar.php");
	$id=$_GET['id'];
	$consultaEliminar="DELETE FROM comuna WHERE id = '$id'";
	$resultado= mysqli_query($con, $consultaEliminar);
	if($resultado){
	echo "<script>
		alert('Comuna eliminada con éxito'); 
		window.location= 'index.php'
	</script>";
	mysqli_close($con);


	}else{
	echo "<script>alert('No se pudo insertar'); windows.history.go(-1);</script>";
	header("Location: index.php");
	}
 ?>

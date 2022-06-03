<?php
	include("conectar.php");
	$id=$_POST['txtID'];
	$Comuna=$_POST['txtComuna'];
	$consultaActualizar="UPDATE comuna SET nombre='$Comuna' WHERE id = '$id';";
	$resultado= mysqli_query($con, $consultaActualizar);
	if($resultado){
	echo "<script>
		alert('Comuna actualizada con éxito');
		window.location= 'index.php'
	</script>";
	mysqli_close($con);
	}else{
	echo "<script>alert('No se pudo insertar');</script>";
	header("Location: index.php");
	}
?>

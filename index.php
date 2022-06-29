<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<title>Comunas</title>
</head>
<body>
  <h4 style="text-align: center; color: red;">Agregar Comunas</h4>
  <form action="agregarDatos.php" method="GET" style="text-align: center; margin-top: 2%; margin-bottom: 2%;">
  <input type="text" name="txtComuna" id="txtComuna">
  <a href="index.php?create=true"><button type="submit">Enviar</button></a>&nbsp <a href="index.php?resettable=true"><button type="button" name="">Resetear tabla</button></a>
  </form>
  
	<table class="table table-hover table-responsive-md" border="2">
    <thead>
      	<tr align="center">
	      <th>Id</th>
	      <th>Nombre</th>
	      <th colspan="2">Acción</th>
    	</tr>
    </thead>
    <tbody>
<?php
	include("conectar.php");
  	$sql="SELECT * from comuna";
    $result=mysqli_query($con,$sql);
    while($mostrar=mysqli_fetch_assoc($result)) { ?>

    <tr align="center">
      <td><?php echo $mostrar['id'];?></td>
      <td><?php echo $mostrar['nombre'];?></td>
      <td><a href="index.php?id=<?php echo $mostrar['id']; ?>?delete=true">Eliminar</a></td>
      <td><a href="actualizarDatos.php?id=<?php echo $mostrar['id']; ?>">Editar</a></td>
    </tr>
  <?php } ?>

<?php
include("conectar.php");

if(isset($_GET['resettable'])){
  include("conectar.php");
	$consultaEliminarTabla="TRUNCATE TABLE comuna";
	$resultado= mysqli_query($con, $consultaEliminarTabla);
	if($resultado){
	echo "<script>
		alert('Tabla eliminada con éxito');
		window.location='index.php'
	</script>";
	mysqli_close($con);
	}else{
	echo "<script>alert('No se pudo Eliminar'); windows.history.go(-1);</script>";
	header("Location: index.php");
	}
}


if(isset($_GET['delete'])){
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
	echo "<script>alert('No se pudo eliminar'); windows.history.go(-1);</script>";
	header("Location: index.php");
	}}
?>
</body>
</html>
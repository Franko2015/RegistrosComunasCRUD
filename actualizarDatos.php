 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<title>Editar comuna</title>
	<meta charset="utf-8">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
 </head>
 <body>
 	<?php
$id=$_GET['id'];
include("conectar.php");
$sql="SELECT * from comuna WHERE id = '$id'";
$result=mysqli_query($con,$sql);
while($mostrar=mysqli_fetch_assoc($result)) { ?>

<h4 style="text-align: center; color: red;">Editar comuna</h4>
  <form class="form-horizontal" action="procesoActualizarDatos.php" method="POST" style="text-align: center; margin-top: 2%; margin-bottom: 2%;">
      <input type="text" name="txtID" id="txtID" value="<?php echo $mostrar['id']; ?>">
      <input type="text" name="txtComuna" id="txtComuna" value="<?php echo $mostrar['nombre']; ?>">
      <button type="submit">Enviar</button>
  </form>
	<?php } ?>
 </body>
 </html>

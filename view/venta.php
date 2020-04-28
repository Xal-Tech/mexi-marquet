<!DOCTYPE html>
<html lang="es">
<head>
	<link rel="stylesheet" type="text/css" href="../css/base.css">
	<?php 
		include '../inc/link.php';
	?>
	<link rel="stylesheet" type="text/css" href="../css/venta.css">
	<meta charset="UTF-8">
	<title>Vender</title>
</head>
<body>
	<?php 
		include '../inc/navbar.php';
		include '../inc/jumbutron.php';
		include '../inc/carrito.php'
	 ?>
	<div class="container-fluid">
		<div class="container">
			<form  class="align-items-centeraction" method="get" accept-charset="utf-8">
				<div class="form-group">
					<label class="info">Nombre del producto</label><br>
					<input type="text" class="form-control"  name="producto" placeholder="Nombre del producto">
				</div>
				<div class="form-group">
					<label for="unidad" class="info">Tipo de unidad de venta</label>
					<select name="unidad" id="unidad" class="form-control">
						<option selected>Elegir...</option>
						<option>G</option>
						<option>Unidad</option>
						<option>L</option>
					</select>
				</div>
				<div class="form-group">
					<label class="info">Precio del producto por medida:</label><br>
					<input type="text" class="form-control"  name="precio" placeholder="Precio/Medida">
				</div>
				<div class="form-group">
					<label for="input-imagen">Imagen</label>
	    			<input type="file" class="form-control-file" id="input-imagen" name="input-imagen">
				</div>
				<div class="form-group text-center">
					<button type="submit" class="btn btn-info" >Registrar Producto</button>
				</div>
			</form>
		</div>

		
	

	



</body>
</html>
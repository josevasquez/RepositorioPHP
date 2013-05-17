<?php
	session_start();
	$arreglo1=$_SESSION['arreglo1'];
	$arreglo2=$_SESSION['arreglo2'];
	$coincidencias=$_SESSION['coincidencias'];
	$cant_coincidencias=$_SESSION['cant_coincidencias'];
	$dinero=$_SESSION['dinero'];
	$frutas1=array_values($arreglo1);
	$frutas2=array_values($arreglo2);
	echo "Usted:" . ""  . print_r($frutas1);
	?>
	<br/>
	<?php
	echo  "La pc:" . print_r($frutas2);
	?>
	<br/>
	<?php
		echo "Frutas Iguales:". print_r($coincidencias);
	?>
	<br/>
	<?php
		echo "Cantidad de frutas iguales" . print_r($cant_coincidencias);
	?>
	<br/>
	<?php echo "Su saldo:" . $dinero;
?>
<!DOCTYPE html>
<html>
	<head></head>
	<body>
	<br/>
			<a href="inicio.php">Regresar a jugar</a>
	</body>
</html>
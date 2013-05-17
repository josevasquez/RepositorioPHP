<?php
	session_start();
	if(!isset($_SESSION['dinero']))
	{
		$_SESSION['dinero']=100;
	}
	if(isset($_GET['error']) && $_GET['error']==1)
	{
		echo "SELECCIONE SU FRUTA";
	}
	if(isset($_GET['error']) && $_GET['error']==2)
	{
		echo "ELIJA VALORES DIFERENTES";
	}
	if($_SESSION['dinero']<10)
	{
		echo "NO TIENES SUFICIENTE DINERO, RECARGA";
	}
?>
<!doctype html>
<html>
	<body>
		<h1>FRUTITAS</h1>
		<form action="guardar.php" method="post">
		<select name="fruta1">
			<option value="seleccione">	Seleccione</option>
			<option value="Fruta1">	Fresa</option>
			<option value="Fruta2">	Manzana</option>
			<option value="Fruta3">	Durazno</option>
			<option value="Fruta4">	Mandarina</option>
			<option value="Fruta5">	Melocot&oacute;n</option>
			<option value="Fruta6">	Toronja</option>
			<option value="Fruta7">	Papaya</option>
			<option value="Fruta8">	Naranja</option>
			<option value="Fruta9">	Pl&aacute;tano</option>
			<option value="Fruta10">Ciruela</option>
		</select>
		<select name="fruta2">
			<option value="seleccione">	Seleccione</option>
			<option value="Fruta1">	Fresa</option>
			<option value="Fruta2">	Manzana</option>
			<option value="Fruta3">	Durazno</option>
			<option value="Fruta4">	Mandarina</option>
			<option value="Fruta5">	Melocot&oacute;n</option>
			<option value="Fruta6">	Toronja</option>
			<option value="Fruta7">	Papaya</option>
			<option value="Fruta8">	Naranja</option>
			<option value="Fruta9">	Pl&aacute;tano</option>
			<option value="Fruta10">Ciruela</option>
		</select >
		<select name="fruta3">
			<option value="seleccione">	Seleccione</option>
			<option value="Fruta1">	Fresa</option>
			<option value="Fruta2">	Manzana</option>
			<option value="Fruta3">	Durazno</option>
			<option value="Fruta4">	Mandarina</option>
			<option value="Fruta5">	Melocot&oacute;n</option>
			<option value="Fruta6">	Toronja</option>
			<option value="Fruta7">	Papaya</option>
			<option value="Fruta8">	Naranja</option>
			<option value="Fruta9">	Pl&aacute;tano</option>
			<option value="Fruta10">Ciruela</option>
		</select><br/>
		<p> Su saldo es:<?php echo $_SESSION['dinero'] ?></p><br/>
		<input type="submit" value="JUGAR"
		<?php 
			if($_SESSION['dinero']<10)
			{
				echo "disabled=true";
			}
		?>
		/>
		</form>
	</body>
</html>
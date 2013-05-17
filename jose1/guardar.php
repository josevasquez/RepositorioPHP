<?PHP	
	include 'funciones.php';
	#leo la data
	$frutas=array();
	$frutas[]=$_POST['fruta1'];
	$frutas[]=$_POST['fruta2'];
	$frutas[]=$_POST['fruta3'];
	#verifico que haya elegido la fruta
	for($i=0;$i<3;$i++)
	{
		if($frutas[$i]=="seleccione")
		{
			header('Location: inicio.php?error=1');
			exit();
		}
	}
	#validamos la eleccion de las frutas
	$validar=validar_jugada($frutas);
	#verificamos si hay error
	if($validar==false)
	{
		header('Location: inicio.php?error=2');
		exit();
	}
	#guardamos jugada de la pc
	$arreglopc=genera_jugada();
	#guardamos las coincidencias
	$coincidencias=coincidencias($frutas,$arreglopc);
	#guardamos la cantidad de coincidencias
	$cant_coincidencias=cant_coincidencias($coincidencias);
	#iniciamos sesion para todas las variables
	$_SESSION['arreglo2']=$arreglopc;
	$_SESSION['arreglo1']=$frutas;
	$_SESSION['coincidencias']=$coincidencias;
	$_SESSION['cant_coincidencias']=$cant_coincidencias;
	$dinero=$_SESSION['dinero'];
	#realizamos la operacion de la apuesta
	function apuesta($dinero)
	{
		if($_SESSION['cant_coincidencias']==2)
		{
			$dinero+=30;
		}
		elseif($_SESSION['cant_coincidencias']==3)
		{
			$dinero+=50;
		}
		elseif($_SESSION['cant_coincidencias']<=1)
		{
			$dinero-=10;
		}
		return $dinero;
	}
	$_SESSION['dinero']=apuesta($dinero);
	#mandamos al recurso confirmar
	header('Location: confirmar.php');
?>
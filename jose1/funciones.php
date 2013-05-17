<?php
#validar jugada
session_start();
function validar_jugada($jugada1)
{
	$jugada1=array_unique($jugada1);
	if(count($jugada1)!=3)
	{
		return false;
	}
	return true;
}
#jugada_pc
function genera_jugada()
{
	$arreglo=array("Fruta1","Fruta2","Fruta3","Fruta4","Fruta5","Fruta6","Fruta7","Fruta8","Fruta9","Fruta10");
	shuffle($arreglo);
	$arreglo=array_slice($arreglo,7);
	return $arreglo;
}

#captar_coincidencia
function coincidencias($jugada1,$jugada2)
{
	$coincidencia1=array_intersect($jugada1,$jugada2);
	return $coincidencia1;
}
function cant_coincidencias($coincidencia)
{
	$coincidencia2=count($coincidencia);
	return $coincidencia2;
}
?>
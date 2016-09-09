<?php
//comentario de una sola linea
/*
Esto es 
un comentario 
multilinea
*/
//imprimir en pantalla
echo "Hola Mundo";
echo "<br />Hola cruel mundo<br />estoy <h1>aprendiendo PHP</h1>";
//variables
$nombre="Jonathan";
$Nombre="Ulises";

//concatenación de cadenas y variables
echo $nombre."&nbsp;".$Nombre;
echo "<br />";

$num1=5;
$num2=77;

$suma = $num1 + $num2;
$resta = $num1 - $num2;
$multiplica = $num1 * $num2;

echo $suma;
echo $resta;
echo $multiplica;

echo "<br />La variable \$suma tiene el valor de $suma <br />";
echo "<br />La variable \$resta tiene el valor de $resta <br />";
echo "<br />La variable \$multiplica tiene el valor de $multiplica <br />";


$modulo = $num2 % 2;

if($modulo == 0){
	echo "El n&uacute;mero es Par";
}else{
	echo "El n&uacute;mero es Impar";
}
echo "<br />";

for($i=0;$i<=10;$i++){
	echo $i."<br />";
}
?>
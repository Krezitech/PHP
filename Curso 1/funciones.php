<?php 

function fun(){
echo "Saludos";
return;
} 
echo fun();


function fun2(){
$var= "Salu2";
return $var;
} 

echo "<br>";
echo fun2();


echo "<br>";
echo "<br>";
echo "<br>";

function sum($a,$b){
$suma = $a + $b;
return $suma;

}

echo sum(2,77);

$var1=20;
$var2=33;
echo "<br>";

echo sum($var1,$var2);


 ?>
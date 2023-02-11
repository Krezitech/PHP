<?php 



/*
== igual (compara dos caracteres iguales)
=== identico (ademas tiene q ser mismo tipo de dato)

!= Diferente (tmb <>)
!== No identico 

<
>

<=
>=

*/

$a=3;
$b=7;

###### === ######

if ($a===3) {
    echo "1) ";
    echo "Si es igual";
}else{
   echo "1) ";
    echo "No es igual";
}


echo "<br>";

if ($a==='3') {
   echo "2) "; echo "Si es igual";
}else{
   echo "2) "; echo "No es igual";
}


###### !== ######

echo "<br>";
if ($a!==3) {
    echo "3) ";echo "Si es igual";
}else{
    echo "3) ";echo "No es igual";
}


echo "<br>";

if ($a!=='3') {
  echo "4) ";  echo "Si es igual";
}else{
    echo "4) ";echo "No es igual";
}








 ?>
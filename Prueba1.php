<?php
$var1 = 10;
$var2 = 2;

echo "Las dos variables para operar van a ser ",$var1," y ",$var2, "<br>";
echo "<br>";

echo $var1,"+",$var2,"=", $var1+$var2, "<br>";
echo $var1,"-",$var2,"=", $var1-$var2, "<br>";
echo $var1,"*",$var2,"=", $var1*$var2, "<br>";
echo $var1,"/",$var2,"=", $var1/$var2, "<br>";
echo $var1,"%",$var2,"=", $var1%$var2, "<br>";
echo "<br>";

echo "¿Es la variable 1 mayor que la variable 2?: ", $var1 > $var2, "<br>";
echo "¿Es la variable 1 igual que la variable 2?: ", $var1 == $var2, "<br>";
echo "¿Son ambos números mayores que 5?: ", $var1,$var2 > 5, "<br>";
echo "¿Es alguno de los número menores que 5?: ", $var1 < 5, $var2 <5, "<br>";

// Mira cómo galopa, a 4
?>
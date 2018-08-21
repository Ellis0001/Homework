<!DOCTYPE html>
<html lang="ru">
    <head>
        <title>Дополнительное задание к уроку "Введение в PHP" </title>
      </head>
    <body>
     
 	<h1>Реализовать предложенный алгоритм</h1>

<h2><?php
$x=rand(0,100);
echo "Число ".$x;
	?></h2><br /><?php 

$a=1;
$b=1;
$c=0;

while (true)
{

if ($a > $x) {
       echo "задуманное число НЕ входит в числовой ряд";
	 break;
} elseif ($a == $x) {
    echo "Задуманное число входит в числовой ряд";
	break;
} else {$c = $a;
        $a = $a+ $b;
        $b = $c;
}};
		?><br /><?php 
	echo "(1) ".$a;
	?><br /><?php 
	echo "(2) ".$b;
		?><br /><?php 
	echo "(3) ".$c;
		?><br /><?php 
?>


	</section>
		
   </body>
</html>

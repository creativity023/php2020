<?php

// 3. Объяснить, как работает данный код:
/*
$a = 5;
$b = '05';
var_dump($a == $b); // Почему true?
/*
число 5 неявно сравнивается с со стокой '5', которое преабразуется в число 5.
5 = 5 - истина, поэтому true
 */
//var_dump(( int )'012345'); // Почему 12345?
/* int преобразует
стоку в число */
//ar_dump(( float )123.0 === ( int )123.0); // Почему false?
/*
float  - дробное представление, int  - числовае,
поэтому при проверне строгого соответствия они не равны
*/
//var_dump(( int )0 === ( int )'hello, world'); // Почему true?
/*
( int )0 дает false, ( int )'hello, world') дает false,
поэтому false === false, истина, поэтому true
*/


// 4. Задание

$title= "Title <br/>";
$content = "Content";

echo $title;
echo $content;


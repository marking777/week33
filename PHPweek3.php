<?php

// deel1
 $myArray = ['auto','fiets','brommer','bus','vliegtuig','trein'];

 $myArray[] = 'motor';

 echo [0,1,2,3,4,5];

 // deel2

 $myArray = ['auto','fiets','brommer','bus','vliegtuig','trein'];

 $arrays = count($myArray);

 echo  "Het array heeft $arrays elementen";

 // deel3
 //regel 2 is bar, regel 5 is nummer4  , regel 8 is toyota
 //regel 9 is alle drie , regel 12 is nummer 5 regel19 is one
 
 //deel 4

 $cijfersphp = [4.4, 4.6, 5.6, 6.1, 7.6, 7.2];

 $gemiddelde = round(array_sum($cijfersphp) / count($cijfersphp), 1);
 
 echo "Gemiddelde is: $gemiddelde";
 
?>
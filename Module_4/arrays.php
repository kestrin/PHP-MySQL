<?php
/*
$sports =  ['football','basketball','voleyball'];
echo $sports[1];
"<br>"
echo end($sports);
"<br>"
echo count($sport);
"<br>";
$sports = array('Football', 'Basketball','Voleyball');
for($i =0; $i< 3; $i++){
    echo $sports[$i],"\n";
}
$sports = array('Football', 'Basketball','Voleyball','Golf');
array_pop($sports);
var_dump($sports);
$sports = array('Football', 'Basketball','Voleyball','Golf');
array_unshift($sports, 'Tennis');
var_dump($sports);
*/
$sports = array('Football', 'Basketball','Voleyball','Golf');
array_shift($sports);
var_dump($sports);
?>
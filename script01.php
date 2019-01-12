<?php
//Day 1: Get the floor number from the instruction  

//$instr = "(()";
$instr = file_get_contents('inputs\input01.txt');
$steps = str_split($instr);

$floor = 0;

for($x = 0; $x < count($steps); $x++) {
    if($steps[$x] == "(") $floor++; else $floor--;
}

echo "Floor: ".$floor;
?>

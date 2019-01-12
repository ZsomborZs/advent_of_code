<?php
//Day 3: Check the houses around the instruction path, which was visited only once

//$instr="^>v<";
$instr = file_get_contents('inputs\input03.txt');
$steps = str_split($instr);

//+1 for the start position
$pos_x = [count($steps)+1];
$pos_y = [count($steps)+1];

$current_pos_x=0; $current_pos_y=0;
$pos_x[0]=0; $pos_y[0]=0;

$visited=1;

for($i = 0; $i < count($steps); $i++) {
    switch ($steps[$i]) {
        case "^": $current_pos_y++; break;
        case ">": $current_pos_x++; break;
        case "v": $current_pos_y--; break;
        case "<": $current_pos_x--; break;
    }
    
    $pos_x[$i+1]=$current_pos_x;
    $pos_y[$i+1]=$current_pos_y;
    
    $was_visited=false;
    for($i1 = 0; $i1 < $i; $i1++){
        if($pos_x[$i1]==$pos_x[$i+1]&&$pos_y[$i1]==$pos_y[$i+1])$was_visited=true;
    }
    
    if(!$was_visited)$visited++;
}

echo " Visited houses: ".$visited;
?>

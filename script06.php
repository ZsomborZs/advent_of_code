<?php
//Day 6: Counting which light position are lit, after the instruction lines

$lines = file('inputs\input06.txt');

$lights = array_fill(0, 1000, array_fill(0, 1000, false));

foreach ($lines as $line) {
	preg_match('#((?:on|off)|toggle) ([0-9]+),([0-9]+) through ([0-9]+),([0-9]+)#', $line, $task);
	list($begin,$instruct, $x1, $y1, $x2, $y2) = $task;
	
	//echo $instruct;
	for($x = min($x1,$x2); $x <= max($x1,$x2); $x++){
		for($y = min($y1,$y2); $y <= max($y1,$y2); $y++){
			if($instruct == 'on') $lights[$x][$y] = true;
			elseif($instruct == 'off') $lights[$x][$y] = false;
			elseif($instruct == 'toggle') $lights[$x][$y] = !$lights[$x][$y];
		}
	}
}

$light_count = 0;
foreach($lights as $x){
	foreach($x as $y){
		if($y) $light_count++;
	}
}

echo $light_count." lights are lit.";
?>


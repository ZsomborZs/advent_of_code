<?php
//Day 2: Calculate the square feet of wrapping paper

$boxs = file('inputs\input02.txt');

$total_area = 0;

function getArea($l,$w,$h){
	return (2*$l*$w) + (2*$w*$h) + (2*$h*$l);
}

for($x = 0; $x < count($boxs); $x++) {
    list($length,$width,$height) = explode('x', $boxs[$x]);
	
	$length=intval($length);
	$width=intval($width);
	$height=intval($height);
	
	$dimensions = array($length, $width, $height);
    
	sort($dimensions);
    $extra = $dimensions[0] * $dimensions[1];
    $total_area+=getArea($length, $width, $height)+$extra;
}

echo "Total area: ".$total_area;
?>

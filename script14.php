<?php
//Day 14: Deer racing

$lines = file('inputs\input14.txt');

$deers = array();
foreach ($lines as $line) {
    preg_match('#([a-z]+) can fly ([0-9]+) km/s for ([0-9]+) seconds, but then must rest for ([0-9]+) seconds.#SADi', $line, $object);
    list($begin, $name, $speed, $time, $rest) = $object;
    $deers[$name] = array('speed' => $speed, 'time' => $time, 'rest' => $rest);
}

//echo $deer['Comet']['speed'];

function getDistance($deer, $t){
	$period = $deer['time'] + $deer['rest'];
	$distance = floor($t / $period) * $deer['speed'] * $deer['time'];
	$distance += min(($t % $period), $deer['time']) * $deer['speed'];
	return intval($distance);
}

$maxDistance = 0;
$firstDeer;
foreach($deers as $object){
    $object['distance'] = getDistance($object, 2503);
    //echo $object['distance']."\n";
    if($object['distance'] > $maxDistance){$maxDistance = $object['distance'];$firstDeer=$name;}
}

echo $firstDeer." has the max distance: ".$maxDistance." km";
?>
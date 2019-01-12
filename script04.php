<?php
//Day 4: Find the special MD5 hash

function find_MD5($secret_key){
	$hash = '';
	$start="00000";

	$i = 0;
	while(true){
		$hash = md5($secret_key . $i);
		if(stripos($hash, $start) === 0){break;}
		$i++;
	}

	echo "Number: ".$i." , hash: ".$hash." <br>";
}

$keys = file('inputs\input04.txt');
//foreach($keys as $key)find_MD5($key); 

//faster when counting one 
$secretKey="abcdef";
find_MD5($secretKey);
?>

<?php
//Day 5: Check nice strings

$vowels = array('a', 'e', 'i', 'o', 'u');
$naughtyPairs = array('ab', 'cd', 'pq', 'xy');

function isNiceWord($word){		
    global $vowels, $naughtyPairs;

    $vowelCount = 0;
    $hasDuplicate = false;
    $hasNaughty = false;

    for ($i = 0; $i < strlen($word); $i++) {
        if (in_array($word[$i], $vowels))$vowelCount++;
	    if ($i >=1 && $word[$i-1] == $word[$i])$hasDuplicate=true;
	    if ($i >=1 && in_array($word[$i-1] . $word[$i], $naughtyPairs))$hasNaughty=true;
    }

    return $vowelCount>2&&$hasDuplicate&&!$hasNaughty;
}

$count=0;
$words = file('inputs\input05.txt');
foreach($words as $word) if(isNiceWord($word))$count++; 

echo $count." nice words counted.";
?>

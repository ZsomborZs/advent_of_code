<?php
//Day 10: Look and say the number

function lookAndSay($str){
    $in = str_split($str);
	$out = "";
	$count = 0;
	$number = $in[0];
	
	for($i=0;$i<strlen($str);$i++){
	    if($in[$i]==$number) $count++;
	    else{
	        $out.=$count.$number; $count=1; $number=$in[$i];
	    }
	    if($i==strlen($str)-1)$out.=$count.$number;
	}
	
	//echo $out."\n"; 
	//echo strlen($out)."<br>";
	return $out;
}

$num="1";
for($i = 0; $i < 40; $i++) $num = lookAndSay($num);

echo "Length: ".strlen($num);
?>

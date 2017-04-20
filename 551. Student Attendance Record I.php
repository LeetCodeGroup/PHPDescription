<?php
/*
	You are given a string representing an attendance record for a student. The record only contains the following three characters:

	'A' : Absent.
	'L' : Late.
	'P' : Present.
	A student could be rewarded if his attendance record doesn't contain more than one 'A' (absent) or more than two continuous 'L' (late).

	You need to return whether the student could be rewarded according to his attendance record.
*/
// Example 1
//Input: "PPALLP"
//Output: True

//Example 2
//Input: "PPALLL"
//Output: False
function Reward($str)
{
	$arr = str_split($str);
	$lcount = 0;
	$count = array_count_values($arr);
	foreach($arr as $v){
		switch ($v) {
			case 'L':
				$lcount += 1;
				break;
			default:
				if($lcount < 3){
					$lcount = 0;
				}
				break;
		}
	}
	if($count['A'] >= 2 || $lcount >= 3){
		echo "false";
	}else{
		echo "true";
	}
}


function Reward2($str)
{
  $max='';
  while($str != ''){
    $i=0;
    while($i<strlen($str) && $str[$i]==$str[0]){
    	$i++;
    } 
    $max=substr($str,0,$i);
    $max_v = substr($str,0,1);
    if($max_v == 'A'){
    	$max_a[] = $max;
    	if(count($max_a) >=2){
    		$resource[] = "false";
    	}
    }else if($max_v == 'L'){
    	$len_l = strlen($max);
    	if($len_l >=3){
    		$resource[]  = "false";
    	}
    }else{
    	$resource[] = "true";
    }
    $str=substr($str,$i);
  }
  if(in_array("false",$resource)){
  	echo "false";
  }else{
  	echo "true";
  }
}

?>
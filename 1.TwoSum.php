<?
	//$arr = [2,7,11,15]; 
	//$target = 17;
	//$len = count($arr);
	
	function TwoSum($arr,$target,$len){
		for($i=0;$i<$len;$i++){
			for($j=$i;$j<$len;$j++){
				$count = $arr[$j] + $arr[$i];
				if($count == $target){
					$resource[] = $i;
					$resource[] = $j;
				}
			}
		}
		return $resource;	
	}


?>
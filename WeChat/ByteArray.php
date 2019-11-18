<?php
class ByteArray{
	private $bArray;
	
	public function __construct($str = ''){
		$this -> bArray = array();
		for($i=0;$i<strlen($str);$i++){
			$this -> bArray[$i] = ord($str[$i]);
		}
	}
	
	public function append($b, $type = 0){
		if($type){
			for($i=0;$i<strlen($b);$i++){
				$this -> bArray[] = ord($b[$i]);
			}
		}else{
			if(is_array($b)){
				foreach($b as $t){
					$this -> bArray[] = $t;
				}
			}else{
				$this -> bArray[] = $b;
			}
		}
	}
	
	public function len(){
		return count($this -> bArray);
	}
	
	public function toStr(){
		$ret = "";
		for($i=0;$i<count($this -> bArray);$i++){
			$ret .= chr($this -> bArray[$i]);
		}
		return $ret;
	}
	
	public function seek($index, $type = 0){
		if($type){
			return chr($this -> bArray[$index]);
		}else{
			return $this -> bArray[$index];
		}
	}
	
	public function seekBytes($index, $num, $type = 0){
		//echo "DEBUG: seekBytes: index {$index}, num {$num}\n";
		$ret = "";
		for($i=0;$i<$num;$i++){
			$ret .= $this -> seek($index + $i, 1);
		}
		if($type){
			return new ByteArray($ret);
		}else{
			return $ret;
		}
	}
	
	public function modify($index, $val, $type = 0){
		if($type){
			$this -> bArray[$index] = ord($val);
		}else{
			$this -> bArray[$index] = $val;
		}
	}
	
	public function dump(){
		for($i=0;$i<count($this -> bArray);$i++){
			echo bin2hex(chr($this -> bArray[$i])) . ' ';
		}
		echo "\n";
	}
}
<?php
	$str1 = "Connect/Connect.php";
	$str2 = "Connect/Connect.php";

	if(file_exists($str1)){
		$file=$str1;
	}
	else{
		$file=$str2;
	}	
	
	require $file;

	class Result extends database{
		public function addResult($ketqua, $loinhan){
			$query = "INSERT INTO result (ketqua, loinhan) VALUES (?,?);";
			$insert = $this->connect->prepare($query);
			$result = $insert->execute(array($ketqua, $loinhan));
		}
	}

?>
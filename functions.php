<?php 
	
	//定义
	function simpleFunction(){
		echo "fuck u bitch<br>";
	}
	simpleFunction();


	//带餐函数
	function fuckU($asd){
		echo "hello $asd<br>";
	}
	fuckU("tom");

	#返回值函数
	function addNumbers($num1,$num2){
		return $num1+$num2;
	}

	echo addNumbers(1,2);

	echo "<br>";

	#函数传引用
	$myNum = 10;

	function addFive($num){
		$num += 5;
	}
	addFive($myNum);


	function addTen(&$num){
		$num += 10;
	}
	addTen($myNum);

	echo "value:$myNum<br>";
 ?>

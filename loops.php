<?php 

	#根据某种条件 重复执行某段代码
	
	// for -  init,conditions,increament
	// while -  conditions
	// do while - condions
	// for each-

	for ($i=0; $i < 10; $i++) { 
		// echo "$i<br>";
	}


	// $i = 0;
	// while ($i <= 10) {
	// 	echo "$i<br>";
	// 	$i++;
	// }


	// $i=0;
	// do{
	// 	echo "$i<br>";
	// 	$i++;
	// }
	// while ($i <= 10);


	//foreach   下标数组

	// as后面的值来接收as前面的值
	// $people = ["henry","bucky","emily"];
	// foreach ($people as $person) {
	// 	echo "$person<br>";
	// }



	// foreach 关联数组
	$people = [
		"henry"=> "henry@gmail.com",
		"bucky"=> "bucky@gmail.com",
		"emily"=> "emily@gmail.com",
	];
	//关联的结构必须用下面的形式  但是名字无所谓 一个指key一个指value
	foreach ($people as $person => $email) {
		echo "$person : $email<br>";
	}


	#打印1-100之间的7的倍数
	for ($i=1; $i < 100; $i++) { 
		if($i%7 == 0) {
			echo "$i<br>";
		}
	}
	echo "<br>";
	#打印1-100之间各位为7的数
	for ($i1=1; $i1 <100 ; $i1++) { 
		if($i1%10 == 7){
			echo "$i1<br>";
		}
	}

	echo "<br>";
	#打印1-100之间十位为7的数
	for ($i2=1; $i2 < 100; $i2++) { 
		if(intval($i2%100/10) == 7){
			echo "$i2<br>";
		}
	}


 ?>
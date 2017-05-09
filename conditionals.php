<?php 
	#条件  分支-if-switch

	#关系运算符  
	/*
		== === != !== > < >= <=
	*/
		// $num = 4;

		// // !== 不等等是值和类型都不等
		// if ($num != '4') {
		// 	echo "$num 确实不等等与4";
		// }
		// else if($num > 4){
		// 	echo "$num 确实大于4";
		// }
		// else{
		// 	echo "wtf!";	
		// }
		
	#Nesting If 嵌套

		// $num = 6;
		// if($num > 4){
		// 	if($num<10){
		// 		echo "$num 大于4 并且小于10";
		// 	}
		// }else{
		// 	echo "whatever!";
		// }

		#逻辑运算符
		/*
			AND && 左右两边都为真才真  
			OR ||  一个为真就为真
			XOR  只有一个是真的才是真的 
		*/

		// $num = 6;
		// if($num>4 && $num<10){
		// 	echo "牛逼牛逼";
		// }
		// // 用AND也可以
		// if($num>5 AND $num<9){
		// 	echo "牛逼牛逼2";
		// }


		// $x = 6;
		// $y = 7;
		// $z = 8;

		// $result = $z && $x || $y;
		// echo $result;
		// //  在php里 逻辑运算符的结果只能是 0和1



		#switch

		$favColor = "red";
		switch ($favColor) {
			case 'red':
				echo " u favourite color is:$favColor";
				break;
			case 'yellow':
				echo " u favourite color is:$favColor";
				break;
			case 'green':
				echo " u favourite color is:$favColor";
				break;
			case 'skyblue':
				echo " u favourite color is:$favColor";
				break;
			
			default:
				echo "there is no color u'd like";
				break;
		}


		//  在js里的switch   内部必须处理 是三等
		//  php里只是双等   











 ?>
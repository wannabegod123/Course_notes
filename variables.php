
<!-- php内外部是可以嵌套标签的 有效 无缝衔接-->
<?php
	// echo "<h1>hello world</h1>";
?>

<?php 
	// echo "everyone";
	// 单行注释
	# 单行注释
	/*
	  多行注释
	*/
	// print "hello world";

	// echo>print  因为echo没有返回值 运行速度快


	// 基础语法 

	// 1.变量
		/*
			-变量的前缀必须是$
			-以字母或者下划线开头
			-由数字 / 字母 /下划线组成
			-驼峰命名法
			-大小写敏感
		*/
		$output = "hello variables";
		echo $output;

	// 2.数据类型 8中
		/* String boolean integer Null object Array Resource float */
		
		// String

		// bool 
			$bool = true; //如果这里是false echo结果为空白 空格都没有
			echo $bool;  // 1

		// number
			$number = 5;
			echo $number; // 5

		// float
			$flaot = 5.5;
			echo $flaot;  // 5.5


	// 数据相加
			$num1 = 7;
			$num2 = 12;
			$sum = $num1 + $num2;

			echo $sum;  //  19

	// 字符串拼接
			$string1 = "hello";
			$string2 = "world";
			// $greeting = $string1 + $string2;
			$greeting = $string1." ".$string2;
			echo $greeting;   
			//如果60行  就是0 ;

	// 单引号 双引号
			$greeting2 = '$string1 $string2';
			$greeting3 = "$string1 $string2";
			echo $greeting3;

			//单引号是单纯的字符串
			//双引号是也是字符串 但是可以识别里面的变量

	// 转义字符
			//    \是转义字符
			$greeting4 = 'they\'re here';
			echo $greeting4;   //    they're here

			//  方法2
			$greeting5 = "they're here";
			echo $greeting5;  // they're here


	// 常量
			//定义方式
			//参数:  常量名(必须大小)  值  大小写不敏感true 敏感false
			define("ABC", "123",true);
			echo ABC;   //123
			echo aBc;  //123


	//循环













	
?>


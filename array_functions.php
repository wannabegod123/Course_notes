<?php 
	#创建一个数组
	// $arr = array(1,2,3,4,5);
	// print_r($arr);


	#使用数组方法添加数组,讲内容添加到上面的数组中。
	
	#shift/unshift 从头/尾 删除元素

	#array_push — 将一个或多个单元压入数组的末尾（入栈）
	// $arr1 = [];
	// array_push($arr1, "123","1234");
	// print_r($arr1);



	#创建一个无序数组，使用数组方法让其排序。
	/*
		数组排序方法有很多 其中
		asort --- arsort
		正序不改变角标 --- 倒序不改变角标


		ksort --- krsort
		正序改变角标  --- 倒序改变角标
	*/



	// $arr2 =[3,16,2,46,855,14,12,0,354,95,4998];
	// ksort($arr2);
	// print_r($arr2);

	#创建一个关联数组，让关联数组排序（倒序）。
	// $arr = array('a' => 1, 'b' =>2,'c'=>3);
	// krsort($arr);
	// print_r($arr);

	#创建一个数组 转化他为字符串

	// $arr = array(1,2,3,4,5);
	// $str = implode(",", $arr);
	// echo $str;

	#创建一个字符串 转化为数组

	$str = "wo shi sha bi";
	$arr = explode(" ", $str);
	var_dump($arr);
	








?>
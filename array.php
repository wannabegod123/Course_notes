<?php 
	# Array: 数组是存储多个数据变量的容器

	/*
		下标数组
		关联数组
	*/

	#下标数组
	$people = ["1","12","123"];
	// echo $people[1];

	$ids = array(23,25,88);
	// echo $ids[2];

	//往数组里添加数据
	$ids[3] = 100;
	$ids[] = 150; //最后一个的后面添加

	//计算数组个数
	// echo count($ids);  //5

	// 数组输出方法 专门为数组诞生的 必须print_r 如果打印数组的某一个值 可以用print
	// print_r($ids);

	//注意 这里也不能用echo打印



	//万能输出方法 for anything... 但是这个方法十分耗费性能
	var_dump($ids);



	#关联数组  
	$person = array("henry" => 35,"buckey" => 25,"emily" => 20);

	// echo $person["henry"];


	$ids = [
		22 => "henry",
		33 => "buckey",
		44 => "emily"
	];

	#添加关联数组
	$ids[55] = "eylse";

	echo $ids[55];

	print_r($ids);

	//关联只能用名字来调值

	//注意！
	/*
		关联数组的特殊情况

		如果关联的key值是字符串 再添加一个没有key值的数据 那么会给这个添加的数据自动从0下标开始分配  调用时通过0来调用

		如果关联的key值是数值 再添加一个没有key值的数据 
		那么会给这个添加的数据自动在前一个数据key的基础上加1 通过上一个数据的key+1作为添加的这个数据的key 来访问value

	*/


	#多维数组
		$cars = array(
			array("honda",20,10,),
			array("toyato",25,10,),
			array("Mecedos",50,10,)
		);

		print($cars[1][1]);


	#循环




 ?>
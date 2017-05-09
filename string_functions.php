<?php 
	# string function 处理字符串的函数
	

	#substr返回字符串的一部分 如同js里的substring
	# 字符串 开始位置 结束位置
	#如果line 8   lo
	$output = substr("hello bitch",1,3);
	$output = substr("hello", -2);

	# strlen 返回字符串长度
	$output = strlen("hello world");

	# strpos 返回首个匹配的字符串的下标
	$output = strpos("hello world", "o");

	# strrpos 返回最后一个匹配的字符串的下标
	$output = strrpos("hello world", "o");

	echo "$output<br>";

	#  去除首尾空格
	$text = "  hello world     ";
	$trimed = trim($text);
	var_dump($trimed);

	echo "<br>";

	# 字符串转大写
	$output = strtoupper("asd");
	echo $output;

	echo "<br>";

	# 字符串转小写
	$output = strtolower("ASD");
	echo $output;

	echo "<br>";

	#将每个单词首字母大写
	$output = ucwords("upper case word");
	echo $output;

	echo "<br>";

	#替换所有匹配内容
	$text = "hello world";
	$output = str_replace("world", "everybody", $text);
	echo $output;

	echo "<br>";

	#判断是否是字符串   只返回1或者0 0不展示
	$val = "hello";
	$output = is_string($val);
	echo $output;

	echo "<br>";
	echo "<br>";

	#练习 过滤掉数组中非字符串的值
	$values = array(true,false,null,'abc',3,33,123,'123','33',' ','',0,'0');
	foreach ($values as $i) {
		if(is_string($i)){
			echo "$i<br>";
		}	
	}
	// 也可以借用另一个数组 用array_push(空数组,遍历的东西) 再在外层打印 也可以


	echo "<br>";

	#php独有的  压缩字符串
	$string = "“世上最遥远的距离，不是生与死的距离，不是天各一方，而是我就站在你面前，你却不知道我爱你。”
最遥远的距离，是你心里没有我。
去年，我收到两封电子邮件，那两个女孩子说：“‘世上最遥远的距离……’这一句，原来不是你写的，是印度诗人泰戈尔写的。”我看了觉得很奇怪，明明是我写的，为什么会变成泰戈尔的诗？";
	
	$compressed = gzcompress($string);
	echo $compressed;

	echo "<br>";

	#解码
	$uncompressed = gzuncompress($compressed);
	echo $uncompressed;





















 ?>
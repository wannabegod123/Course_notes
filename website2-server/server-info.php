<?php 
	# $_SERVER 是一个包含了诸如头信息(header)、路径(path)、以及脚本位置(script locations)等等信息的数组。它是一个超全局变量


	# 创建服务器端数组信息
	$server = [
		//当前运行脚本所在的服务器的主机名。如果脚本运行于虚拟主机中，该名称是由那个虚拟主机所设置的值决定。
		"Host Server Name" => $_SERVER['SERVER_NAME'],
		//服务器标识字符串，在响应请求时的头信息中给出。
		//Apache/2.4.18 (Unix) OpenSSL/1.0.2f PHP/7.0.2 mod_perl/2.0.8-dev Perl/v5.16.3
		"Server Sofeware" => $_SERVER['SERVER_SOFTWARE'],
		//当前运行脚本所在的文档根目录。在服务器配置文件中定义。
		"Document Root" => $_SERVER['DOCUMENT_ROOT'],
		//当前请求头中 Host: 项的内容，如果存在的话。
		//这里是127.0.0.1 当然这里的浏览器不能用localhost 效果和SERVER_NAME是一样的
		"Http Host" => $_SERVER['HTTP_HOST'],
		//包含当前脚本的路径。这在页面需要指向自己时非常有用。__FILE__ 常量包含当前脚本(例如包含文件)的完整路径和文件名。
		"Script Name" => $_SERVER['SCRIPT_NAME'],
		//当前执行脚本的绝对路径。
		"Absoulte Path" => $_SERVER['SCRIPT_FILENAME'],
		//当前执行脚本的文件名，与 document root 有关
		///phpsandbox/website2-server/index.php
		"current Page" => $_SERVER['PHP_SELF']
	];

	echo $server["Host Server Name"];
	echo "<hr>";
	echo $server["Server Sofeware"];
	echo "<hr>";
	echo $server["Document Root"];
	echo "<hr>";
	echo $server["Http Host"];
	echo "<hr>";
	echo $server["Http Host"].$server["Script Name"];
	echo "<hr>";
	echo $server["Absoulte Path"];
	echo "<hr>";
	echo $server["current Page"];

	echo "<hr>";
	print_r($server);


	#客户端数组信息
	$client = [
		//客户端浏览器信息
		"Client System Info" => $_SERVER["HTTP_USER_AGENT"],
		//客户端ip
		"Client Ip" => $_SERVER["REMOTE_ADDR"],
		//端口号
		"Remote Port" => $_SERVER["REMOTE_PORT"]
	];
	echo "<hr>";
	echo $client["Client System Info"];
	echo "<hr>";
	echo $client["Client Ip"];
	echo "<hr>";
	echo $client["Remote Port"];


	
 ?>
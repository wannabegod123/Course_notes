<?php 
	#至少要由一个参数
	echo date('d');  //day
	echo date('m');  //month 
	echo date('y');  // year
	echo date('l');  // day of week 

    echo date('y/m/d');  //如果大写就是2017
    echo date('Y/M/D');  

    echo date('m-d-Y');


    echo date('h'); //hours
    echo date('i');//minutes
    echo date('s'); // seconds

    echo date('a');  // am or pm

    #设置时区
    // date_default_timezone_set('Asia/Shanghai');
    date_default_timezone_set('Etc/GMT-8');

    echo "<hr>";
    echo date('h-i-sa');



    echo "<hr>";
    #时间戳
    // 时分秒月日年
    $timestamp = mktime(07,00,12,1,24,1988);
    echo $timestamp;

    echo "<hr>";
    // 格式化时间戳
    echo date('m/d/Y h:i:sa',$timestamp);


    echo "<hr>";
    #字符串转成时间
    $timestamp2 = strtotime('7:00pm March 24 2017');
    echo $timestamp2;

    #给tomorrow
    echo "<hr>";
    $timestamp3 = strtotime("tomorrow");
    echo date('m/d/Y h:i:sa',$timestamp3);

    echo '<hr>';
    $timestamp4 = strtotime("next Sunday");
    $timestamp5 = strtotime("+2 Days");
    echo date('m/d/Y h:i:sa',$timestamp4);
    echo '<hr>';
    echo date('m/d/Y h:i:sa',$timestamp5);



















 ?>
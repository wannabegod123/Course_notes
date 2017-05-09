<?php 
	#shorthand:语言结构中的简写方法
	$loggedIn = true;

	if ($loggedIn) {
		echo("u r loggedIn");
	}else{
		echo("u r not loggedIn");
	}

	echo "<hr>";

	echo ($loggedIn)?"u r loggedIn":"u r not loggedIn";

	echo "<hr>";

	$isRegistered = ($loggedIn === true)? true:flase;
	echo $isRegistered;



	echo "<hr>";
	#三木嵌套
	$age = 7;
	$score = 12;
	echo "你的分数是:".($score>10?($age<10?"中等成绩1":"优秀成绩"):($age>10?"差等成绩":"中等成绩2"));


	$arr = [1,2,3,4,5];

 ?>

<!-- html & php混编 -->
 <div>
	<?php
		if(!$loggedIn) { 
	?>
		<h1>Welcome to Jungle!</h1>
	<?php  }else{ ?>
		<h1>Good bye boy!</h1>
	<?php } ?>
</div>

<!-- 更美观的写法-->
<div>
	<?php if(!$loggedIn): ?>
		<h1>Welcome to my space!</h1>
	<?php else: ?>
		<h1>我是他妈的else!</h1
	<?php endif; ?>
</div>

<!-- 遍历上面de arr -->

<div>
	<?php foreach ($arr as $value): ?>	
		<?php echo $value; ?>
	<?php endforeach ?>
</div>
<hr>
<!-- for循环遍历上面的东西 -->  
<div>
	<?php for ($i=0;$i<count($arr);$i++): ?>
		<?php echo $arr[$i]; ?>
	<?php endfor ?>
</div>






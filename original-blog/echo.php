<?php
//	$files = "files.txt";
	echo '<form action="./echo.php" method="POST">';
	echo '<input type="text" id="pass" name="pass">';
	echo '<input type="submit" value="login">';
	echo '</form>';
	$pass="$_POST[pass]";
	if(strcmp($pass , "takesue090abc")==0)
	{
		echo "login success.";
		logginged();
	}
	else
	{
		echo "faild.";
	}
	function logginged()
	{

	echo "Hello View<br/><br/>";
	$files = glob('./blog/*.txt');
	
	foreach($files as $key => $value)
	{
		echo "value:".$value.'<br/>';
		$contents = file($value);
		foreach($contents as  $number => $content)
		{
			echo "con".$content.'<br/>';
		}
			
	}
	}
?>

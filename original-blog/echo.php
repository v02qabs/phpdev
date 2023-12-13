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
		$files = fopen('./blog/*.txt', 'r');
		while($line == fgets($files))
		{
			echo $line;
		}
	}
?>

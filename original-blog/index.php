<?php
	echo '<form action="./index.php" method="POST">';
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

echo "Hello. my blog\n\n";
echo "Typing your log to form.";
echo '<form action="https://takesue090.chobi.net/original-blog/write.php" method="POST">';
echo '<input type="text" id="subject" name="subject">';

echo '<textarea name="write" cols="50" rows="5"></textarea>';
echo '<input type="submit" value="ok.">';
echo '</form>';

echo 'echo memo: <a href="https://takesue090.chobi.net/original-blog/echo.php">echo.php</a>';

}


?>

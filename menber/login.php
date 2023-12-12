<?php	
function user0624()
{
	echo "user:0624 of page.";
}


echo $_POST['text'];
if(strcmp($_POST['text'],"0624"))
{	
	echo "ok.";
	user0624();
}
else
{
	echo "false";
}

?>

<?php
	$today = date("Y-m-d-H:i:s");
	echo $today;
	$title="$_POST[subject]\n";
	$write = "$_POST[write]\n";
	$filename = "./blog/".$today.".txt";
	$data = $title . $write;
	file_put_contents($filename, $data);
	echo '<a href="https://takesue090.chobi.net/original-blog/index.php">page top.</a>';
	
?>

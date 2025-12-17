<?php
	$x = "I love PHP";
	echo strlen($x)."I love PHP<br>";
	echo str_word_count($x)."I love PHP<br>";
	echo strpos ("I love PHP", "love")."I love PHP<br>";
	$x = "I love C#";
	$x = str_replace ("C#", "PHP", $x);
	echo $x;
?>

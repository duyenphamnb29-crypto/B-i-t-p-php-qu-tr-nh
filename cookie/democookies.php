<?php
    if(!isset($_COOKIE['visiting_count']))
	{
		setcookie('visiting_count', 1,
		[
		    'expires' => time() + 3600, 
	         'path' => "/Myweb",
	         'secure' => true,
	         'httponly' => true,
	    ]);
		echo "Lần đầu tiên truy cập" . "<br>";
	}
	else
	{
		$count = (int)$_COOKIE['visiting_count'] + 1;
		setcookie('visitting_count', $count,
		[
		    'expires' => time() + 3600, 
	         'path' => "/Myweb",
	         'secure' => true,
	         'httponly' => true,
	    ]);
		echo "Số lần truy cập: ". htmlspecialchars($count) . "<br>";
	}

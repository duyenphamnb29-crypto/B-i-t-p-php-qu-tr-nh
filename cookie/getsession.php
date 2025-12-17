<?php
//session có gtri từ lúc bắt đầu đến khi đóng trình duyệt
// để start session dùng session_start();
// để đặt ftri cho session: $_SESSION['TÊN BIẾN'] = 'VALUE'
session_start();
?>
<!DOCTYPE html>
<html lang='vi'>
     <head>
	    <title> GET Session </title>
	 </head>
	<body>
        <?php
            if (isset($_SESSION['subject']))
                echo "subject: " . $_SESSION['subject'] . "<br>";
            if (isset($_SESSION['grade']))
                echo "Grade: " . $_SESSION['grade'] . "<br>";
        ?>
    </body>
</html>	

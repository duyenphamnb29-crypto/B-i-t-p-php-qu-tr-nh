<?php
/*
    SESSION
    - Session tồn tại từ khi bắt đầu cho đến khi đóng trình duyệt
    - Khởi tạo session bằng hàm session_start()
    - Gán giá trị cho session bằng mảng $_SESSION
*/

session_start();
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <title>Test Session</title>
</head>
<body>

<?php
    $_SESSION['subject'] = 'Ngôn ngữ lập trình PHP';
    $_SESSION['grade']   = 10;

    echo "Session variables are set.<br>";
?>

</body>
</html>

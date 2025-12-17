<?php
/*
    SESSION
    - Session tồn tại từ khi bắt đầu cho đến khi đóng trình duyệt
    - Khởi tạo session bằng hàm session_start()
    - Gán giá trị cho session thông qua mảng $_SESSION
*/

session_start();
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <title>Get Session</title>
</head>
<body>

<?php
    if (isset($_SESSION['subject'])) {
        echo "Subject: " . $_SESSION['subject'] . "<br>";
    }

    if (isset($_SESSION['grade'])) {
        echo "Grade: " . $_SESSION['grade'] . "<br>";
    }
?>

</body>
</html>


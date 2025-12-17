<?php
/*
    COOKIES
    - Dung lượng nhỏ (khoảng 4KB)
    - Dùng để lưu thông tin người dùng, cải thiện trải nghiệm website

    Đặc điểm:
    - Được lưu trên máy tính cá nhân của người dùng thông qua trình duyệt
    - Có dạng cặp key => value kèm thời gian hết hạn, đường dẫn, tên miền,...

    Mục đích:
    - Quản lý đăng nhập (session)
    - Theo dõi và ghi nhớ trải nghiệm người dùng

    Hoạt động của cookie:
    - Tạo cookie: setcookie()
    - Lấy cookie: $_COOKIE
    - Cú pháp đầy đủ:
      setcookie(name, value, expires, path, domain, secure, httponly);
*/

// ================== TẠO COOKIE (CÁCH VIẾT HIỆN ĐẠI) ==================
setcookie(
    'username',
    'Nguyễn Văn A',
    [
        'expires'  => time() + 3600, // thời gian tồn tại 1 giờ
        'path'     => '/Myweb',
        'secure'   => true,
        'httponly' => true
    ]
);

// ================== KIỂM TRA & LẤY COOKIE ==================
if (isset($_COOKIE['username'])) {
    echo "Xin chào bạn " . htmlspecialchars($_COOKIE['username']);
} else {
    echo "Không có cookies!";
}

// ================== HỦY COOKIE ==================
setcookie('username', 'Nguyễn Văn A', time() - 3600, '/Myweb');

// Kiểm tra lại sau khi hủy
if (isset($_COOKIE['username'])) {
    echo "Xin chào bạn " . htmlspecialchars($_COOKIE['username']);
} else {
    echo "Không có cookies!";
}
?>


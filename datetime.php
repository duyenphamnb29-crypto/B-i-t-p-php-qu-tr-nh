<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Nhập</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        :root {
            --primary-color: #4CAF50; /* Màu xanh lá cây chính, như trong ảnh */
            --secondary-color: #66BB6A; /* Màu xanh lá cây nhạt hơn */
            --text-color: #333;
            --light-bg: #f5fbf6; /* Nền nhẹ nhàng */
            --border-radius-xl: 50px; /* Bo góc cực lớn cho input và button */
        }

        body {
            background-color: var(--light-bg);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            font-family: 'Arial', sans-serif; /* Font sạch sẽ, dễ đọc */
            color: var(--text-color);
        }
        .login-card {
            background-color: #ffffff;
            padding: 3rem 2.5rem; /* Tăng padding để rộng rãi hơn */
            border-radius: 20px; /* Bo góc mềm mại cho card */
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08); /* Đổ bóng nhẹ nhàng */
            width: 100%;
            max-width: 400px;
            transition: all 0.3s ease-in-out;
            border: 1px solid #e0e0e0; /* Viền mỏng */
        }
        .login-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.12);
        }
        .login-card h2 {
            font-weight: 700;
            color: var(--text-color);
            text-align: center;
            margin-bottom: 2.5rem; /* Khoảng cách lớn hơn */
            font-size: 2rem;
        }
        .form-control {
            border: 2px solid #e0e0e0; /* Viền input dày hơn, màu nhạt */
            border-radius: var(--border-radius-xl); /* Bo góc cực lớn */
            padding: 0.8rem 1.5rem; /* Padding rộng rãi hơn */
            font-size: 1.05rem;
            height: auto; /* Tự động điều chỉnh chiều cao */
            transition: border-color 0.2s ease, box-shadow 0.2s ease;
        }
        .form-control:focus {
            border-color: var(--primary-color); /* Màu viền xanh khi focus */
            box-shadow: 0 0 0 0.2rem rgba(76, 175, 80, 0.25); /* Đổ bóng xanh khi focus */
            background-color: #fafffb;
        }
        .form-label {
            font-weight: 600;
            color: #555;
            margin-bottom: 0.5rem;
            display: block; /* Đảm bảo label chiếm dòng riêng */
            margin-left: 1.5rem; /* Giúp label "nổi" lên trên input một chút */
        }
        .btn-primary {
            background-color: var(--primary-color);
            border: none;
            border-radius: var(--border-radius-xl); /* Bo góc cực lớn */
            font-weight: 700;
            letter-spacing: 0.5px;
            padding: 0.9rem 1.5rem;
            box-shadow: 0 5px 15px rgba(76, 175, 80, 0.3);
            transition: all 0.3s ease;
            font-size: 1.1rem;
            width: 100%; /* Đảm bảo nút chiếm toàn bộ chiều rộng */
        }
        .btn-primary:hover {
            background-color: var(--secondary-color);
            box-shadow: 0 8px 20px rgba(76, 175, 80, 0.4);
            transform: translateY(-2px);
        }
        .mb-3-custom {
            margin-bottom: 1.5rem; /* Khoảng cách giữa các input */
        }

        /* Styling cho trang chào mừng */
        .welcome-card {
            background-color: #ffffff;
            padding: 3rem;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            width: 100%;
            max-width: 500px;
            text-align: center;
            border: 1px solid #e0e0e0;
        }
        .welcome-card h3 {
            font-weight: 700;
            color: var(--primary-color);
            font-size: 2.2rem;
            margin-bottom: 1.5rem;
        }
        .welcome-card p {
            font-size: 1.1rem;
            color: #555;
            margin-bottom: 2rem;
        }
    </style>
</head>
<body>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['username'])) {
    $username = htmlspecialchars($_POST['username']);
?>
    <div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="welcome-card">
            <h3 class="animate__animated animate__fadeInDown">Chào mừng bạn, <span style="color: var(--primary-color);"><?php echo $username; ?></span>!</h3>
            <p class="animate__animated animate__fadeInUp">Bạn đã đăng nhập thành công. Chúc bạn một ngày tốt lành!</p>
            <a href="index.php" class="btn btn-primary mt-4 animate__animated animate__zoomIn">Đăng nhập lại</a>
        </div>
    </div>
<?php
} else {
?>
    <div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="login-card">
            <h2>Đăng Nhập</h2>
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
                <div class="mb-3-custom">
                    <label for="username" class="form-label">Tên đăng nhập</label>
                    <input type="text" class="form-control" id="username" name="username" placeholder="Nhập tên đăng nhập của bạn" required>
                </div>
                <div class="mb-4-custom">
                    <label for="password" class="form-label">Mật khẩu</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Nhập mật khẩu của bạn" required>
                    </div>
                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary">Đăng Nhập</button>
                </div>
            </form>
        </div>
    </div>
<?php
}
?>

</body>
</html>

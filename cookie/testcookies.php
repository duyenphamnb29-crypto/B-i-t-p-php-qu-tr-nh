<?php
/*
  Cookies
  kích thước bé: 4KB
  lưu thông tin người dùng, trải nghiệm người dùng trên website
  Đặc điểm
  được lưu trên máy tính cá nhân người udngf bởi trình duyệt
  cấu trúc: cặp [key=>value] + thời gian cookies hết hạn, tên miền,...
  mục đích:
  - quản lý session_cache_expire- quản lý đăng nhập
  - theo dõi thông tin trải nghiệm người dùng
  hoạt động của cookies
  - quản lý cookies: set cookies([key=>value]): lưu cookies trên máy
  - lấy gía trị cookies: $_COOKIE
  - cú pháp đầy đủ
  //////setcookie(name, value, expires, path, domain, secure, httponly);
  */
  
  
  //Cách viết hiện đại
    setcookie('username', 'Nguyễn Văn A',
	[
	         'expires' => time() + 3600, //có giá trị trong 1h
	         'path' => "/Myweb",
	         'secure' => true,
	         'httponly' => true,
	]);
	
	if(isset($_COOKIE['username']))
	 {
		 echo "Xin chào bạn" . htmlspecialchars($_COOKIE['username']);
	 }
	 else{
		 echo "Không có cookies!";
  
//setcookie('username', 'Nguyễn Văn A', time() + 3600, "/Mywweb");   //có giá trị trong 1h
	 
	/* if(isset($_COOKIE['username']))
	 {
		 echo "Xin chào bạn" . htmlspecialchars($_COOKIE['username']);
	 }
	 else{
		 echo "Không có cookies!";
	 }*/
	 
//Hủy cookies
     setcookie('username', 'Nguyễn Văn A', time() - 3600, "/Mywweb");   //có giá trị trong 1h
	 if(isset($_COOKIE['username']))
	 {
		 echo "Xin chào bạn" . htmlspecialchars($_COOKIE['username']);
	 }
	 else{
		 echo "Không có cookies!";
	 }

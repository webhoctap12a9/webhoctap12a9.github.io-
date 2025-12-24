<?php
// Lấy dữ liệu từ form gửi sang
$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';

// Tài khoản cố định
if ($email === "admin" && $password === "123") {
    // Đăng nhập đúng → chuyển trang
    header("Location: home.html");
    exit();
} else {
    // Sai → quay lại trang đăng nhập
    echo "Sai tài khoản hoặc mật khẩu";
}
?>
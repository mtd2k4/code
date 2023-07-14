<?php
session_start();
if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username === 'admin' && $password === '123456'){
        $_SESSION['username'] = $username;
        header("Location: home.php");
        exit();
    } else {
        header("Location: error.php");
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Đăng nhập</title>
</head>
<body>

    <h1>Login Form</h1>
    <!-- Biểu mẫu đăng nhập -->
    <form method="post" action="">
        <label for="username">Tên người dùng:</label><br>
        <input type="text" id="username" name="username" required><br><br>

        <label for="password">Mật khẩu:</label><br>
        <input type="password" id="password" name="password" required><br><br>

        <button type="submit" name="login">Submit</button>
    </form>
</body>
</html>

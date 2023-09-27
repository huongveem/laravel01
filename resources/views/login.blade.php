
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Đăng Nhập</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <div class="container">
        <h2>Đăng Nhập</h2>
        <form action="process-login.php" method="POST">
            <div class="form-group">
                <label for="username">Tên đăng nhập:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Mật khẩu:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <input type="submit" value="Đăng Nhập">
            </div>
        </form>
    </div>
</body>
</html>


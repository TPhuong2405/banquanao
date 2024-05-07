<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký</title>
    <style>
        .form-container {
            /* background-color: white; */
            padding: 50px;
            /* border: 1px solid #0066CC; */
            border-radius: 16px;
            background-color: #f2f3f5;
            /* border-radius: 5px; */
            outline: none;
            border: 0;
            /* font-family: "Poppins", sans-serif; */
            width: 300px;
            margin: 0 auto;
            text-align: center;
        }
        form input[type="text"],
        form input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }
        .form-submit-button {
            background-color: rgb(130, 201, 30);
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
        }
        .form-submit-button:hover {
            background-color: #2d4373;
        }
        .form-signup-submit-button {
            background-color: rgb(130, 201, 30);
            color: white;
            padding: 10px 30px;
            border-radius: 5px;
            text-decoration: none;
            /* font-weight: bold; */
            margin-top: 10px;
            margin-bottom: 30px;
            width: 17%;
        }
        .form-signup-submit-button:hover {
            background-color: #2d4373;
            cursor: pointer;
        } 
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Đăng ký</h2>
        <form method="POST" action="xuly.php">
            <label for="username">Tài khoản:</label><br>
            <input type="text" id="username" name="username"><br>
            <label for="password">Mật khẩu:</label><br>
            <input type="password" id="password" name="password"><br>

            <input type="signup-submit" value="Đăng ký" class="form-signup-submit-button" onclick="window.location.href = 'xuly.php'"> <br>
            <p class="signup-already">
                <span>Bạn đã có tài khoản?</span>
                <a href="#" class="signup-login-link" onclick="window.location.href = 'dangnhap.php';" >Login</a>
            </p>
        </form>
    </div>
</body>
</html>
<!--onclick="window.location.href = 'dangnhap.php'"  -->
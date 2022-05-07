<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <title>login</title>
    <style>
        h3 {
            background-color: red;
            padding: 10px;
            color: white;
            border-radius: 5px;
        }
    </style>
</head>

<body>
    <div class="container">
        <form action="code.php" method="POST">
            <div class="box">
                <?php
                if (isset($_SESSION['cat'])) {
                    echo '<h3>' . $_SESSION['cat'] . '</h3>';
                    unset($_SESSION['cat']);
                }
                ?>
                <label for=""> اسم المستخدم</label>
                <input type="text" name="user">
                <label for=""> كلمة المرور</label>
                <input type="password" name="pass">
                <button name="login">تسجيل الدخول</button>
            </div>
        </form>
    </div>
</body>

</html>
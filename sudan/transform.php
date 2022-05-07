<?php
include ('./includes/header.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/transform.css">
    <title>transform money</title>
</head>
<body>
<div class="tit">
                <span>
                    ارسال حوالة مالية
                </span>
            </div>
    <div class="container">
    
        <div class="backs">
            <form action="code.php" method="post">
                <label for="">حوالة من </label>
                <select name="from_send">
                    <option >السودان</option>
                    <option >تركيا</option>
                    <option >المناقل</option>
                </select>
                <label for="">حوالة الي </label>
                <select name="to_send" >
                    <option >تركيا</option>
                    <option >السودان</option>
                    <option >المناقل</option>
                </select>
                <label for="">المبلغ المرسل</label>
                <input type="text" name="money">
                <input type="hidden" name="deliv_money" value="0">
                <label for=""> العمله </label>
                <select name="currency" id="">
                    <option >جنية</option>
                    <option >دولار</option>
                </select>
                <label for="">العموله</label>
                <input type="text">
                <label for="">اسم المرسل</label>
                <input type="text" name="user_send">
                <label for="">اسم المستلم</label>
                <input type="text" name="user_res">
                <label for="">رقم الهاتف</label>
                <input type="text" name="tel">
                <label for="">ملاحظات</label>
                <input type="text" name="note">
                <input type="hidden" name="status" value="في الانتظار">
                <button name="send_transform">ارسال الحوالة</button>
            </form>
        </div>
    </div>
</body>
</html>
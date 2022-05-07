<?php
include ('./includes/connect.php');
include ('./includes/header.php');
include ('./includes/login_chick.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="css/data_send.css"> -->
    <!-- <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/all.css"> -->
    <title>خطاء </title>
    <style>
        .con{
            /* background-color: red; */
            display: flex;
            align-items: center;
            justify-content: center;

        }
        .error{
            width: 600px;
        }
        .text{
            /* background-color: red; */
            text-align: center;
            

        }
        button{
            width: 200px;
    height: 38px;
    background: #ffad00db;
    border: blanchedalmond;
    border-radius: 5px;
    font-size: 15px;
    font-weight: bold;
        }
       
        a{
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="con">
        <img class="error" src="image/dribbble_1.gif" alt="">
        

    </div>
    <div class="text">
    <h4 class="te"> يبدو ان هنالك خطاء ما قم باعادة المحاولة لاحقاً  </س>
        <h4 class="te" > او اطلب الدعم من قسم التتطوير </h4>
        
        <button>
        <a href="index.php">
        رجوع
            </a></button>
    </div>
  
</body>
</html>
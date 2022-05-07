<?php

include('./includes/connect.php');
include('./includes/header.php');
include('./includes/login_chick.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/trans.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/all.css">
    <title>transform_re</title>
</head>

<body>
    <div class="bac">
        <div class="container">
            <a href="ex_send.php">
                <div class="box" style="color: red;">
                    <span> <i class="fa-solid fa-hourglass-empty" style="color: red;"> </i>حوالات قيد الانتظار</span>
                    <h2>
                        <?PHP
                        $query = "SELECT money FROM transform where status='في الانتظار' ";
                        $query_run = mysqli_query($con, $query);
                        $row = mysqli_num_rows($query_run);
                        echo $row;
                        ?>
                    </h2>
                    <i class="fa-solid fa-arrow-left"></i>
                </div>
            </a>
            <a href="ex_received.php" style="color: green;">
                <div class="box">
                    <span> <i class="fa-solid fa-circle-check" style="color: green;"></i>الحوالات المستلمة </span>
                    <h2>
                        <?PHP
                        $query = "SELECT money FROM transform where status='استلم' ";
                        $query_run = mysqli_query($con, $query);
                        $row = mysqli_num_rows($query_run);
                        echo $row;
                        ?>
                    </h2>
                    <i class="fa-solid fa-arrow-left"></i>
                </div>
            </a>
        </div>
    </div>
</body>

</html>
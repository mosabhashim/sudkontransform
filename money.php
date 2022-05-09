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
    <link rel="stylesheet" href="css/money.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/all.css">
    <title>money</title>
    <style>
        /* .counter{
                color: red;
            } */

            span{
                transform:scale(x);
                transition: all 3s;
            }
    </style>
</head>

<body>
    <div class="container">
        <div class="box">
            <div class="icon">
                <i class="fa-solid fa-filter-circle-dollar " style="color: red;"></i>
                <span>حساب الجنية </span>
            </div>
            <div class="money">
                <?php
                $query = "SELECT SUM(deliv_money) AS deliv_money FROM transform WHERE currency='جنية' ";
                $query_run = mysqli_query($con, $query);
                $row = mysqli_fetch_assoc($query_run);
                $TOTALMONEY =  $row['deliv_money'];

                ?>
                <span style="font-weight: bolder; " class="counter" data-target="<?php echo ($TOTALMONEY); ?>">

                </span>
                <strong style="color: red;">SD</strong>
            </div>
        </div>
        <div class="box">
            <div class="icon">
                <i class="fa-solid fa-filter-circle-dollar"></i>
                <span>حساب الدولار </span>
            </div>
            <div class="money">
                <?php
                $query = "SELECT SUM(deliv_money) AS deliv_money FROM transform WHERE currency='دولار' ";
                $query_run = mysqli_query($con, $query);
                $row = mysqli_fetch_assoc($query_run);
                $TOTALMONEY = $row['deliv_money'];
                //  echo number_format($TOTALMONEY)   ;
                ?>
                <span style="font-weight: bolder;" class="counter" data-target="<?php echo ($TOTALMONEY); ?>">
                    <!-- <?php
                            //  $query = "SELECT SUM(deliv_money) AS deliv_money FROM transform WHERE currency='دولار' ";
                            //  $query_run = mysqli_query($con,$query);
                            //  $row = mysqli_fetch_assoc($query_run);
                            //  $TOTALMONEY = $row['deliv_money'];
                            //  echo number_format($TOTALMONEY)   ;
                            ?> -->
                </span>
                <strong>$</strong>
            </div>
        </div>
    </div>
    <script src="app.js"></script>
</body>

</html>
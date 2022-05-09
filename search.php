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
    <link rel="stylesheet" href="css/search.css ">
    <title>search</title>
    <style>
        .see {
            height: 37px;
            width: 200px;
            position: relative;
            left: 40%;
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <div class="back">
        <div class="container">
            <div class="icon">
                <img src="image/chick.gif" alt="search_icon">
            </div>
            <div class="inputs">
                <label for=""></label>
                <form action="" method="POST">
                    <input type="text" name="data" placeholder="رقم الحوالة او اسم المرسل">
                    <button class="see" name="search"> بحث</button>
                </form>
            </div>
            <?php
            if (isset($_POST['search'])) {
            $search = $_POST['data'];
            $query = "SELECT * FROM transform WHERE id='$search';";
            $query_run = mysqli_query($con,$query);
            while($row = mysqli_fetch_assoc($query_run)){
            ?>
            <div class="tab">
                <table>
                    <thead>
                        <th>رقم الحوالة</th>
                        <th>اسم المرسل</th>
                        <th>اسم المستلم </th>
                        <th>رقم الهاتف</th>
                        <th>الحالة</th>
                        <th>المبلغ</th>
                        <th>العمله</th>
                        <th>ملاحظات</th>
                        <th>اتخاذ اجراء</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?php echo $row['id']?></td>
                            <td><?php echo $row['name_send']?></td>
                            <td><?php echo $row['name_res']?></td>
                            <td><?php echo $row['tel']?></td>
                            <td><?php echo $row['status']?></td>
                            <td><?php echo number_format($row['money'])?></td>
                            <td><?php echo $row['currency']?></td>
                            <td><?php echo $row['note']?></td>
                            <?php
                            if($row['deliv_money'] == 0){
                                ?>
                                <form action="delivery.php" method="POST">
                                    <input type="hidden" name="id" value="<?php echo $row['id']?>">
                                <td>
                                <button name="delivery" style="width: 100%; color:white; height: 100%; border: none;background: red;padding: 6px;">تسليم</button>
                                </td>
                                </form>
                                <?php
                            }else{
                                ?>
                                <form action="" method="POST">
                                <td>
                                <button style="width: 100%;color:white; height: 100%; border: none;background: green;padding: 6px;">طباعة</button>
                                </td>
                                </form>
                                <?php
                            }
                            ?>
                        </tr>
                        <?php
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>

<?php
include ('./includes/header.php');
include ('./includes/connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/data_send.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/all.css">
    <title>Document</title>
    <style>
        button{
            border: none;
            padding: 11px;
            background: none;
            cursor: pointer;
            font-size: 17px;
        }
    </style>
</head>
<body>
    <div class="bac">
    <div class="ti">
        الحوالات  مستلمة
    </div>
        <div class="ta">
        <?php
                 $query = "SELECT * FROM transform where status ='استلم'  AND to_sud='السودان' ";
                 $query_run = mysqli_query($con,$query);
            ?>
            <table class="tab">
                <thead>
                        <th>رقم الحوالة </th>
                        <th>اسم المرسل </th>
                        <th>اسم المستلم</th>
                        <th> المبلغ</th>
                        <th>العملة</th>
                        <th>الحالة</th>
                        <th>الملاحظات</th>
                        <th> الغاء</th>
                        
                </thead>
                <tbody>
                <?php
                 while($row = mysqli_fetch_assoc($query_run))
                 {
                     ?>
            <tr>
                    <td data-label="رقم الحوالة"><?php echo $row['id'] ?></td>
                    <td data-label=" اسم المرسل"> <?php echo $row['name_send'] ?> </td>
                    <td data-label=" اسم المستلم"> <?php echo $row['name_res'] ?></td>
                    <td data-label=" المبلغ"><?php echo $row['money'] ?></td>
                    <td data-label="العملة"><?php echo $row['currency'] ?></td>
                    <td style="background-color: greenyellow;" data-label=" الحالة"> <?php echo $row['status'] ?></td>
                    <td data-label="ملاحظات"><?php echo $row['note'] ?></td>
                    <!-- <td>
                    <button>حذف</button>
                    </td> -->
                  
                <form action="update_sales.php" method="POST">
                    <td style=" padding:0;">
                    <input type="hidden"  name="r"  value="r">
                   
                    </td>
                    <?php
                    }
                    ?>
                </form>
                
            </tr> 
            </tbody> 
            </table>
        </div>
    </div>
</body>
</html>
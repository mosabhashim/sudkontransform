<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>data_report</title>
    <link rel="stylesheet" href="css/data_report.css">
</head>

<body>
    <div class="container">
        <div class="select_data">
            <form action="" method="GIT">
                <input type="date" name="form_in" value="<?php if (isset($_GET['form_in'])) {
                                                                echo $_GET['form_in'];
                                                            } ?>">
                <input type="date" name="to_in" value="<?php if (isset($_GET['to_in'])) {
                                                            echo $_GET['to_in'];
                                                        } ?>">
                <button type="submit">بحث</button>
            </form>
        </div>
        <?php
        include('./includes/connect.php');
        if (isset($_GET['form_in']) && isset($_GET['to_in'])) {
            $form = $_GET['form_in'];
            $to = $_GET['to_in'];
            $query = "SELECT date as date,id  as id ,name_send as name_send ,name_res as name_res,
                deliv_money as deliv_money ,currency as currency ,	note as note  FROM transform  WHERE currency='جنية' AND status='استلم' AND date BETWEEN '$form' AND '$to' ";
            $query_run = mysqli_query($con, $query);
            if (mysqli_num_rows($query_run) > 0) {
        ?>
                <div class="dataVew">

                    <table>
                        <thead>
                            <th>التاريخ</th>
                            <th>رقم الحوالة</th>
                            <th>اسم المرسل</th>
                            <th>اسم المستلم</th>
                            <th>المبلغ المستلم</th>
                            <th>ملاحظات</th>
                        </thead>
                        <?php
                        foreach ($query_run as $row) {
                        ?>
                            <tbody>
                                <tr>
                                    <td><?php echo $row['date'] ?></td>
                                    <td><?php echo $row['id'] ?></td>
                                    <td><?php echo $row['name_send'] ?></td>
                                    <td><?php echo $row['name_res'] ?></td>
                                    <td><?php echo abs($row['deliv_money']) . '  ' . $row['currency']; ?></td>
                                    <td><?php echo $row['note'] ?></td>
                                </tr>
                            </tbody>
                        <?php
                        }
                        $query = "SELECT sum(deliv_money) as deliv_money FROM transform WHERE currency='جنية'  AND date BETWEEN '$form' AND '$to'   ";
                        $query_run = mysqli_query($con, $query);
                        $row2 = mysqli_fetch_assoc($query_run);
                        $total = $row2['deliv_money'];
                        ?>
                        <div class="vew_money">
                            <input type="text" disabled value="اجمالي المبلغ">
                            <label for="">جنية</label>
                            <input style="background-color: white;" type="text" disabled value="<?php echo number_format($total);  ?>">
                        </div>
                <?php
            } else {
                echo 'no record found';
            }
        }
                ?>
                    </table>
                </div>
    </div>
</body>

</html>
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
    <link rel="stylesheet" href="css/transform.css">
    <title>transform money</title>
</head>
<body>
<div class="tit">
                <span>
                    تسليم حوالة مالية
                </span>
            </div>
    <div class="container">
    
        <div class="backs">
        
            <form action="code.php" method="POST">
                <?php
               
                if(isset($_POST['delivery']))
                {
                    $id = $_POST['id'];
                    $query = "SELECT * FROM transform WHERE id='$id'";
                    $query_run = mysqli_query($con,$query);
            
                    while($row = mysqli_fetch_assoc($query_run))
                    {
                ?>
                 <input type="hidden"  name="divid" value="<?php echo $row['id']?>">
                <label for="">حوالة من </label>
               
                <select name="upfrom_send" disabled>
                    <option ><?php echo $row['from_sud']?></option>
                    
                </select>
                <label for="">حوالة الي </label>
                <select name="upto_send" disabled>
                    <option ><?php echo $row['to_sud']?></option>
                    
                </select>
                <label for="">المبلغ المرسل</label>
                <input type="text" disabled name="upmoney" value="<?php echo $row['money']?>">
                <label for=""> المبلغ المستلم </label>
                <input type="text" value=" <?php echo $row['deliv_money']?>" name="money_deliv">
                <label for="">اسم المرسل</label>
                <input type="text" disabled name="upuser_send" value="<?php echo $row['name_send']?>">
                <label for="">اسم المستلم</label>
                <input type="text" disabled name="upuser_res" value="<?php echo $row['name_res']?>">
                <label for="">رقم الهاتف</label>
                <input type="text" disabled name="uptel" value="<?php echo $row['tel']?>">
                <label for="">ملاحظات</label>
                <input type="text" disabled name="upnote" value="<?php echo $row['note']?>">
               
                <label for="">الحالة</label>
                <select name="status" id="">
                    <option >في الانتظار </option>
                    <option >استلم</option>
                    
                </select>
                
            <?php
                }
                    }else
                    {
            ?>
                <input type="text" disabled value="لاتوجد بيانات">
                <?php
                    }
                ?>
                <button type="submit" name="delivery_money"> تسليم</button>
            </form>
        </div>
    </div>
</body>
</html>
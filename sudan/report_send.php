
<?php
// include ('./includes/header.php');
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
        a{
            text-decoration: none;
            color: white;
        }
        img{
            width: 208px;
        }
        .ti{
            background: #12c06a;
        }
        @media (max-width: 767px){
            .ta {
    margin-top: 52px;
    background: #12c06a;
       }
       .tab td, .tab th {
   
   border: 1px solid white;
   
   color: white;
}
        }
 
.but_send{
    display: flex;
    justify-content: space-between;
    padding: 4px;
}
button{
    margin: 5px;
    border: none;
    border-radius: 5px;
}
      
    </style>
</head>
<body>
    <div class="bac">
  
        <div class="ta">
        <div class="ti">
      <img src="image/secsess.gif" alt="">
    </div>
            <table class="tab">
                <?php
                    $query = 'SELECT * FROM transform ORDER BY id DESC LIMIT 1 ';
                    $query_run = mysqli_query($con,$query);
                   
                ?>
                <thead>
                        <th>رقم الحوالة </th>
                        <th> التاريخ </th>
                        <th>اسم المرسل </th>
                        <th>اسم المستلم</th>
                        <th> رقم الهاتف</th>
                        <th> المبلغ</th>
                        <th>العملة</th>
                        <th>الحالة</th>
                        <th>الملاحظات</th>
                        
                        
                </thead>
                <tbody>
            <tr>
                <?php
                 while($row = mysqli_fetch_assoc($query_run))
                 {
                     ?>
                    <td data-label="رقم الحوالة"><?php echo $row['id']?></td>
                    <td data-label=" التاريخ"><?php echo  date('  Y' .'  d'.'  F' ) ?></td>
                    <td data-label=" اسم المرسل"><?php echo $row['name_send']?></td>
                    <td data-label=" اسم المستلم"><?php echo $row['name_res']?></td>
                    <td data-label="  رقم الهاتف"><?php echo $row['tel']?></td>
                    <td data-label=" المبلغ"><?php echo $row['money']?></td>
                    <td data-label="العملة"><?php echo $row['currency']?></td>
                    <td style="background-color: #ffc107;" data-label=" الحالة"><?php echo $row['status']?> </td>
                    <td data-label="ملاحظات"><?php echo $row['note']?></td>
                    <!-- <td>
                    <button>حذف</button>
                    </td> -->
                    <?php
                    }
                    ?>
              
                    
                  
                
                
            </tr> 
            </tbody> 
            </table>
            <div class="but_send">
            <button style="  background: red;"  name="r"> <a href="index.php">رجوع</a>   </button>
            <button style="  background: #072e6a;"  name="r"> <a href="#">طباعة</a>  </button>
            </div>
            
        </div>
    </div>
</body>
</html>
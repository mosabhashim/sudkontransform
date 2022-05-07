
<?php
include ('./includes/header.php')
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
            <table class="tab">
                <thead>
                        <th> التاريخ </th>
                        <th>رقم الحوالة </th>
                        <th>اسم المرسل </th>
                        <th> المبلغ</th>
                        <th>العملة</th>
                        <th>الملاحظات</th>
                        
                        
                </thead>
                <tbody>
            <tr>
                    <td data-label=" التاريخ">2-3-2022 </td>
                    <td data-label="رقم الحوالة">34</td>
                    <td data-label=" اسم المرسل">محمد علي </td>
                    <td data-label=" المبلغ">3442</td>
                    <td data-label="العملة">جنية</td>
                    <td data-label="ملاحظات">لاتوجد</td>
                    <!-- <td>
                    <button>حذف</button>
                    </td> -->
                <form action="update_sales.php" method="POST">
                    <td style=" padding:0;">
                    <input type="hidden"  name="r"  value="r">
                    <button style="  background: green;"  name="r"> طباعة </button>
                    </td>
                </form>
                
            </tr> 
            </tbody> 
            </table>
        </div>
    </div>
</body>
</html>
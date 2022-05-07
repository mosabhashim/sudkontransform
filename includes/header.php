
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/all.min.css">
    <link rel="stylesheet" href="./css/all.css">
    <title>header</title>
</head>
<body>
    <div class="r">
        <div class="ff">
    <header>
        <nav>
            <div class="logo">
                <h3>
                    <img src="image/sudkon~1.png" alt="logo" width="35px">
                </h3>
                
            </div>
                <div class="togger">
                <i class="fa-solid fa-align-justify ouvrir"></i>
                <i class="fa-solid fa-xmark fermer"></i>
            </div>
            <ul class="menu">
                <a href="search.php">
                <li> بحث </li>
                </a>
                <a href="money.php">
                <li>الرصيد </li>
                </a> 
                <a href="transform.php">
                <li> تحويل</li>
                </a>
                <a href="transform_re.php">
                <li>  الحوالات صادرة</li>
                </a>
                <a href="export.php">
                <li>الحوالات الواردة</li>
                </a>
                <a href="#">
                <li>اعدادات النظام</li>
                </a>
            </ul>
        </nav>
    </header>
    <section>
        <?php
        $con = mysqli_connect("localhost","root","","transformsudkon");
        if(!$con){
            die("غير متصل بقاعدة البيانات");
        }
        else{
            // die(" متصل بقاعدة البيانات");
        }
     
            if(isset($_SESSION['username'])){
                $name = $_SESSION['username'];
                $query = "SELECT name FROM userman  WHERE username= '$name'";
                $query_run = mysqli_query($con,$query);
                foreach( $query_run as $row){
                    echo  '<h3>'.$row['name'].'</h3>';
                }
            }
       
        ?>
       
        <button class="exit"><a href="logout.php">خروج</a></button>
    </section>
    </div>
    </div>
    <script src="./js/apps.js"></script>
</body>

</html>
<?php
session_start();
$con = mysqli_connect("localhost","root","","transformsudkon");
if(!$con){
    die("غير متصل بقاعدة البيانات");
}
else{
    // die(" متصل بقاعدة البيانات");
}

?>

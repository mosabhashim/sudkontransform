<?php
if(!isset($_SESSION['username']))
{
    $_SESSION['no_login'] = "الرجاء تسجيل الدخول اولاً";
    header('location:login.php');
}

?>
<?php
session_start();
include ('./includes/connect.php');

// insert data 
if(isset($_POST['send_transform'])){
    $form_send   = $_POST['from_send'];
    $to_send     = $_POST['to_send'];
    $money       = $_POST['money'];
    $deliv       = $_POST['deliv_money'];
    $currency    = $_POST['currency'];
    $user_send   = $_POST['user_send'];
    $user_res    = $_POST['user_res'];
    $tel         = $_POST['tel'];
    $note        = $_POST['note'];
    $status      = $_POST['status'];
    $query = "INSERT INTO transform(`from_sud`, `to_sud`, `money`, `deliv_money`, `currency`, `name_send`, `name_res`, `tel`, `note`, `status`)values('$form_send','$to_send','$money','$deliv','$currency','$user_send','$user_res','$tel','$note','$status')";
    $query_run = mysqli_query($con,$query);
    if($query_run){
        header("location:report_send.php");
    }else{
        header("location:index.php");
    }
}


// update data 
if(isset($_POST['delivery_money']))
{
    $id     = $_POST['divid'];
    $div    = $_POST['money_deliv'];   
    $status = $_POST['status'];
    $query  = "UPDATE transform SET deliv_money='$div',status='$status' WHERE id='$id'";
    if($div != 0 ){
        $query_run = mysqli_query($con,$query);
        $_SESSION['id_re']= $id;
        header("location:delivery_report.php");
    }
            else{
                header("location:error.php");
            }
        
        }


?>




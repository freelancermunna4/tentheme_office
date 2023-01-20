<?php include("functions.php");






if(isset($_POST['submit'])){
    $subject = $_POST['subject'];
    $service_id = $_POST['select'];
    $message = $_POST['textarea'];
    $ticket_id = rand(1000,10000000);

    $file_name = $_FILES['file']['name'];
    $file_tmp = $_FILES['file']['tmp_name'];            

    $insert = _insert("tickets","ticket_id,pid,service_id,subject,message,time","'$ticket_id','$id','$service_id','$subject','$message','$time'");
    if($insert){
      $msg = "Successfully Created a new Ticket";
      header("location:tickets.php?msg=$msg");
    }            
  }




























?>
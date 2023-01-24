<?php include("functions.php");


// if(isset($_POST['submit'])){
//     $subject = $_POST['subject'];
//     $service_id = $_POST['select'];
//     $message = $_POST['textarea'];
//     $ticket_id = rand(1000,10000000);

//     $file_name = $_FILES['file']['name'];
//     $file_tmp = $_FILES['file']['tmp_name'];            

//     $insert = _insert("tickets","ticket_id,pid,service_id,subject,message,time","'$ticket_id','$id','$service_id','$subject','$message','$time'");
//     if($insert){
//       $msg = "Successfully Created a new Ticket";
//       header("location:tickets.php?msg=$msg");
//     }            
//   }

if(isset($_POST['chat_load']) && isset($_POST['uid']) && isset($_POST['ticket_id']) ){ 
          $ticket_id = $_POST['ticket_id']; 
          $uid = $_POST['uid']; 
          $tickets = _get("tickets","uid=$uid AND ticket_id=$ticket_id");
          while($data = mysqli_fetch_assoc($tickets)){
            $person = $data['pid'];
            $person = _fetch("person","id=$person");            
          ?> 
          <?php if($data['pid'] !=$uid){ ?>
            <div class="person">
          <?php  }else{ ?>
            <div class="person user_chat">
          <?php  }?>
                <div class="img">
                    <img src="admin/upload/<?php echo $person['file_name']?>" alt="">
                    <p><?php echo $person['role'];?></p>
                </div>
                <div class="message">
                    <div class="content">
                      <?php echo $data['message']?>
                    </div>
                    <p><?php $data =  $data['time']; echo date("d-M-y h:i")?></p>
                </div>
            </div>            
          <?php };?>
          
<?php exit; }



if(isset($_POST['chat_insert']) && isset($_POST['ticket_id']) && isset($_POST['uid']) && isset($_POST['msg'])){ 
          $ticket_id = $_POST['ticket_id'];
          $uid = $_POST['uid'];
          $message = $_POST['msg'];
          // $file_name = $_POST['file'];

          $insert = _insert("tickets","ticket_id,uid,pid,message,time","$ticket_id,$uid,$uid,'$message',$time");
          if($insert){
            echo $msg = "Message Sent";
          }else{
            echo $msg = "Message Not Sent";
          }
      exit;    
 }

























 ?>
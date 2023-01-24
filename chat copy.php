$tickets = _get("tickets","uid=$uid AND ticket_id=111");
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
                    <p><?php $data =  $data['time']; echo date("d-M-y hm:i")?></p>
                </div>
            </div>            
          <?php }?>
<?php 
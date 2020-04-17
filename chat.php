<?php
if(isset($_POST['message_submit'])){
    $message_user=mysqli_real_escape_string($conn,$_POST['message']);
    $message_insert_query="INSERT INTO `message` (`user_id`,`message`) VALUES ('$login_user_id','$message_user')";    
    mysqli_query($conn,$message_insert_query) or die(mysqli_error($conn));
}


?>


<div class="conatiner chatbox position-absolute" id="chatbox">
    
        <?php  
        $get_user_message="SELECT * FROM `message`";
        $get_user_message_result=mysqli_query($conn,$get_user_message);
        while($row=mysqli_fetch_array($get_user_message_result,MYSQLI_ASSOC)):
            $user_message_id= $row['user_id'];    
            $user_message=$row['message'];
                $messaging_person_query="SELECT * FROM `registerform` WHERE `id`='$user_message_id'"; // '
                $messaging_person_query_result=mysqli_query($conn,$messaging_person_query);
                $messaging_person=mysqli_fetch_assoc($messaging_person_query_result);
                $messaging_person_name=$messaging_person['first name']." ".$messaging_person['last name'];
                $messaging_person_profile_photo=$messaging_person['user_image'];
        
        ?>

            
            <div class="container-fluid show-messages m-1 w-100">
                <div class="container">
                <img src="profile/<?php echo $messaging_person_profile_photo?>" alt="pp" class=" rounded-circle" style="width:35px;height:35px;">
                    <?php echo $messaging_person_name?>
                    </div>
        
                    <?php 
                    echo $user_message; 
                    ?>

                </div>
        <?php endwhile; ?>
    
</div>
    

<div class="container send-message  position-absolute">
    <form action="" method="post">
    <textarea name="message" rows="3"placeholder="Type your MEssage here" style="position:relative;top:20%;"></textarea>
    <button class="btn btn-primary message_submit" id="message_submit" name="message_submit">Send</button>
    </form>
</div>

<script>

    document.getElementById('chatbox').scrollTop = 9999999;


</script>


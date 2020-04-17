<?php 

    $get_data="SELECT * FROM `user_post` ORDER BY `post_id` DESC";
    mysqli_query($conn,$get_data) or die(mysqli_error($conn));
        $run_get_data=mysqli_query($conn,$get_data);
    while($post_result=mysqli_fetch_array($run_get_data,MYSQLI_ASSOC)){
    $post_id= $post_result['post_id'];    
    $post_users_id=$post_result['user_id'];
    $post_users_content=$post_result['post_content'];
    $post_users_status_image=$post_result['upload_image'];
    $post_users_date=$post_result['post_date'];

    $get_post_user_query="SELECT * FROM `registerform` WHERE `id`='$post_users_id'";
    $get_post_user_result=mysqli_query($conn,$get_post_user_query);
    $post_user=mysqli_fetch_assoc($get_post_user_result);
    $post_user_name=$post_user['first name']." ".$post_user['last name'];
    $post_user_profile_photo=$post_user['user_image']; 
        
  if($_SERVER['PHP_SELF']=='/myblog/home.php'){
            
    include("show-posts-inside.php");
            
            echo "<script>$('.inside-posts').css('height','60%');</script>";
        }    
        else{
            if($post_users_id==$profile_id){
    include("show-posts-inside.php");               
            echo "<script>$('.inside-posts').css('height','87%');</script>";

            }
        }
    
    }
?>


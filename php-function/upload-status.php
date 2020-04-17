<?php

if(isset($_POST['upload_status'])){
    $post_content=$_POST['status_update'];
     $user_status =$_FILES['status_image']['name'];
     $user_temp_img=$_FILES['status_image']['tmp_name'];
     $random_number=rand(1,100);
     $path=$_SERVER['DOCUMENT_ROOT']."/myblog/posts/$user_status.$random_number";
     move_uploaded_file($user_temp_img,$path);
    // $update_cover_query= "UPDATE user_post SET `cover_image`='$user_cover.$random_number' WHERE email='$login_user_email'"; 
     $update_cover_query= "INSERT INTO `user_post`(`user_id`,`post_content`,`upload_image`) VALUES ('$login_user_id','$post_content','$user_status.$random_number')"; 

     mysqli_query($conn,$update_cover_query) or die(mysqli_error($conn));
     header('location:home.php');
    
     } 


?>
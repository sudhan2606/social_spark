<?php

if(isset($_POST['cover-submit'])){
    $user_cover =$_FILES['user_cover']['name'];
    $user_temp_img=$_FILES['user_cover']['tmp_name'];
    $random_number=rand(1,100);
    $path=$_SERVER['DOCUMENT_ROOT']."/myblog/cover/$user_cover.$random_number";
    move_uploaded_file($user_temp_img,$path);
    $update_cover_query= "UPDATE registerform SET `cover_image`='$user_cover.$random_number' WHERE email='$login_user_email'"; 
    mysqli_query($conn,$update_cover_query) or die(mysqli_error($conn));
    header('location:profile.php');
   
    } 
    if(isset($_POST['profile-submit'])){
       $user_profile =$_FILES['user_profile_img']['name'];
       $user_temp_img=$_FILES['user_profile_img']['tmp_name'];
       $random_number=rand(1,100);
       $path=$_SERVER['DOCUMENT_ROOT']."/myblog/profile/$user_profile.$random_number";
       move_uploaded_file($user_temp_img,$path);
       $update_profile_query= "UPDATE registerform SET `user_image`='$user_profile.$random_number' WHERE email='$login_user_email'"; 
       mysqli_query($conn,$update_profile_query) or die(mysqli_error($conn));
    header('location:profile.php');
       
       } 

?>
<?php
session_start();
$login_user_email=$_SESSION['user_email'];

$get_user_data_query="SELECT * FROM `registerform` WHERE `email`='$login_user_email'"; // '
$get_user_data_query_result=mysqli_query($conn,$get_user_data_query);
$login_user=mysqli_fetch_assoc($get_user_data_query_result);
$login_user_name=$login_user['first name']." ".$login_user['last name'];
$login_user_id=$login_user['id'];
$login_user_jointime=$login_user["time"];
$login_user_gender=$login_user['gender'];
$login_user_birthday=$login_user["birthday"];
$login_cover_photo=$login_user['cover_image'];
$login_profile_photo=$login_user['user_image'];

?>
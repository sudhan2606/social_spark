<?php
if(isset($_GET['profile-id'])) 
{$_SESSION['profile_id']=$_GET['profile-id'];}
$profile_id=$_SESSION['profile_id'];
$show_profile_query="SELECT * From `registerform` AS r LEFT JOIN `userdetail` AS u ON r.`id`=u.`user_id` WHERE r.`id`='$profile_id' UNION SELECT * From `registerform` AS r RIGHT JOIN `userdetail` AS u ON r.`id`=u.`user_id` WHERE r.`id`='$profile_id'";
$result=mysqli_query($conn,$show_profile_query) or die(mysqli_error($conn));
//echo mysqli_num_rows(mysqli_query($conn,$show_profile_query));
$user_profile=mysqli_fetch_assoc($result);
$user_profile_name=$user_profile['first name']." ".$user_profile['last name'];
$user_profile_id=$user_profile['id'];
$user_profile_jointime=$user_profile["time"];
$user_profile_gender=$user_profile['gender'];
$user_profile_email=$user_profile['email'];

$user_profile_birthday=$user_profile["birthday"];
$user_cover_photo=$user_profile['cover_image'];
$user_profile_photo=$user_profile['user_image'];
$user_profile_status=$user_profile['status'];
$user_profile_profession=$user_profile['profession'];
$user_profile_education=$user_profile['education'];
$user_profile_college=$user_profile['college'];

?>
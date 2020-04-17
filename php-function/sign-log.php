<?php
$_SESSION['message']="";

if(isset($_POST["signup"])){
    // echo "submitted";
     $first=mysqli_real_escape_string($conn,ucwords($_POST['first_name']));
     $last=mysqli_real_escape_string($conn,ucwords($_POST['last_name']));
     $email=mysqli_real_escape_string($conn,$_POST['email']);
     $pass=md5($_POST['password']);
     $birth=$_POST['birthday'];
     $date=date("Y-m-d",strtotime($birth));
     $gen=$_POST['gender'];
    if(ctype_alpha($first) && ctype_alpha($last)){
     $user_check_query="SELECT email from `registerform` WHERE email='$email'";
     $user_check_query_result=mysqli_num_rows(mysqli_query($conn,$user_check_query));
     if($user_check_query_result==0){
         $user_insert_query="INSERT INTO registerform(`first name`,`last name`,`email`,`password`,`birthday`,`gender`) VALUES('$first','$last','$email','$pass','$birth','$gen')";
         mysqli_query($conn,$user_insert_query ) or die(mysqli_error($conn));
         include("sendmail.php");
         $_SESSION['message']="Account Created. Please Log in!";

        
     }else{
         $_SESSION['message']="User Already Exist.Please Try with Another Email.!";
     }
 }else{
    $_SESSION['message']="Please enter a valid name havin characters!";

 }}

 if(isset($_POST['login'])){
    
     $email=$_POST['username'];
     $pass=md5($_POST['login-password']);
     $user_check_query="SELECT `email`,`password` from `registerform` WHERE `email`='$email' AND `password`='$pass'";
     //echo mysqli_query($conn,$user_check_query);
     //mysqli_query($conn,$user_check_query) or die(mysqli_error($conn));
     $user_check_query_result=mysqli_num_rows(mysqli_query($conn,$user_check_query));
     if($user_check_query_result==1){ 
         session_start();
         $_SESSION['user_email']=$email;
         header('Location:home.php');
     }else{
     $_SESSION['message']="Username and Password doesnt match please try again";
 }
 }

?>
<?php 

if(isset($_POST['update-profile-submit'])){
    $status=$_POST['status'];
    $profession=$_POST['profession'];
    $education=$_POST['education'];
    $college=$_POST['college'];
    if(!mysqli_num_rows(mysqli_query($conn,"SELECT `user_id` from `userdetail` where `user_id`='$login_user_id'"))){
        $profile_insert_query="INSERT INTO userdetail(`user_id`,`status`,`profession`,`education`,`college`) VALUES('$login_user_id','$status','$profession','$education','$college')";
        mysqli_query($conn,$profile_insert_query) or die(mysqli_error($conn));
        
    }else{
    $profile_update_query="UPDATE `userdetail` SET `status`='$status',`profession`='$profession',`education`='$education',`college`='$college' WHERE `user_id`='$login_user_id'";
    mysqli_query($conn,$profile_update_query) or die(mysqli_error($conn));

    }
}

?>
<?php

if(isset($_POST['delete-button'])){
    $delete_account_query="DELETE FROM `registerform` WHERE `email`='$login_user_email'";
    mysqli_query($conn,$delete_account_query) or die(mysqli_error($conn));
    header("Location:index.php");
}

if(isset($_POST['update-button'])){
    header("Location:updateprofile.php");

}
?>
<?php
if(isset($_POST['delete-post'])){
    if(isset($_GET['post_id'])){
    $post_id=$_GET['post_id'];
    $delete_post_query= "DELETE FROM `user_post` WHERE `post_id`='$post_id'";
    mysqli_query($conn,$delete_post_query) or die(mysqli_error($conn));
    }
}
?>
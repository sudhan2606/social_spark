<?php 

    $get_data="SELECT * FROM `user_post` ORDER BY `post_id` DESC";
    mysqli_query($conn,$get_data) or die(mysqli_error($conn));
        $run_get_data=mysqli_query($conn,$get_data);
    while($post_result=mysqli_fetch_array($run_get_data,MYSQLI_ASSOC)):
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

?>


<div class="container rounded m-3 p-1 position-relative" style="height:40%">
        <img src="profile/<?php echo $post_user_profile_photo?>" alt="pp" class=" rounded-circle" style="width:70px;height:70px;">
        <div class="update-post position-absolute">
                <form action="home.php?post_id=<?php echo $post_id;?>" method="POST">
                
                <button type="submit" name="edit-post" class="Edit-post btn btn-success"><a href="update-post.php?post_id=<?php echo $post_id;?>" style="text-decoration:none;">Edit</a></button>
                <button type="submit" name="delete-post" class="Delete-post btn btn-danger">Delete</button>
            

                </form>
        </div>
        <?php echo $post_user_name?><br><br>
        <?php //echo $post_users_id?>
        <h6><?php echo $post_users_content?></h6>
        <div class="container text-center" style="height:60%">
            <a href="posts/<?php echo $post_users_status_image?>" data-lightbox="image-1<?php echo rand(1,100)?>"><img src="posts/<?php echo $post_users_status_image?>" alt="resposive-img" data-lightbox="image" class="img-fluid" style="max-width:100%;max-height:100%"></a>
        </div>
</div>

<?php endwhile; ?>
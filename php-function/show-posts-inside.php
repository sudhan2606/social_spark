
<div class="container  rounded m-3 position-relative inside-posts">
        <img src="profile/<?php echo $post_user_profile_photo?>" alt="pp" class=" rounded-circle" style="width:70px;height:70px;">
        <div class="update-post position-absolute">
        <?php if($post_users_id==$login_user_id):?>                                
                
                <form action="home.php?post_id=<?php echo $post_id;?>" method="POST">
                
                <button type="submit" name="edit-post" class="Edit-post btn btn-success"><a href="update-post.php?post_id=<?php echo $post_id;?>" style="text-decoration:none;">Edit</a></button>
                <button type="submit" name="delete-post" class="Delete-post btn btn-danger">Delete</button>
            

                </form>
        <?php endif; ?>
        </div>
       
        <a href="profile.php?profile-id=<?php echo $post_users_id?>"> <?php echo $post_user_name?></a><br><br>
        
        <h6><?php echo $post_users_content?></h6>
        <div class="container text-center" style="height:60%">
            <a href="posts/<?php echo $post_users_status_image?>" data-lightbox="image-1<?php echo rand(1,100)?>"><img src="posts/<?php echo $post_users_status_image?>" alt="resposive-img" data-lightbox="image" class="img-fluid" style="max-width:100%;height:100%"></a>
        </div>
</div>

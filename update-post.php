<?php
include("comfig/db.php");
include("session.php");


if(isset($_POST['upload_status'])){
    $post_content=$_POST['status_update'];
     $user_status =$_FILES['status_image']['name'];
     $user_temp_img=$_FILES['status_image']['tmp_name'];
     $random_number=rand(1,100);
     $path=$_SERVER['DOCUMENT_ROOT']."/myblog/posts/$user_status.$random_number";
     move_uploaded_file($user_temp_img,$path);
        $post_id=$_GET['post_id'];
        echo $post_id."asdasdasd";
       $post_id=(int)$post_id;
    // $update_cover_query= "UPDATE user_post SET `cover_image`='$user_cover.$random_number' WHERE email='$login_user_email'"; 
     $update_cover_query= "UPDATE `user_post` SET `post_content`='$post_content',`upload_image`='$user_status.$random_number' WHERE `post_id`='$post_id'"; 

     mysqli_query($conn,$update_cover_query) or die(mysqli_error($conn));
     header('location:home.php');
    
     } 

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>update post</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/navigation.css">
</head>
<body>
  <?php include('navigationbar.php')?>
  <div class="container">
  <div class="jumbotron">
      <form action="" method="post" enctype="multipart/form-data">
        <textarea name="status_update" rows="4" class="form-control" placeholder="What do you want to change in our Status ?"></textarea> <br>
        <label for="#upload_status_image" onclick="file3.click()" class="btn btn-primary m-0">Select Image</label>
        <input type="file" id="file3" name="status_image" class="m-0 p-0" size="30" hidden>
        <button type="submit" name="upload_status" class="btn btn-success">Upload</button>              
    </form>
  </div>    
  </div>

</body>
</html>
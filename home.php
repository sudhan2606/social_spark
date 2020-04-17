<?php
include("comfig/db.php");
include("session.php");
include("php-function/upload-status.php");
include("php-function/delete-post.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/home_style.css">
    <link rel="stylesheet" href="css/navigation.css">
    <link rel="stylesheet" href="css/lightbox.css">
    


    <title>Myblog-Home</title>
</head>
<body>
<script src="js/jquery-3.4.1.min.js"></script>

  <?php include('navigationbar.php')?>
    <section class="sec-1 ">
            <?php include("php-function/side-profile.php")?>
            <div class="middle-col-data col-5 column-2 h-100">
                <center>
                    <form action="" method="post" enctype="multipart/form-data">
                          <textarea name="status_update" rows="4" class="form-control" placeholder="What's on your Mind ?" required></textarea> <br>
                          <label for="#upload_status_image" onclick="file3.click()" class="btn btn-primary m-0">Select Image</label>
                          <input type="file" id="file3" name="status_image" class="m-0 p-0" size="30" hidden required>
                          <button type="submit" name="upload_status" class="btn btn-success">Upload</button>
                          
                    </form>
                </center>
                    
                    <?php  include("php-function/show-posts.php")?>
                            
            </div>
            <div class="col-4 column-3 position-relative" style="background-color:#E9EBEE">
                <?php include("chat.php"); ?>
            </div>    
        </div>
    </section>

<script src="js/bootstrap.min.js"></script>
<script src="js/lightbox.js"></script>

</body>
</html>
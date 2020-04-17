<?php
include("comfig/db.php");
include("session.php");
include("php-function/delete-post.php");
include("php-function/profile-cover.php");
include("php-function/delete-account.php");
include("php-function/show-profile-info.php");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/navigation.css">
    <link rel="stylesheet" href="css/profile.css">
    <link rel="stylesheet" href="css/lightbox.css">


    <title>Myblog-Profile</title>
</head>
<body>
<script src="js/jquery-3.4.1.min.js"></script>

  <?php include('navigationbar.php')?>
   
  <section class="sec-1 h-100">
       <div class="row justify-content-around h-100">
           <div class="col-7 h-100 column-1">
                    <div class="row h-50">
                            <div class="cover-photo h-100">
                                <img src="cover/<?php echo $user_cover_photo ;?>" alt="cover" class="cover-img rounded w-100">
                                <?php if($profile_id==$login_user_id):?>                                
                                <form action="" method="post" class="file_choose m-0" enctype="multipart/form-data">
                                    <label for="user_cover" onclick="file1.click()" class="btn btn-info m-0">Select cover
                                    <input id="file1" type="file" name="user_cover" class="form-control user_file m-0 mx-2" size="60" hidden ></label>
                                    <button type="submit" class="btn btn-info  " name="cover-submit">Update</button>
                                </form>
                                <?php endif ?>

                                <div class="profile-img justify-content-center">
                                    <img src="profile/<?php echo $user_profile_photo ?>" alt="profile-picture" class="rounded-circle w-25 h-25">
                                <?php if($profile_id==$login_user_id):?>
                                    
                                    <form action="" method="post" class="update-profile-img"  enctype="multipart/form-data"> 
                                        <label for="#file2" onclick="file2.click()" class="btn btn-info m-0 select-image-profile">Select Profile
                                        <input id="file2" type="file" name="user_profile_img" class="form-control  m-0" size="60" hidden ></label>
                                        <button type="submit" class="btn btn-info update-profile-image mx-2" name="profile-submit">Update pro</button>
                                    </form>
                                <?php endif ?>

                                </div>
                            </div>
                       
                        
                    </div>
                
                    <div class="row m-0 p-0 row-2nd justify-content-between w-100 h-50">
                        <div class="col-5 h-100 w-100 m-0" style="background-color:#E9EBEE">
                            <center><strong>About</strong><br>
                                <strong>Name : </strong><?php echo $user_profile_name?><br>
                                <strong>Birthday : </strong><?php echo $user_profile_birthday?><br>
                                <strong>Gender : </strong><?php echo $user_profile_gender?><br>
                                <strong>Status : </strong><?php echo $user_profile_status?><br>                              
                                <strong>Profession : </strong><?php echo $user_profile_profession?><br>
                                <strong>Education : </strong><?php echo $user_profile_education?><br>
                                <strong>College : </strong><?php echo $user_profile_college?><br>
                                
                                <strong>Email : </strong><?php echo $user_profile_email?><br>
                                <strong>Member Since : </strong><?php echo $user_profile_jointime?><br>
                                
                                <?php if($profile_id==$login_user_id):?>
                                <form action="" method="post">
                                    <button type="submit" name="update-button" class="btn btn-primary">Update Account</button>  
                                    <button type="submit" name="delete-button" class="btn btn-danger">Delete Account</button>
                                </form>
                                <?php endif ?>
                             </center>
                        </div>
                            
                        <div class="col-7 middle-col-data h-100 w-100" style="background-color:#E9EBEE;">
                    
                        <?php  include("php-function/show-posts.php")?>
                        
                        </div>

                    </div>
           </div>

           <div class="col-4 h-100 column-2 position-relative" style="background-color:#E9EBEE">
                <?php include("chat.php"); ?>     
           </div>
       </div>
    </section>
<script>
document.body.onload.scrollTop = 9999999;
</script>
<script src="js/bootstrap.min.js"></script>
<script src="js/lightbox.js"></script>

</body>
</html>
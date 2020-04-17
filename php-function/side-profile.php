<div class="row justify-content-between h-100" >
            <div class="col-2 h-100 column-1 align-items-center">
              <div class="row">
              <ol class="left-col-data py-3">
               
               <center> <img src="profile/<?php echo $login_profile_photo ?>" alt="profile-picture" class="rounded-circle w-100 100"> </center>
                <li class="left-col-item text-center "><a href="profile.php?profile-id=<?php echo $login_user_id?>" class="profile-link"><?php echo $login_user_name; ?></a></li>
                </ol>
              </div>

              <div class="row p-5">
                     
            <table class="table table-striped">
                
                <tbody>
                <tr>
                    <td>Total Users: </td>
                    <td> <?php  $all_user_query="SELECT COUNT(`id`) AS countuser FROM `registerform`";
                $user_count=mysqli_fetch_assoc(mysqli_query($conn,$all_user_query)) ;//or die(mysqli_error($conn));
                echo $user_count['countuser']; ?></td>
                </tr>
                <tr>
                    <td> Message Sent </td>
                    <td> <?php $all_user_query="SELECT COUNT(`user_id`) AS countuser FROM `message` where `user_id`='$login_user_id'";
                $user_count=mysqli_fetch_assoc(mysqli_query($conn,$all_user_query)) ;//or die(mysqli_error($conn));
                echo $user_count['countuser']; ?></td>
                </tr>
                <tr>
                    <td>Message Recieved </td>
                    <td> <?php 
                    $all_user_query="SELECT COUNT(`user_id`) AS countuser FROM `message` where `user_id`!='$login_user_id'";
                    $user_count=mysqli_fetch_assoc(mysqli_query($conn,$all_user_query)) ;//or die(mysqli_error($conn));
                    echo $user_count['countuser'];
                    ?></td>
                </tr>
                <tr>
                    <td>Post Sent</td>
                    <td> <?php   $all_user_query="SELECT COUNT(`user_id`) AS countuser FROM `user_post` where `user_id`='$login_user_id'";
                $user_count=mysqli_fetch_assoc(mysqli_query($conn,$all_user_query)) ;//or die(mysqli_error($conn));
                echo $user_count['countuser']; ?>  </td>
                </tr>
                <tr>
                    <td>Post Recieved</td>
                    <td>  <?php $all_user_query="SELECT COUNT(`user_id`) AS countuser FROM `user_post` where `user_id`!='$login_user_id'";
                $user_count=mysqli_fetch_assoc(mysqli_query($conn,$all_user_query)) ;//or die(mysqli_error($conn));
                echo $user_count['countuser']; ?></td>
                </tr>
                </tbody>
            </table>
            </div>    
             
            </div>

            
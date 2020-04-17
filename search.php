<?php  
    include('comfig/db.php');
    include("session.php");
    if(isset($_POST['search-button'])){

        if($_POST['search-item']!=""){
        
            $search_name=ucwords($_POST['search-item']);
        $get_search_query="SELECT * FROM `registerform` WHERE  CONCAT(`first name`,' ',`last name`) LIKE '%$search_name%'"; 
        mysqli_query($conn,$get_search_query) or die(mysqli_error($conn));
        $get_search_query_result=mysqli_query($conn,$get_search_query);
        }
        
    } 
    
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

</head>
<body>
<?php include('navigationbar.php')?>
<section class="sec-1 ">
            <?php include("php-function/side-profile.php")?>
            <div class="middle-col-data col-5 column-2 h-100 justify-content-start">
            <?php
                if(isset($_POST['search-button'])):
                while($search_result=mysqli_fetch_array($get_search_query_result,MYSQLI_ASSOC)):
                    $search_user_id=$search_result['id'];
                    $search_user_name=$search_result['first name']." ".$search_result['last name'];
                    $search_user_profile_photo=$search_result['user_image'];
                    $search_user_gender=$search_result['gender'];
                    $search_user_birthday=$search_result["birthday"];
                    $search_user_email=$search_result["email"];

                    
            ?>
             <div class="container d-flex h-25 pb-2" style="max-width:100%;">
                    <img src="profile/<?php echo $search_user_profile_photo?>" alt="resposive-img" data-lightbox="image" class="img-fluid rounded-circle" style="width:40%;height:100%;"> 
                    <div class="search-data w-50 h-100 d-table" >
                    <div class="d-table-cell" style="vertical-align:middle">

                    <center>
                                <a href="profile.php?profile-id=<?php echo $search_user_id?>"><?php echo $search_user_name?></a><br>
                                <strong>Birthday : </strong><?php echo $search_user_birthday?><br>
                                <strong>Gender : </strong><?php echo $search_user_gender?><br>
                                <strong>Email : </strong><?php echo $search_user_email?><br>
                                
                    </center>

                    </div>
                    </div>
             
                </div>
            
       

            <?php endwhile ?>
            <?php endif ?>

               
            </div>
            <div class="col-4 column-3 position-relative" style="background-color:#E9EBEE">
                <?php include("chat.php"); ?>
            </div>    
        </div>
    </section>
    
</body>
</html>
    
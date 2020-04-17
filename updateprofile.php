<?php  
    include('comfig/db.php');
    include("session.php");
    include("php-function/update-profile.php");
    
  
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
            <form >
             <fieldset disabled >   
                    <div class="form-inline">
                        <input type="text" class="form-control" id="disabledTextInput" placeholder="<?php echo $login_user['first name'] ?>">
                        <input type="text" class="form-control" id="disabledTextInput" placeholder="<?php echo $login_user['last name']?>">

                    </div>
                    <input type="text" class="form-control" id="disabledTextInput" placeholder="<?php echo $login_user_email?>">
                    <input type="text" class="form-control" id="disabledTextInput" placeholder="<?php echo $login_user_birthday?>">
                    </fieldset></form>
                    <form action="" method="post">
                    <div class="form-group">
                        <label for="relation">Relation Status</label>
                        <select class="form-control" name="status" id="relation">
                        <option>Single</option>
                        <option>Married</option>
                        <option>Complicated</option>

                        </select>
                    </div>


                    <div class="form-group">
                        <label for="profession">Profession</label>
                        <select class="form-control" name="profession" id="profession">
                        <option>Student</option>
                        <option>Teacher</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="education">Education</label>
                        <select class="form-control" name="education" id="education">
                        <option>Graduate</option>
                        <option>UnderGraduate</option>
                        <option>Postgraduate</option>
                        <option>Phd</option>

                        </select>
                    </div>
                    
                    <input type="text" class="form-control" name="college" placeholder="College">
                   <?php // <input type="text" class="form-control" placeholder="Country">
                    //<input type="text" class="form-control" placeholder="State"> 

                   // <input type="text" class="form-control" placeholder="City"> ?>
                   <button type="submit" name="update-profile-submit" class="btn-primary">Submit</button>

            </form>
            </div>
            <div class="col-4 column-3 position-relative" style="background-color:#E9EBEE">
                <?php include("chat.php"); ?>
            </div>    
        </div>
    </section>
    
</body>
</html>
    
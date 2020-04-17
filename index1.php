<?php
include("comfig/db.php");
include("php-function/sign-log.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/index.css">
    <title>MyBlog</title>
</head>
<body>
    <header class="header">
        <nav class="navbar m-0 p-0 navigation-change" >
            <div class="container justify-content-around">
                <div class="navbar-brand ">
                    <h1 class="myblog-heading" >SocialSpark</h1>
                </div>            
            </div>
        </nav>
        <hr class="w-100 m-0 p-0">
    </header>
    <div class="alert"><?php $_SESSION['message']; ?> </div>


    <section class="sec-1 h-100"  >
        <div class="container-fluid h-100">
            <div class="row h-100">
                <div class="col-5 d-flex justify-content-center align-items-center">
                    <div class="left-content-login">
                        <h2 class="login-heading">Have an Account ?</h2>
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" >
                        
                        <input type="email" class="form-control" name="username" Placeholder="Email" required>
                        <input type="password" class="form-control" name="login-password" Placeholder="Password" required>
                        <button type="submit" name="login" class="btn btn-primary">Login</button>
                    </form>

                    </div>
                </div>

                <div class="col-7 d-flex justify-content-center align-items-center">
                     <div class="right-content-signup">
                            <h2 class="signup-heading">Create an Account.. It's Free..!</h2>
                            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                                <div class="form-group form-inline">
                                    <input type="text" class="form-control" name="first_name" placeholder="First Name" minlength="2" maxlength="15" Required>
                                    <input type="text" class="form-control" name="last_name" placeholder="Last Name" minlength="2" maxlength="15" Required>
                                </div>
                                <input type="email" class="form-control" name="email" placeholder="Email or phone" Required aria-describedby="emailHelp" data-error="Please enter correct Email">
                                <input type="password" class="form-control" name="password" placeholder="Enter password" minlength="8" Required>
                                <label for="birthday">Birthday</label>
                                <input type="date" class="form-control" name="birthday" Placeholder="YYYY-MM-DD" required>
                                <div class="form-group" >
                                    <label for="#male">Male</label> <input type="radio" name="gender" value="male" id="male" required>
                                    <label for="#female">FeMale</label>  <input type="radio" name="gender" value="female" id="female">
                                    <label for="#others">Others</label>  <input type="radio" name="gender" value="others" id="others">
                                </div>
                                <button type="submit" name="signup" class="btn btn-primary">Signup</button>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-3.4.1.min.js"></script>
</body>
</html>
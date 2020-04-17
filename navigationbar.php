
    
    <nav class="navbar w-100 justify-content-around navbar-expand-lg ">
        
            <div class="container">
            <button class="navbar-toggler mybutton" type="button" data-toggle="collapse" data-target=".navbar-content" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <img src="wall/364-01-512.png" style="width:50px;height:50px">
        </button>
            <div class="justify-content-center"><a href="#"  class="navbar-brand justify-content-center">SocialSpark</a></div>
            
            <div class=" navbar-content collapse navbar-collapse justify-content-end">
                <form action="search.php" method='post' class="form-inline change-class" style="min-width: min-content;" enctype="multipart/form-data">
                    <input type="search" name="search-item" class="form-control search-form1" size="35" placeholder="Enter name">
                    <button type='submit' class="btn btn-primary search-form" name="search-button">Search</button>
                </form>
            </div>
                
                <div id="navbar-content" class="navbar-content collapse navbar-collapse justify-content-end change-class">
                     <ul  class="navbar-nav ">
                    <li class="nav-item"><a href="home.php" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="profile.php?profile-id=<?php echo $login_user_id?>" class="nav-link">Profile</a></li>
                    <li class="nav-item"><a href="logout.php" class="nav-link" name ="logout" method="post">Logout</a></li>
                </ul>
                

                </div>
       
            </div>
        </nav>

        <script>
           var tog=true;
            
        $(".mybutton").click(function(){
            if(tog){
            tog=false;
            $('.change-class').addClass('text-center justify-content-center');

        }else{
            $('.change-class').removeClass('text-center justify-content-center');
            tog=true;
        }
    });
        </script>


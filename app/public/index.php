<?php 
    include_once __DIR__."/../config/core/Database.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Betwixt Nexus Homepage</title>
    <link rel="stylesheet" href="../resources/assets/css/all.min.css"/>
    <link rel="stylesheet" href="../resources/assets/css/reset.css"/>
    <link rel="stylesheet" href="../resources/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../resources/assets/css/app.css">
</head>
<body>
    <div class="front-img">
	    <img src="./../resources/assets/images/tunnel.jpg"></img>
    </div>	

    <div class="wrapper">
    <!-- header wrapper -->
    <div class="header-wrapper">
        
        <div class="nav-container">
            <!-- Nav -->
            <div class="nav">
                
                <div class="nav-left">
                    <ul>
                        <li><h2>Betwixt Nexus</h2></li>
                        <li><i class="fas fa-tty" aria-hidden="true"></i><a href="#">Communicate</a></li>
                        <li><i class="fa fa-play"></i><a href="#">Video</a></li>
                        <li><i class="far fa-newspaper"></i><a href="#">Blog</a></li>
                        <li><i class="fa fa-music"></i><a href="#">Music</a></li>
                        <li><i class="fas fa-user-cog"></i><a href="#">Admin</a></li>
                        <li><a href="#">About</a></li>
                    </ul>
                </div><!-- nav left ends-->

                <div class="nav-right">
                    <ul>
                        <li><a href="#">Language</a></li>
                        <li>{screenName} <a href="front/logout.php">Log out</a></li>
                    </ul>
                </div><!-- nav right ends-->

            </div><!-- nav ends -->

        </div><!-- nav container ends -->

    </div><!-- header wrapper end -->
        
    <!---Inner wrapper-->
    <div class="inner-wrapper">
        <!-- main container -->
        <div class="main-container">
            <!-- content left-->
            <div class="content-left">
                <h1>Welcome to Betwixt Nexus</h1>
                <br/>
                <p>Where we celebrate the First Amendment by taking the best and worst parts of the ghettos of the internet and gentrifing them into one cohesive format, only here all voices are heard. That's right we don't censor or moderate.</p>
                <br>
			    <p>Please check back regularly as we are a new site and will be constantly updating and adding new features.</p>
            </div><!-- content left ends -->	

            <!-- content right ends -->
            <div class="content-right">
                <!-- Log In Section -->
                <div class="login-wrapper">
                <?php include_once __DIR__.'/front/login.php';?>
                </div><!-- log in wrapper end -->

                <!-- SIGN UP wrapper end -->

            </div><!-- content right ends -->

        </div><!-- main container end -->

    </div><!-- inner wrapper ends-->
    </div><!-- ends wrapper -->
</body>
</html>
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css"/>
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
                        <li><i class="fa fa-twitter" aria-hidden="true"></i><a href="#">Home</a></li>
                        <li><a href="#">About</a></li>
                    </ul>
                </div><!-- nav left ends-->

                <div class="nav-right">
                    <ul>
                        <li><a href="#">Language</a></li>
                        <li>{first_name, last_name} <a href="front/logout.php">Log out</a></li>
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
			    <p>We however do not condone abuse, bullying, harrassment or violence of any kind. Any content violating our terms and conditions will be flagged and blocked from other users.
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
            <div id="copyright">
		    Copyright 2021 &copy; Chrismarene Studios
		</div>
        </div><!-- main container end -->

    </div><!-- inner wrapper ends-->
    </div><!-- ends wrapper -->
</body>
</html>
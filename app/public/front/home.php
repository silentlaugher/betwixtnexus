<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Homepage</title>
    <link rel="stylesheet" href="../../resources/assets/css/all.min.css"/>
    <link rel="stylesheet" href="../../resources/assets/css/reset.css"/>
    <link rel="stylesheet" href="../../resources/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../../resources/assets/css/app.css">
</head>
<body>
    <div class="wrapper">
    <!-- header wrapper -->
    <div class="header-wrapper">
        
        <div class="nav-container">
            <!-- Nav -->
            <div class="nav">
                
                <div class="nav-left">
                    <ul>
                        <li><h2>Betwixt Nexus</h2></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-filter-square"></i>
                            Menu
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><i class="fas fa-tty" aria-hidden="true"></i><a class="dropdown-item" href="#">Communicate</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                        </li>
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
                        <li>{screenName} <a href="logout.php">Log out</a></li>
                    </ul>
                </div><!-- nav right ends-->

            </div><!-- nav ends -->

        </div><!-- nav container ends -->

    </div><!-- header wrapper end -->
    </div>
</body>
</html>
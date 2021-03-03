<?php
    //title
    $page_title = "Betwixt Nexus - Homepage -";
    //session
    include_once __DIR__."../../../config/core/session.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php if(isset($page_title)) echo $page_title;?></title>
    <link rel="stylesheet" href="../../resources/assets/css/reset.css"/>
    <link rel="stylesheet" href="../../resources/assets/css/all.min.css"/>
    <link rel="stylesheet" href="../../resources/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../resources/assets/css/burger.css">
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Betwixt Nexus</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="main-header">
    <canvas class="nav-canvas"></canvas>
        <button class="menu-js menu">
        <span class="menu-line-1 menu-line"></span>
        <span class="menu-line-2 menu-line"></span>
        <span class="menu-line-3 menu-line"></span>
        </button>

    <div class="nav-overlay nav-js">
    <div class="nav-content">
        <div class="nav-js-header nav-header">
        <div class="nav-header-line nav-js-header-line"></div>
        </div>

        <ul class="nav-links">
            <br>
            <li class="nav-link nav-js-animate"><i class="fas fa-home"></i>&ensp;<a href="../front/home.php" class="burger-link">Home</a></li>
            <li class="nav-link nav-js-animate"><i class="far fa-compass"></i>&ensp;<a href="#">About</a></li>
            <li class="nav-link nav-js-animate"><i class="far fa-newspaper"></i>&ensp;<a href="#">News</a></li>
            <li class="nav-link nav-js-animate"><i class="fas fa-address-card"></i>&ensp;<a href="#">Profile</a></li>
            <li class="nav-link nav-js-animate"><i class="fas fa-tty"></i>&ensp;<a href="#">Parle</a></li>
            <li class="nav-link nav-js-animate"><i class="fa fa-film"></i>&ensp;<a href="#">Video</a></li>
            <li class="nav-link nav-js-animate"><i class="fas fa-file-signature"></i>&ensp;<a href="#">Blog</a></li>
            <li class="nav-link nav-js-animate"><i class="fa fa-music"></i>&ensp;<a href="#">Music</a></li>
        </ul>

        <div class="nav-sublinks nav-js-animate">
        <div class="nav-js-animate">
            <ul>
                <i class="fas fa-user-cog" style="padding-left:-55px;"></i><a class="nav-sublink" href="#" style="font-weight:800;">Admin</a><br>
                <i class="fas fa-power-off"></i><a class="nav-sublink" href="../front/logout.php" style="font-weight:800;">Log out</a>
            </ul>
            
        </div>
            
        </div>

        </div>

    </div>

    
        </div>
        <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" style="width: 325px; margin-left: -125px;">
        <button class="btn btn-outline-secondary" type="submit">Search</button>
      </form>
      <div class="nav-right">
      &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<small style="height:18px;">Welcome </small>&nbsp;<img src="../../resources/assets/images/avatar-image.png" class="img rounded-circle" alt="sample image" height="20px;" width="20px;" padding-top="-10px;"> {screenName}&ensp;&emsp;<a href="#">Language</a>
        </div>
    </div>
    </nav>

    <script src="../../resources/assets/js/jquery-3.5.1.min.js"></script>
    <script src="../../resources/assets/js/bootstrap.min.js"></script>
    <script src="../../resources/assets/js/burger.js"></script>
    <script src="../../resources/assets/js/anime.min.js"></script>
</body>
</html>
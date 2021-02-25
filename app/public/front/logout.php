<?php 
    include_once __DIR__."../../../config/core/session.php";

    session_destroy();
    header('location: ../public/front/index.php')
?>
<?php
    //include session
    include_once __DIR__."../../../config/core/session.php";
    //add utilities functions file
    include_once __DIR__."../../../config/core/utilities.php";
    //end the session
    session_destroy();
    //implement redirect
    redirectTo('../index');
?>
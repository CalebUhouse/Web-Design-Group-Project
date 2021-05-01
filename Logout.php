<?php
    // require the include
    require "Restaurant.inc";
    
    // log out
    session_destroy();

    // go back to home page
    header( "Location: Index.php" );
?>

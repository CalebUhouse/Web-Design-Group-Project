<?php

  require "Restaurant.inc";

  HTMLStart( "Index Page" );

  HTMLHeader();

?>

        <section>
            <p>
                Welcome to the Redrock Tavern! We've got the best Chicken Dinner on Chicken Dinner Road.
                Check out our extensive menu of rustic, homestyle favorites like "chicken" and "sweet tea".
                Dine in and enjoy the live music every other Thursday, or order Takeout. Everyone is welcome except Kevin,
                he knows what he did.
            </p>
            <div>
                 <img src="https://www.redrockcanyonlv.org/wp-content/uploads/red-rock-canyon-vista.jpg">
            </div>
        </section>  
        

<?php
    PageSideBar();
?>
        <nav>
            <div class="navigation-bar">
                <a title="Home" href="Index.php">Home</a>
            </div>
            <div class="navigation-bar">
                <a title="About" href="About.php">About</a>
            </div>
            <div class="navigation-bar">
                <a title="Menu" href="Menu.php">Menu</a>
            </div>
            <div class="navigation-bar">
                <a title="Map Page" href="Map.php">Find Us</a>
            </div>
            <div class="navigation-bar">
                <a title="Contact Page" href="Contact Us.php">Contact Us</a>
            </div>
            <div class="navigation-bar">
                <a title="Contact Page" href="Takeout.php">Order Takeout</a>
            </div>
        </nav>

<?php
  PageFooter();
?>

<?php
  HTMLEnd();
?>

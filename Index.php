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

    PageNav();

    PageFooter();

  HTMLEnd();
?>

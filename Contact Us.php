<?php

  require "Restaurant.inc";

  HTMLStart( "Contact Us Page" );

  HTMLHeader();

?>

    <section>
        <p class="section-header top-header">
                Contact us!  
        </p>
            <p class="section-header">
                Chicken Dinner Road, Caldwell, ID, USA
            </p>
            <p class="section-header">
                Phone: 202-555-0186
            </p>
            <p class="section-header">
                No Checks accepted, sorry.
            </p>
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

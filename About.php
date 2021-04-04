<?php

  require "Restaurant.inc";

  HTMLStart( "About Page" );

  HTMLHeader();

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
      
      <section>
        <p class="section-header top-header">About the Restaurant</p>
        <p>The Redrock Tavern is located on Chicken Dinner Road, Idaho. We have a great staff who will cater 
          to what ever you need while you are there. We hope you have a wonderful time here at the Redrock Inn and consider eating 
          here again.
        </p> 
        <h2>The History of The Redrock Inn</h2>
        <p>When we started this restaurant nobody thought we could get this far, but only through hard work and determination
          has our dream came true. This restaurant started out as an idea in our heads. I'm not quite sure who thought of the 
          idea to create a restaurant but we all saw it through. The Redrock Inn has a variety of food and the staff is always 
          willing to help. The owners of this restaurant are Caleb Uhouse, Daniel Cramer, and Seth Workman. Their contact info 
          is in the link to the side. 
        </p>
      </section>
<?php
  PageSideBar();

  PageFooter();
?>
<?php
  HTMLEnd();
?>

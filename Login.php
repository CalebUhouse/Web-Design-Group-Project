<?php

  require "Restaurant.inc";

  // check for POST variables
    if ( isset( $_POST["email"] ))
    {
        
        Login( $_POST["email"], $_POST["password"] );
        
    }

  HTMLStart( "Login Page" );

  HTMLHeader();

    PageNav();
?>
      
      <section>
        <form action= "Login.php" method="POST">
        <p>Email Address: <input name="email" required="true"/></p>
        <p>Password: <input name="password" type="password" required="true" /></p>
        <p><button type="submit">Log on</button></p>
        </form>
      </section>


<?php
  PageSideBar();

  PageFooter();

  HTMLEnd();
?>

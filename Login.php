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
        <p class="section-header top-header">WIP</p>
        <form action="Index.php" method="POST">
      <p>Email: <input name="Email" type="email" required="true"/></p>
        <p>Password: <input name="Password" type="password" required="true" /></p>
        <p><button type="submit">Log on</button></p>
        </form>
      </section>


<?php
  PageSideBar();

  PageFooter();

  HTMLEnd();
?>

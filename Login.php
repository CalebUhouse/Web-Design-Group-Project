<?php

  require "Restaurant.inc";

  HTMLStart( "Login Page" );

  HTMLHeader();

    PageNav();
?>
      
      <section>
        <p class="section-header top-header">WIP</p>
        form action="login.php" method="POST">
      <p>Email Address: <input name="email" required="true"/></p>
        <p>Password: <nput name="password" type="password" required="true" /></p>
        <p><button type="submit">Log on</button></p>
      </section>
    <
<?php
  PageSideBar();

  PageFooter();

  HTMLEnd();
?>

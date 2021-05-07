<?php

  require "Restaurant.inc";

  HTMLStart( "Login Page" );

  HTMLHeader();

    PageNav();
?>
      
      <section>
        <p class="section-header top-header">WIP</p>
        <form action="Index.php" method="POST">
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

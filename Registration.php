<?php

  require "Restaurant.inc";

  HTMLStart( "Login Page" );

  HTMLHeader();

    PageNav();
?>
      
      <section>
        <form name="registration" action="registration-insert.php" method="POST">
            <p>Email Address: <input name="email" type="email" required="true" /></p>
            <p>Password: <input name="password" type="password" required="true" /></p>
            <p>Name: <input name="name" type="text" required="true" /></p>
            <p>Address Line: <input name="address" type="text" required="true" /></p>
            <p>City: <input name="city" type="text" required="true" /></p>
            <p>State: <input name="state" type="text" required="true" /></p>
            <p>Zip Code: <input name="zip" type="text" required="true" /></p>
            <p><button type="submit">Insert Data</button></p>   
        </form>
        
      </section>
<?php
  PageSideBar();

  PageFooter();

  HTMLEnd();
?>
